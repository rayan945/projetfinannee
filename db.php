<?php
function getPDO(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                'mysql:host=sql7.freesqldatabase.com;dbname=sql7821663;charset=utf8',
                'sql7821663',
                'eH2vyjHlEa'
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
            die();
        }
    }
    return $pdo;
}