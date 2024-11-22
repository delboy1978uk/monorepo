# bone native backend api
[![Latest Stable Version](https://poser.pugx.org/delboy1978uk/bone-native-backend-api/v/stable)](https://packagist.org/packages/delboy1978uk/bone-native-backend-api) [![Total Downloads](https://poser.pugx.org/delboy1978uk/bone-native-backend-api/downloads)](https://packagist.org/packages/delboy1978uk/bone-native-backend-api) [![Latest Unstable Version](https://poser.pugx.org/delboy1978uk/bone-native-backend-api/v/unstable)](https://packagist.org/packages/delboy1978uk/bone-native-backend-api) [![License](https://poser.pugx.org/delboy1978uk/bone-native-backend-api/license)](https://packagist.org/packages/delboy1978uk/bone-native-backend-api)<br />
![build status](https://github.com/delboy1978uk/bone-native-backend-api/actions/workflows/master.yml/badge.svg)<br />
A pre configured Bone Framework app to provide a secure API for Bone Native apps.
## requirements
- Git
- Docker
## installation
We recommend using `boneframework/lamp`. Clone it, `cd` into the folder and delete the placeholder code folder. Then clone 
this repository. You can add `127.0.0.1 awesome.bone` to your `/etc/hosts`. This can be customised (see below) 
```
git clone https://github.com/delboy1978uk/lamp myproject
cd myproject
rm -fr .git
rm -fr code
git clone https://github.com/delboy1978uk/boneframework code
cd code
rm -fr .git
git init
cp .env.example .env
cd ..
```
To start up the development server, simply run
```
bin/start
```
The server starts up, and you can see logs scrolling past in real time. 
## configuration
Open another tab, and run the following commands:
```
bin/terminal php
composer install
bone migrant:diff
bone migrant:migrate
bone migrant:generate-proxies
bone migrant:fixtures
bone assets:deploy
exit
```
Then browse to `https://awesome.bone`, and you will see the site running.
## mailhog
The development also has Mailhog running at `https://awesome.bone:8025`, so you can configure any dev emails to use 
SMTP port `1025` and all outgoing mails will appear in the Mailhog outbox.
## mariadb
MariaDB is running, on host `mariadb` (see `docker-compose.yml`), and `config/bone-db.php`).
## docker php container shell
To "ssh" into your server in order to run PHP commands like composer etc, type the following in a fresh terminal window.
Type `exit` to return to your local shell.
```
bin/terminal php
```
To shut down your server, `CTRL-C` out, then type `bin/stop`.
## learn more
You can learn more about the Docker LAMP stack here https://github.com/delboy1978uk/lamp 

You can learn more about Bone Framework here https://github.com/delboy1978uk/boneframework

You can learn more about Bone Native here https://github.com/delboy1978uk/bone-native 
