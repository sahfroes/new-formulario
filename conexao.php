<?php
/**
 * Este arquivo realiza a conexão de banco com o MySql
 */

$dsn = 'mysql:dbname=crud;host=localhost';
$user = 'root';
$password = '';

try {
    $bancoSarah = new PDO($dsn, $user, $password);
} catch (\Exception $th) {
    echo "<h1>Erro de conexão com banco</h1>";
    echo '<pre>';
    print_r($th);
    echo '</pre>';
    //throw $th;
}
