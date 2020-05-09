<html>
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow-lg">
        <a class="navbar-brand" href="index.html">WebTechProject</a>
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
            <li class="nav-item">
              <a class="nav-link" href="ulas.html">Bana Ulaşın</a>
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

      <section id="abilities3" class="text-white mx-5 mb-5">
        <div class="bg-dark container border border-secondary rounded shadow-lg">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-3 text-white" align="center" ><?php 
                          
                  $myemail="CC@hotmail.com";
                  $mysifre="123";
                  $email = $_POST['email'];
                  $sifre = $_POST['sifre'];
                  $namen=explode("@",$email);
                  if($email==$myemail && $mysifre==$sifre)
                  {
                    echo $namen[0]."  Hoşgeldin" ;
                  }else {

                    echo "Kullanıcı epostası yada şifre hatalı ";
                    echo "5 saniye içinde geri yönlendiriliyorsunuz";
                    
                    
                    header("refresh:5;url=login.html");
                    
                  }?>
              </h1>
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
