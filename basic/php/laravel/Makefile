ip:
	docker inspect -f {{range.NetworkSettings.Networks}}{{.Gateway}}{{end}} api-laravel-php
up:
	docker-compose up
down:
	docker-compose down
php:
	docker exec -it api-laravel-php bash
db:
	docker exec -it api-laravel-sql bash -c "mysql -u sail -p'password' laravel"
