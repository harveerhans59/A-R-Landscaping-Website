<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hans114_db;charset=utf8', 'hans114_db', 'mypassword');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}