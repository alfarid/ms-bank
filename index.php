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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

<!-- javascript login -->
    <div class="responsive">
    <div id="mymodal" class="modal fade" role="dialog" aria-labelledby="mymodallabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
                <div class="container">
                    <div class="col-xs-7">
                        <h2>Login MS Bank</h2>
                        <form action="" method="post" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-7">
                                <input class= "form-control" type="text"name="username" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-7">
                                <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        </div>
                        </div>
                        <input type="submit" class=" btn btn-primary"  value="Login">
                        </form>
                    </div>
                </div>
        </div>

        <div class="modal-footer">
            <h6>lupa kata sandi?<h6>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
                <div class="col-xs-6" id="nav-col">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-xs-6" id="nav-col">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#about" button type="button" class="btn btn-default"><font color="white">About</font></a></button></li>
                                        <li><button class="btn btn-success" data-toggle="modal" data-target="#mymodal"> Masuk</li>
                                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

      </div><!-- /.container-->
    </nav>

  <br><br><br><br><br><br>  
  <div class="row">
  <div class="container">
    <div class="col-xs-offset-1 col-xs-10">
        Selamat Datang di MS Bank App 
    </div>
  </div>
</div>

<div class="rowbek">
  <div class="container">
    <div class="col-xs-offset-3 col-xs-6">
        Aplikasi ini memudahkan dalam melakukan transaksi pembayaran sekolah. 
        Cara termudah dan teraman, untuk membayar segala keperluan siswa/siswi SMKN 1 Depok.
    </div>
  </div>
</div>
        <br><br><br><br><br><br><br><br><br>
        <div id="about">
            <br><br>

            <h1 class="brand-name">About</h1>
            <hr class="tagline-divider">
            <h2 class="h2">
            <small>MS Bank Application</small>
            </h2>

            <br><br><br><br><br>
            <div class="container">
              <div class="media">
                <div class="media-left">
                  <img class="media-object1" src="img/msbank.png" alt="msapp">
                </div>
                    <div class="media-body">
                        <div class="col-xs-offset-2 col-xs-8">
                            <h1 class="media-heading">MS Bank App</h1>
                            MS Bank App adalah aplikasi yang dibuat untuk memudahkan siswa/siswi SMKN 1 Depok 
                            dalam melakukan transaksi pembayaran, sehingga tidak perlu lagi untuk mengantri panjang di depan ruang MS Bank.
                        </div>
                    </div>

                  <br><br><br><br>
                      <div class="media-body">
                        <div class="col-xs-offset-2 col-xs-8">
                          <h1 class="media-heading">Lihat data</h1>
                          Di dalam aplikasi ini pengguna dapat meihat data pembayaran selama di SMKN 1 Depok. sehingga kalian tidak perlu
                          khawatir jika buku pembayaran hilang ataupun rusak.
                        </div>
                      </div>
                <div class="media-right"> 
                  <img class="media-object2" src="img/lihatdata.png" alt="msapp">
                </div>


                <br><br><br><br>
                <div class="media-left">
                  <img class="media-object1" src="img/bayar.png" alt="msapp">
                </div>
                    <div class="media-body">
                        <div class="col-xs-offset-2 col-xs-8">
                            <h1 class="media-heading">Membayar</h1>
                            Membayar atau melakukan transaksi pembayaran secara online merupakan fungsi utama dala aplikasi MS Bank App. disini
                            pengguna dapat membayar yang berhubungan dengan sekolah, seperti pembayaran SPKP, seragam, LDKS, Kunjungan Industri,
                            serta lebih banyak lagi.

                        </div>
                    </div>
            </div>


              </div>
            </div>
          </div>
          <br><br><br><br>

           <div class="powered">

                <div class="row">
                  <div class="container">
                    <div class="col-xs-offset-1 col-xs-10">
                        <h1 class="powered-by"><strong>Powered</strong><small>by</small></h1>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="container">
                    <div class="col-xs-offset-2 col-xs-8">
                        <img src="img/logo.png">
                        <img src="img/wandek.png">
                        <img class="logo" src="img/msapp.png">
                        <img class="logo" src="img/sbc.png">
                    </div>
                  </div>
                </div>

            </div>
              

</body>
</html>