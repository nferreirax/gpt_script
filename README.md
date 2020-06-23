# Programação Web
Descrição do Projeto
Este projeto foi desenvolvido no ambito da cadeira de Programação Web do curso de Informatica do ISMAI. Tem como objetivo a criação de um website que atua no Nicho GPT (Get Paid To). 
PAra este projeto foi utilizada a framework laravel. Este script permite adicionar empresas de offerwalls como a Offertoro, Matomy, Yousurvey, SaySoGood, RevenueWall e todas as que utilizem iframe para mostrar as tarefas  

Instalar Script:

- Fazer download dos ficheiros do repositório
- Renomear o ficheiro .env.example para .env
- Alterar os dados da base de dados
<pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
</pre>
- Instalar as dependências do projeto, abrir linha de comandos na pasta do projeto e correr
<pre>
composer installer
</pre>
- Criar as tabelas e popular com os dados necessários
<pre>
php artisan key:generate
php artisan migrate
php artisan db:seed
</pre>
- Executar este código para usar o servidor embutido da Laravel e aceder com http://localhost:8000
<pre>
php artisan serve
</pre>
- Login user normal
<pre>
user@user.com
12345678
</pre>
- Login user admin
<pre>
admin@admin.com
12345678
</pre>

