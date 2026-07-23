Desenvolvimento

Para iniciar o Tailwind CSS em modo de desenvolvimento (watch):

npm run dev

O Tailwind irá observar alterações nos arquivos e gerar automaticamente:

assets/css/output.css

Deixe esse comando em execução durante o desenvolvimento.

Build para Produção

Para gerar a versão otimizada do CSS:

npm run build

O arquivo compilado será atualizado em:

assets/css/output.css
Estrutura do Projeto
colatto/
├── assets/
│   ├── css/
│   │   ├── app.css
│   │   └── output.css
│   ├── js/
│   ├── images/
│   └── fonts/
├── footer.php
├── functions.php
├── header.php
├── index.php
├── style.css
├── theme.json
├── package.json
└── screenshot.png
Scripts Disponíveis

Instalar dependências:

npm install