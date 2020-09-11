## Installation

```bash
$ composer install
$ npm install

```

## Configuration

Créez un fichier .env

_.env_
```ini

APP_ENV=dev
APP_SECRET=53fff52cf067d25a293d85d0745a3fe7
DATABASE_URL=mysql://root:root@127.0.0.1:3306/db_name?serverVersion=5.7

```


## Développement

### Base de données

Crée un jeu de données avec un compte admin:admin

```bash
$ make data-test 
```
### Assets

Compiler les assets en mode watch

```bash
$ npm run watch 
```

voir: https://symfony.com/doc/current/frontend.html#webpack-encore

### Symfony

Lancer un server http

```bash
php bin/console server:run
```
