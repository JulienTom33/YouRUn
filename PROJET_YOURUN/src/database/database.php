<?php

// variable de la base de données
const DB_HOST = 'localhost';
const DB_PORT = '3306';
const DB_NAME = 'yourun';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';

// fonction qui permet la connection à la base de données
function getConnect(): \PDO
{
    return new \PDO(
        'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME,
        DB_USERNAME,
        DB_PASSWORD
    );
}

?>