<?php

include 'init.php';
include 'cabecalho.php';
if (!logado()) {
    redirect('login.php');
} else {
    $iu = $_SESSION['user'];
    redirect("piu.php?user=$ui");
}

?>
<p><a href="logout.php">Sair</a></p>