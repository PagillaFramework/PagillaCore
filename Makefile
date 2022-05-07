shell:
	docker-compose run app bash

tests:
	docker-compose run app ./vendor/bin/phpunit tests
