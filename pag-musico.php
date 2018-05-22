<!DOCTYPE html>
<html lang="en">

<body>
  <?php include "cabecalho.php"; ?>
<main style="margin-top: -60px;">
  <div class="container" style="margin-top: 10%;">
   
    <form action="cad-musico.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h1>Cadastro de Músicos</h1>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required style="margin-left: 15%;margin-top: -4%;width: 48%;">
        </div><br>

        <div class="form-group col-md-4" style="margin-top:0%;margin-right: 30%;">
          <label for="sobrenome">Sobrenome:</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome" required style="margin-top: -7%;">
        </div>
      </div><br>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required style="margin-top: -5%;margin-left: 19%;width: 65%;">
        </div><br>

      
        <div class="form-group col-md-6">
          <label for="senha" style="margin-left: -105%;margin-top: 10%;">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Defina sua senha" name="senha" required style="margin-top: -5%;margin-left: -87%;width: 65%;">
        </div><br>

        <div class="form-group col-md-4">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" placeholder="CPF (Somente números)" name="cpf" required style="margin-top: -9%;margin-left:28%">
        </div><br>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="telefone" style="margin-top: 14%;margin-left: -108%;">Telefone:</label>
            <input type="text" class="form-control" id="telefone" placeholder="Telefone (Somente números)" name="telefone" required style="margin-top: -8%;margin-left: -81%;">
          </div>
        </div><br>

        <div class="form-group col-md-2">
          <label for="gênero" style="margin-top: 60%;margin-left: -475%;">Gênero Musical:</label>
          <!-- <input type="text" class="form-control" id="Gênero" placeholder="Gênero Musical" name="genero" required> -->
          <select>
            <option>Alternativo</option>
            <option>Hip hop</option>
            <option>MPB</option>
            <option>Pop</option>
            <option>Pop Rock</option>
            <option>Rap</option>
            <option>Rock</option>
            <option>Sertanejo</option>
          </select>
        </div>
      </div><br>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="data">Data de Nascimento:</label>
          <input type="text" class="form-control" id="data" placeholder="Data de Nascimento (Somente números)" name="data" required style="margin-top: -8%;margin-left: 33%;width: 68%;">
        </div>
      </div><br>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="endereco" style="margin-top: 15%;margin-left: -135%">Endereço:</label>
          <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" required style="margin-top: -10%;margin-left: -110%;">
        </div>
      </div><br>
      
    
      
      <div class="form-row" >
        <div class="form-group col-md-2">
          <button type="submit" class="btn btn-primary" style="margin-top: 60%;margin-left:-300%;">Cadastrar</button>
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
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>
 </body>
</html>
