## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 20 ou superior - Conferir a versão: node -v
* GIT -conferir a instalação: git -v
* MySQL 8 ou superior (Xampp já vem instalado)

## Sequência para criar o projeto

Criar o projeto com laravel
````
composer create-project laravel/laravel .
````
Iniciar o projeto criado com laravel
````
php artisan serve
````
Acessar o conteudo com laravel
````
http://127.0.0.1:8000
````
Instalar as dependências do Node.js
````
npm install
````
Executaras bibliotecas do Node.js
````
npm run dev
````
Instalar bootstrap
````
npm i --save bootstrap @popperjs/core
````
Instalar o sass.
````
npm i --save-dev sass
````
## Como utilizar o GITHUB

Ibicializar um novo repositório GIT.
````
git init
````
Adicionar todos os arquivos modificados no sta
````
git add .
````
git commit -m "Base do projeto"
````
commit representa um conjunto de alterações
````
Verificar a branch
````
git branch
````
Renomear a branch atual no GIT para main
````
git branch -M main
````
Adicionar um repositorio remoto ao repositorio local
````
git remote add origin https://github.com/WindenbergMelo/Assistente-en.git
````
git push -u origin main