# SETUP LARAVEL / MYSQL

Uma base de aplicação laravel, com Docker, Nginx e Mysql para estudos em PHP Orientado a objetos, com o framework Laravel.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx
- Laravel 11

## Como usar

Primeiro basta clonar o repositório

`git clone bla bla bla`

Agora entre na pasta com o terminal 
`cd setup-laravel-docker`

E agora basta rodar o docker

`docker-compose up -d`

Pronto,é sucesso!

## Instalar

Entre no container:

`docker-compose exec php bash`

E execute o composer install:

`composer install`


Pronto, agora acesse o http://localhost:8080
