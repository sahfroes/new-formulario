<?php
$erro='O Registro não foi salvo pq nao deu.';
if($erro){
    header("location:editar-usuario.php?id=1&erro={$erro}");
}else{
    header("location:usuarios.php");
}