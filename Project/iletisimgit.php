<html>
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/iletisim.css">
<!--<style>
    tr {

background-color:#AABBCC;
text-align: center;
font-family: cursive;

}
tr:hover{
background-color:#66DDCC;
animation-name: example;
animation-duration: 0.5s;
color:white;
border-radius: 30px;
}
@keyframes example {
from {background-color: #FFDDCC;}
to {background-color: #66DDCC;
color:white;
border-radius: 30px;}
}
</style>-->
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow-lg">
        <a class="navbar-brand" href="#">WebTechProject</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="hakkimda.html">Hakkımda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim Sayfası</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="miras.html">Mirasımız</a>
            </li>

            
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </nav>

      <header id="headerSection">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col my-auto">
                        <h1 class="display-3 text-white" ></h1>
                    </div>
                </div>
            </div>
        </div>
      </header>

<section id="abilities3" class="bg-dark text-white mx-5 border border-secondary rounded mb-5 shadow-lg">
        <div class="container">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3 text-white" align="center" >İletisim Bilgileri</h1>
            </div>
          </div>
          <div class="row my-1 ">
            <div class="col-lg-12 my-1">
            <table   class="table table-striped table-dark my-table" align="center">
            	<tr>
            	   <td >Ad</td>
            	   <td ><?php echo $_POST["ad"]?></td>
            	</tr>
              <tr>
                <td>Mail</td>
                <td ><?php echo $_POST["email"]?></td>
            	</tr>
              <tr>
                <td>Sifre</td>
                <td ><?php echo $_POST["sifre"]?></td>
              </tr>
              <tr>
                <td>Hobiler</td>
                <td >
                  <?php if(isset($_POST['sports']))
                  {
                    $check=implode("-",$_POST['sports']);
                    echo($check);
                  }
                  ?>
              </td>
              </tr>
              <tr>
                <td>En Sevilen Programlama Dili</td>
                <td ><?php echo $_POST["language"]?></td>
              </tr>
              <tr>
                <td>Adres</td>
                <td ><?php echo $_POST["addres"]?></td>
              </tr>
              <tr>
                <td>Yaşadığınız Şehir</td>
                <td ><?php echo $_POST["sehirler"]?></td>
              </tr>
                </table>
              </div>
            </div>
        </div>
      </section>

    </table>
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.js" ></script>
    </body>
<html>
