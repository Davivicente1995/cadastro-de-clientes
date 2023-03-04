## Para rodar o projeto segue as instruções abaixo

PHP 8
==========
Composer
==========
xampp:
==========


- Criar A base de dados 'dbclientes' no servidor MYSQL

- Alterar as credenciais do banco de dados no arquivo '.env' -> Padão Local.

    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=dbclientes
    DB_USERNAME=root
    DB_PASSWORD=

- Executar as Migration: php artisan migrate
- Executar Seender: php artisan db:seed

- Rodar o projeto: php artisan serve

Acessar no navegador:
localhost:8000
ou
http://127.0.0.1:8000/

- http://127.0.0.1:8000/cadastro
    cadastrar clientes
- http://127.0.0.1:8000/consulta
    consultar clientes

##FIM