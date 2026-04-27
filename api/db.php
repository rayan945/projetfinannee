<?php
function getPDO(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $pdo = new PDO(
                'mysql:host=sql7.freesqldatabase.com;dbname=sql7824567;charset=utf8',
                'sql7824567',
                '7VWYgqaWmF'
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
            die();
        }
    }
    return $pdo;
}