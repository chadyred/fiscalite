Fiscalité sur Symfony Standard Edition
========================

1) Installation de GestionFiscaliteBundle
----------------------------------

### Utiliser Composer (*recommandé*)

Mettre à jour le dossier vendor et la version de Symfony 2
    curl -s http://getcomposer.org/installer | php
    php composer.phar install
    php composer self-update
    php composer update
    
2) Verifier le système de configuration app/config
-------------------------------------

    php app/check.php

Access the `config.php` script from a browser:

    http://127.0.0.1:8020/fiscalite/app/config.php
Commande à vérifier...

Vérifier surtout le dossier app/config
Notamment le fichier 
    parameters.yml

    parameters:
    database_driver:   pdo_mysql
    database_host:     127.0.0.1
    database_port:     ~
    database_name:     fiscalite
    database_user:     root
    database_password: root

    mailer_transport:  smtp
    mailer_host:       127.0.0.1
    mailer_user:       ~
    mailer_password:   ~

    locale:            fr
    secret:            fiscalitekey


3) Naviguer dans GestionFiscaliteBundle en mode développeur
--------------------------------

http://127.0.0.1:8020/web/app_dev.php/fiscalite

4) Naviguer dans GestionFiscaliteBundle en mode production
-------------------------------

http://127.0.0.1:8020/web/fiscalite

5) Déployer le projet 
---------------

Vider le cache
    ./cacheClear
c'est à dire ...
    sudo rm -rf app/cache/*
    sudo rm -rf app/logs/*
    sudo chmod -R 777 app/cache
    sudo chmod -R 777 app/logs
    php app/console cache:clear
    sudo chmod -R 777 app/cache
    sudo chmod -R 777 app/logs
    sudo chmod -R 777 app/cache/*

Déployer
    ./deploy
c'est à dire ...
    sudo app/console doctrine:schema:update --force
    sudo app/console assets:install web --symlink
    sudo app/console assetic:dump --force
    sudo chmod -R 777 *
    sudo rm -rf app/cache/*
    sudo rm -rf app/logs/*
    sudo chmod -R 777 app/cache
    sudo chmod -R 777 app/logs
    php app/console cache:clear
    sudo chmod -R 777 app/cache
    sudo chmod -R 777 app/logs
    sudo chmod -R 777 app/cache/* 

Copier sur le serveur de production
    scp -r src/* root@172.17.0.153:/home/prod2010/fiscalite/src/

6) Sauvegarde de sa base sql
------------------------------- 
    ssh -X root@172.17.0.153
    cd /home/prod2010/fiscalite
    mysqldump -h 127.0.0.1  -u root -ppass fiscalite > fiscalite_dump.sql

