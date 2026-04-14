<?php
function getPDO(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                'mysql:host=sql7.freesqldatabase.com;dbname=sql7823249;charset=utf8',
                'sql7823249',
                'PCAG4XI7E4'
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
            die();
        }
    }
    return $pdo;
}