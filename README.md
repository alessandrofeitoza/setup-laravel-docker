## Como usar

1. Clonar a aplicação
```shell
git clone https://github.com/alessandrofeitoza/setup-laravel-docker
```

2. Entrar no diretório
```shell
cd setup-laravel-docker
```

3. Subir o docker
```shell
docker compose up -d
```

4. Instalar as dependencias
```shell
docker compose exec -T php composer install  
```

5. Gerar chaves do Laravel
```shell
docker compose exec -T php artisan key:generate  
```

6. Copiar .env
```shell
docker compose exec -T php "cp .env.example .env" 
```

7. Atualizar o banco
```shell
docker compose exec -T php "artisan migrate" 
```


Pronto, deve estar rodando em <http://localhost:8000>
