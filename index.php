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
                                        <li><a href="about.php" button type="button" class="btn btn-default"><font color="white">About</font></a></button></li>
                                        <li><button class="btn btn-success" data-toggle="modal" data-target="#mymodal"> Masuk</li>
                                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

      </div><!-- /.container-->
    </nav>

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

<hr class="hr">

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


</body>
</html>