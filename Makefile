composer:
	composer update

install:
	composer install

test: composer
	./vendor/bin/phpunit tests

test-filter: composer
	./vendor/bin/phpunit tests --filter=$$name
