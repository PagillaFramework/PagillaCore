shell:
	docker-compose run app bash

phpunit:
	docker-compose run app ./vendor/bin/phpunit tests
