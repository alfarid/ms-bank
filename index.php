<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MS Bank App</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<!-- javascript login -->
    <div class="responsive">
    <div id="mymodal" class="modal fade" role="dialog" aria-labelledby="mymodallabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
                <div class="container-fluid">
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <center><h2>Login MS Bank</h2></center><br>

                        <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <input class= "form-control tinggi" type="text"name="username" placeholder="Enter Username / Email / No handphone">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <input class="form-control tinggi" type="password" name="password" placeholder="Enter Password">
                            </div>
                        </div>

                        <input type="submit" class=" btn btn-success btnlogin" value="Login"> &nbsp; <input type="submit" class=" btn btn-danger btnlogin" value="Tutup">
                        </form>
                    </div>
                </div>
        </div>

        
        </div>
    </div>
    </div>
</div>

<!-- navbar -->
    
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MS Bank App</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"><button type="submit" class="btn btn-default btnnav">About</button></a></li>
        <li><a href="#"><button type="submit" class="btn btn-success btnnav" data-toggle="modal" data-target="#mymodal">Masuk</button></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<div class="intro">
  <div class="container">
    <div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-xs-12">
        <center><div class="text-intro">Selamat Datang di MS Bank App</div> 
        <div class="isi-intro">Aplikasi ini memudahkan dalam melakukan transaksi pembayaran sekolah. 
        Cara termudah dan teraman, untuk membayar segala keperluan siswa/siswi SMKN 1 Depok. </div></center>
    </div>
    </div>
    </div>
</div>

        <div id="about">
            
    <div class="container">
            <h1 class="brand-name about">About</h1>
            <hr class="tagline-divider">
            <h2 class="h2">
            <small>MS Bank Application</small>
            </h2>

            <br><br><br><br><br>
                <div class="row">                
                <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12">
                  <img class="media-object kiri" src="img/msbank.png" alt="msapp">
                    </div>
                        <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12">
                            <h1 class="media-heading">MS Bank App</h1>
                            MS Bank App adalah aplikasi yang dibuat untuk memudahkan siswa/siswi SMKN 1 Depok 
                            dalam melakukan transaksi pembayaran, sehingga tidak perlu lagi untuk mengantri panjang di depan ruang MS Bank.
                        </div>
                    </div>
                

                  <br><br><br><br>
                  <div class="row">
                      <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12">
                          <h1 class="media-heading">Lihat data</h1>
                          Di dalam aplikasi ini pengguna dapat meihat data pembayaran selama di SMKN 1 Depok. sehingga kalian tidak perlu
                          khawatir jika buku pembayaran hilang ataupun rusak.
                        </div>
                <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12"> 
                  <img class="media-object kanan" src="img/lihatdata.png" alt="msapp">
                </div>
            </div>


                <br><br><br><br>
                    <div class="row">
                    <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12">
                  <img class="media-object kiri" src="img/bayar.png" alt="msapp">
                    </div>
                        <div class="col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-4 col-xs-12">
                            <h1 class="media-heading">Membayar</h1>
                            Membayar atau melakukan transaksi pembayaran secara online merupakan fungsi utama dala aplikasi MS Bank App. disini
                            pengguna dapat membayar yang berhubungan dengan sekolah, seperti pembayaran SPKP, seragam, LDKS, Kunjungan Industri,
                            serta lebih banyak lagi.

                        </div>
                    </div>
                </div>


          <br><br><br><br><br><br><br><br>

                <div class="row powered">
                    <div class="col-sm-12 col-md-12 col-xs-12">
                        <h1 class="powered-by"><center><strong>Powered</strong><small>by</small></center></h1>

                <br><br><br><br>
                        <center>
                        <img src="img/logo.png" width="155" height="auto">
                        <img src="img/wandek.png" width="155" height="auto">
                        <img src="img/msapp.png" width="130" height="auto">
                        <img src="img/sbc.png" width="130" height="auto">
                    </center>
                    </div>
                  </div>
            
        </div>

        <footer class="col-md-12 col-xs-12">
        <div class="container">
            <div class="row">
                <center>
                <div class="col-md-4 col-xs-12">
                        <p><a class="tulis" href="#page-top">MS Bank App</a></p><br>
                        <img src="img/msapp.png" width="100" height="100" alt="">
                        <p>&copy; 7Destroyers 2017</p>
                    
                    <br>
                </div>
                <div class="col-md-4 col-xs-12">
                <div class="text-footer"><p><h3> Kontak </h3></p>
                <font color="#fed136">
                <br>smkn1.kota-depok.org
                <br>021-87907233
                </font>
                </div>
                            <br>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12">
                    
                        <p><h3>Alamat</h3></p>
                        <br>Jalan Raya Tapos No. 100
                        <br>Tapos, Cimpaeun
                        <br>Kota Depok, Jawa Barat
                        <br>16457
                    
                </div>
            </center>
                </div> 
                </div>

                <div class="row">
                <div class="col-md-12 col-xs-12 bawah">
                <p><font color="white"> SMK Negeri 1 Depok </font></p>
            </div>
            </div>
              </footer>
              

</body>
</html>