init:
	docker-compose build --force-rm --no-cache
	make up
up:
	docker-compose up -d

down:
	docker-compose down

dump-autoload:
	docker exec -it superskeleton composer dump-autoload

schema-update:
	docker exec -it superskeleton /var/www/super-skeleton/bin/console doctrine:database:create --if-not-exists
	docker exec -it superskeleton /var/www/super-skeleton/bin/console doctrine:schema:update --force