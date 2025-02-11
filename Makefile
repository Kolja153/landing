.PHONY: up stop bash logs ps build down analyze unittest setgithooks resetgithooks

up:
	docker compose up -d
stop:
	docker compose stop
build:
	docker compose build
bash:
	docker compose exec php bash

