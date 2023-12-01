<?php
ini_set("display_errors", 0);
class Database {
    public static function db(){
        $ini = dirname(__FILE__) . "/dbconfig.ini";
        $config = parse_ini_file($ini, true);
        if ($config === false) {
            die('INI dosyası okunamadı');
        }
        $dbHost = $config['database']['host'];
        $dbName = $config['database']['dbname'];
        $dbUser = $config['database']['username'];
        $dbPassword = $config['database']['password'];
        $dsn = "mysql:host={$dbHost};dbname={$dbName}";

        try {
            $pdo = new PDO($dsn, $dbUser, $dbPassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Veritabanı bağlantı hatası: ' . $e->getMessage());
        }
    }
}
function query_item($table, $idkey) {
    $query = "SELECT * FROM $table WHERE idkey = :idkey";
    $pdo = Database::db();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':idkey', $idkey);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function admin_safe($username, $password) {
    $query = "SELECT * FROM adminusers WHERE username = :username and password = :password";
    $pdo = Database::db();
    $stmt = $pdo->prepare($query);
    $data = array(
        'username'=>$username,
        'password'=>md5($password)
    );
    $stmt->execute($data);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function admin_safe_idkey($idkey) {
    $query = "SELECT idkey FROM users WHERE idkey = :idkey";
    $pdo = Database::db();
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':idkey',$idkey);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function call($phone){
    $mask_inputs = array(".", ",", " ", "(", ")", "+");
    return str_replace($mask_inputs, "", $phone);
  }
?>