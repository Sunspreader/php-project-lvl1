# Makefile

install:
	@composer install

brain-games:
	@./bin/brain-games

brain-even:
	@./bin/brain-even

brain-calc:
	@./bin/brain-calc

val:
	@composer validate

dump:
	@composer dump-autoload

all:
	@composer update
	@composer install
	@composer validate
	@composer dump-autoload

lint:
	@composer exec --verbose phpcs -- --standard=PSR12 src bin

