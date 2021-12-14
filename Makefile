# Makefile

install:
	@composer install

brain-games:
	@./bin/brain-games

val:
	@composer validate

dump:
	@composer dump-autoload
