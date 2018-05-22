<!DOCTYPE html>
<html lang="en">
	
	<?php include 'cabecalho.php'; ?>
<main style="margin-top: 47px;">
	<div class="container" style="margin-bottom: 9%">
   
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
        <div class="form-group col-md-5">
          <label for="data">Data de Nascimento:</label>
         <select>
      <option value="0">Dia</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="28">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
  </select>

   <select>
      <option value="0">Mês</option>
      <option value="1">Janeiro</option>
      <option value="2">Fevereiro</option>
      <option value="3">Março</option>
      <option value="4">Abril</option>
      <option value="5">Maio</option>
      <option value="6">Junho</option>
      <option value="7">Julho</option>
      <option value="8">Agosto</option>
      <option value="9">Setembro</option>
      <option value="10">Outubro</option>
      <option value="11">Novembro</option>
      <option value="12">Dezembro</option>
   </select>

   <select>
      <option value="0">Ano</option>
      <option value="2018">2018</option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option> 
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
     <option value="1985">1985</option>
     <option value="1984">1984</option>
     <option value="1983">1983</option>
     <option value="1982">1982</option>
     <option value="1981">1981</option>
     <option value="1980">1980</option>
     <option value="1979">1979</option>
     <option value="1978">1978</option>
     <option value="1977">1977</option>
     <option value="1976">1976</option>
     <option value="1975">1975</option>
     <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    <option value="1946">1946</option>
    <option value="1945">1945</option>
    <option value="1944">1944</option>
    <option value="1943">1943</option>
    <option value="1942">1942</option>
    <option value="1941">1941</option>
    <option value="1940">1940</option>
    <option value="1939">1939</option>
    <option value="1938">1938</option>
    <option value="1937">1937</option>
    <option value="1936">1936</option>
    <option value="1935">1935</option>
    <option value="1934">1934</option>
    <option value="1933">1933</option>
    <option value="1932">1932</option>
    <option value="1931">1931</option>
    <option value="1930">1930</option>
    <option value="1929">1929</option>
    <option value="1928">1928</option>
    <option value="1927">1927</option>
    <option value="1926">1926</option>
    <option value="1925">1925</option>
    <option value="1924">1924</option>
    <option value="1923">1923</option>
    <option value="1922">1922</option>
    <option value="1921">1921</option>
    <option value="1920">1920</option>
    <option value="1919">1919</option>
    <option value="1918">1918</option>
    <option value="1017">1917</option>
    <option value="1916">1916</option>
    <option value="1915">1915</option>
    <option value="1914">1914</option>
    <option value="1913">1913</option>
    <option value="1912">1912</option>
    <option value="1911">1911</option>
    <option value="1910">1910</option>
    <option value="1909">1909</option>
    <option value="1908">1908</option>
    <option value="1907">1907</option>
    <option value="1906">1906</option>
    <option value="1905">1905</option>
    <option value="1904">1904</option>
    <option value="1903">1903</option>
   </select>
        </div>
				
      <div class="form-row">
        <div class="form-group col-md-2">
	<button type="submit" class="btn btn-primary" style="margin-left: 40%;">Cadastrar</button>

        </div>
      </div>
    </form>
  </div>
  

</main>

<hr>

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