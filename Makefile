composer:
	composer dump-autoload

install:
	composer install

test: composer
	./vendor/bin/phpunit tests

test-filter: composer
	./vendor/bin/phpunit tests --filter=$$name
