<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$npw = $_POST['senha'];
	$nname = $_POST['nome'];
	$nsn = $_POST['sobrenome'];
	$nemail = $_POST['email'];
	$ntel = $_POST['telefone'];
	$nend = $_POST['endereco'];
	$ngenero = $_POST['genero'];
	$ndn = $_POST['data'];
	$ncpf = $_POST['cpf'];

	$cadastrar = "INSERT INTO `MUSICO` (`SENHA`, `NOME`, `SOBRENOME`, `EMAIL`, `TELEFONE`, `ENDERECO`, `GENERO_MUSICAL`, `DATA_DE_NASCIMENTO`, `CPF`) VALUES ('$npw', '$nname', '$nsn', '$nemail', '$ntel', '$nend', '$ngenero', '$ndn', '$ncpf')"; 
	
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);
	
    if($cadastrou){
        echo "Músico cadastrado com sucesso!";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Dados inválidos. Por favor cadastre-se novamente com um novo e-mail e confirme seus dados!');window.location.href='index.php';</script>";
    die();
    }
	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>