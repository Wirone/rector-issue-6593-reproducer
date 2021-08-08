# Rector issue 6593 reproducer

- clone this repo and enter its directory
- `docker-compose run php composer install && composer rector`

It should result with `Syntax error, unexpected '}', expecting T_VARIABLE` error while processing files.
