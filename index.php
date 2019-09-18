<?php

require_once ("config.php");

/*$sql = new Sql();

$usuario = $sql->select("SELECT * FROM tb_usuario");

echo json_encode($usuario);
*/

/* carrega um usuario
$user = new User();

$user->loadById(6);

echo $user;
*/

/*carrega uma lista

$list = User::getList();

echo json_encode($list);
*/

/*carrega uma lista pelo login

$search = User::search("re");

echo json_encode($search);
*/

//carrega um usuario usando login e senha

$user = new User();

$user->login("ryuji", "217362");

echo $user;

?>
