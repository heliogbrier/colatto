<?php
/**
 * Configurações institucionais do tema (e-mail, telefone e endereço).
 *
 * Implementado com a Settings API nativa do WordPress, sem dependência de
 * plugins externos. Os valores ficam disponíveis em qualquer parte do tema
 * através de theme_get_email(), theme_get_phone() e theme_get_address().
 */

if (!defined('ABSPATH')) {
    exit;
}

const COLATTO_INSTITUTIONAL_OPTION = 'colatto_institutional_info';
const COLATTO_INSTITUTIONAL_GROUP  = 'colatto_institutional_group';
const COLATTO_INSTITUTIONAL_PAGE   = 'colatto-institutional';

/**
 * Valores padrão usados quando o campo ainda não foi preenchido no painel.
 */
function colatto_institutional_defaults() {
    return [
        'email'   => '',
        'phone'   => '',
        'address' => '',
    ];
}

/**
 * Retorna as informações institucionais salvas, mescladas com os padrões.
 */
function colatto_get_institutional_info() {
    $saved = get_option(COLATTO_INSTITUTIONAL_OPTION, []);

    if (!is_array($saved)) {
        $saved = [];
    }

    return wp_parse_args($saved, colatto_institutional_defaults());
}

/**
 * Sanitiza cada campo do array antes de persistir a opção.
 *
 * O endereço aceita tags HTML seguras (ex.: <br />) para permitir quebras
 * de linha; os demais campos são reduzidos a texto simples.
 */
function colatto_sanitize_institutional_info($input) {
    $input = is_array($input) ? $input : [];

    return [
        'email'   => isset($input['email']) ? sanitize_email($input['email']) : '',
        'phone'   => isset($input['phone']) ? sanitize_text_field($input['phone']) : '',
        'address' => isset($input['address']) ? wp_kses_post($input['address']) : '',
    ];
}

add_action('admin_init', 'colatto_register_institutional_settings');
/**
 * Registra a opção, a seção e os campos via Settings API.
 */
function colatto_register_institutional_settings() {
    register_setting(
        COLATTO_INSTITUTIONAL_GROUP,
        COLATTO_INSTITUTIONAL_OPTION,
        [
            'type'              => 'array',
            'sanitize_callback' => 'colatto_sanitize_institutional_info',
            'default'           => colatto_institutional_defaults(),
        ]
    );

    add_settings_section(
        'colatto_institutional_section',
        'Informações Institucionais',
        function () {
            echo '<p>Estes dados são exibidos automaticamente nas páginas do tema (rodapé, seção de contato, etc.).</p>';
        },
        COLATTO_INSTITUTIONAL_PAGE
    );

    $fields = [
        'email'   => 'E-mail',
        'phone'   => 'Telefone',
        'address' => 'Endereço',
    ];

    foreach ($fields as $key => $label) {
        add_settings_field(
            $key,
            $label,
            'colatto_render_institutional_field',
            COLATTO_INSTITUTIONAL_PAGE,
            'colatto_institutional_section',
            ['key' => $key]
        );
    }
}

/**
 * Renderiza cada campo do formulário de acordo com seu tipo.
 */
function colatto_render_institutional_field($args) {
    $key   = $args['key'];
    $info  = colatto_get_institutional_info();
    $value = $info[$key];
    $name  = sprintf('%s[%s]', COLATTO_INSTITUTIONAL_OPTION, $key);
    $id    = sprintf('colatto-institutional-%s', $key);

    switch ($key) {
        case 'email':
            printf(
                '<input type="email" id="%1$s" name="%2$s" value="%3$s" class="regular-text" placeholder="contato@exemplo.com" />',
                esc_attr($id),
                esc_attr($name),
                esc_attr($value)
            );
            break;

        case 'phone':
            printf(
                '<input type="text" id="%1$s" name="%2$s" value="%3$s" class="regular-text" placeholder="(48) 3028-0965" />',
                esc_attr($id),
                esc_attr($name),
                esc_attr($value)
            );
            break;

        case 'address':
            printf(
                '<textarea id="%1$s" name="%2$s" rows="4" class="large-text">%3$s</textarea>
                <p class="description">Você pode usar <code>&lt;br /&gt;</code> para quebrar linhas.</p>',
                esc_attr($id),
                esc_attr($name),
                esc_textarea($value)
            );
            break;
    }
}

add_action('admin_menu', 'colatto_add_institutional_settings_page');
/**
 * Adiciona a página de configurações em Configurações > Informações Institucionais.
 */
function colatto_add_institutional_settings_page() {
    add_options_page(
        'Informações Institucionais',
        'Informações Institucionais',
        'manage_options',
        COLATTO_INSTITUTIONAL_PAGE,
        'colatto_render_institutional_settings_page'
    );
}

/**
 * Renderiza a página de configurações no admin.
 */
function colatto_render_institutional_settings_page() {
    if (!current_user_can('manage_options')) {
        wp_die(esc_html__('Você não tem permissão para acessar esta página.'));
    }
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields(COLATTO_INSTITUTIONAL_GROUP);
            do_settings_sections(COLATTO_INSTITUTIONAL_PAGE);
            submit_button('Salvar alterações');
            ?>
        </form>
    </div>
    <?php
}

/**
 * Retorna o e-mail institucional configurado, ou um valor padrão.
 */
function theme_get_email() {
    $info = colatto_get_institutional_info();

    return $info['email'] !== '' ? $info['email'] : 'contato@colattoadvogados.com.br';
}

/**
 * Retorna o telefone institucional configurado, ou um valor padrão.
 */
function theme_get_phone() {
    $info = colatto_get_institutional_info();

    return $info['phone'] !== '' ? $info['phone'] : '(48) 3028-0965';
}

/**
 * Retorna o endereço institucional configurado, ou um valor padrão.
 *
 * O valor pode conter tags HTML seguras (ex.: <br />) definidas no painel.
 */
function theme_get_address() {
    $info = colatto_get_institutional_info();

    return $info['address'] !== '' ? $info['address'] : 'Rua dos Ilhéus, n. 38, sala 1.204, Centro<br />Florianópolis/SC, CEP 88010-560';
}
