Symfony
========================

Installation de Symfony Standard Edition en version 3.5.5.

Ce projet est composé d'un système utilisateur ainsi qu'une base MODIFIER du tuto d'openclassroom de symfony : <https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony>


How to use ?
========================

Prérequis:

* Composer.phar installé et à jour.



Déploiment:

* <code>composer install</code> , ou <code>php ../composer.phar install</code> en étant dans le dossier du projet

* <code>php bin/console doctrine:database:create</code>

* <code>php bin/console doctrine:schema:create</code>

* <code>php bin/console doctrine:fixtures:load</code>

Pensez à configurer votre serveur de mail dans parameters.yml

```php
    mailer_transport: smtp
    mailer_port: 587
    mailer_host: smtp.office365.com
    mailer_user: 172644@supinfo.com
    mailer_password: xxxxxxxx
    mailer_auth: login
    encryption: tls
```

Ainsi que le config.yml

```php
# Swiftmailer Configuration
swiftmailer:
    transport: '%mailer_transport%'
    encryption: %encryption%
    port : %mailer_port%
    auth_mode:  %mailer_auth% # login, plain ou cram-md5
    host: '%mailer_host%'
    username: '%mailer_user%'
    password: '%mailer_password%'
    spool: { type: memory }
```

IMPORTANT
==============

A chaque pull réaliser il faut impérativement penser à mettre à jour la base de données, sous peine de se prendre des erreurs

```php
php bin/console doctrine:schema:update --force
```

Contributeurs
==============

Pour l'instant je suis tout seul :

Erwan Locart - 172644@supinfo.com