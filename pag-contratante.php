<!DOCTYPE html>
<html lang="en">

<?php include 'cabecalho.php'; ?>
<body>
<main style="margin-top: 63px;">
	<div class="container">
   
    <form action="cad-contratante.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h2>Cadastro de Contratantes</h2>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required style="margin-left: 15%;margin-top: -4%;width: 48%;">
        </div>

        <div class="form-group col-md-4">
          <label for="sobrenome" style="margin-left:-40%;">Sobrenome:</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome" required style="margin-left:-13%;margin-top: -4%;width:78%;">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required style="margin-left: 15%;margin-top: -4%;width: 48%;">
        </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="telefone">Telefone::</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone (Somente números)" name="telefone" required style="margin-left: 15%;margin-top: -4%;width: 48%;"> 
        </div>
      </div>

        <div class="form-group col-md-6">
          <label for="cnpj">CNPJ / CPF:</label>
          <input type="text" class="form-control" id="cnpj" placeholder="Informe o CNPJ ou CPF (Somente números)" name="cnpj" required style="margin-left: 15%;margin-top: -4%;width: 48%;">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Defina sua senha" name="senha" required style="margin-left: 15%;margin-top: -4%;width: 48%;">
        </div>

        <div class="form-group col-md-2">
          <label for="bairro">Endereço:</label>
	          <input type="text" class="form-control" id="bairro" placeholder="Rua, Nº, Bairro e Cidade" name="endereco" required style="margin-left: 15%;margin-top: -4%;width: 118%;">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-2">
	<br><button type="submit" class="btn btn-primary" style="margin-left: 40%;">Cadastrar</button></br>

        </div>
      </div>
    </form>
  </div>
  

</main>
<?php 
  include 'rodape.php';
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
