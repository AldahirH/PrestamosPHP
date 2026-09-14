<?php
    #Parametros de conexión a la base de datos
    const SERVER="localhost";
    const DB="prestamos";
    const USER="root";
    const PASS="";

    #Constante para enviarle los parámetros al modelo que se 
    #conectará a lla bd
    const SGBD="mysql:host=".SERVER.";dbname=".DB;


    const METHOD="AES-256-CBC";
    const SECRET_KEY='$PRESTAMOS@2020';
    const SECRET_IV='037970';
    