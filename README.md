# README

## POURQUOI CONNECT.BJ

CONNECT.BJ, vise à offrir un service de connection 100% qui met en relation des FAIs et leur consommateurs.

## Development Technology

- PHP
- Laravel Framework

## Execution Procedure

Accéder au projet
```bash
$ git clone https://github.com/Innov-Prime/connect_dev.git
$ cd connect_dev

```
Installer les dépendances
```bash

==== INSATALLATION DES DEPENDANCES  ============
composer require laravel/ui


```
Configuration de la base de donnée
```bash

==== DB CONFIGURATION  ============
    ==> Créer une base de donnée
    ==> Allez dans le fichier .env puis renseigner les coordonnées de votre DB que vous venez de créer

```
Migration des data par defaut dan sla DB
```bash

==== DB migration  ============
    Tapez::
    ==> $ php artisan migrate --seed(pour migrer les factories par defaut)

```
Démarrer le serveur en développement
```bash

==== DEMARRAGE REEL DU PROJET ============
$ php artisan serve