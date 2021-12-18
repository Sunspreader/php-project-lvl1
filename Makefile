# Makefile

install:
	@composer install

brain-games:
	@./bin/brain-games

brain-even:
	@./bin/brain-even

brain-calc:
	@./bin/brain-calc

brain-gcd:
	@./bin/brain-gcd

brain-progression:
	@./bin/brain-progression

brain-prime:
	@./bin/brain-prime

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

