up:
	docker compose up -d

up_build:
	docker compose up -d --build

bash:
	docker compose exec php bash

down:
	docker compose down

db:
	docker compose exec mysql bash

# só usa uma vez, pra configurar um novo projeto
setup:
	# copiar o .env se ainda não existir
	cp --update=none laravel/.env.example laravel/.env

	# instalar as dependencias/pacotes
	docker compose exec php bash -c "composer install"

	# Gerar a chave de autenticação do laravel
	docker compose exec php bash -c "php artisan key:generate"

	# Atualizar o esquema do banco (criar tabelas, etc)
	docker compose exec php bash -c "php artisan migrate"

