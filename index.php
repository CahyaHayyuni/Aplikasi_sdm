<?php

session_start();


include "function.php";

$koneksi = new mysqli("localhost", "root", "", "db_aplikasisdm");

if ($_SESSION['admin'] || $_SESSION['user']) {



?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aplikasi SDM</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">IMAN</a>
                    <h3 style="color: white; background-color: #A70303" ;> Inventory Management </h3>
                </div>
                <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('d-m-Y'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="assets/img/find_user.png" class="user-image img-responsive" />
                        </li>


                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>


                        <li>
                            <a href="?page=anggota"><i class="fa fa-users fa-3x"></i> Data Anggota</a>
                        </li>


                        <li>
                            <a href="?page=barang"><i class="fa fa-book fa-3x"></i> Transaksi Barang & Surat</a>
                        </li>


                        <li>
                            <a href="?page=histori"><i class="fa fa-edit fa-3x"></i> Histori Barang & Surat</a>
                        </li>

                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            $page = isset($_GET['page']) ? $_GET['page'] : '';
                            $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';


                            if ($page == "barang") {
                                if ($aksi == "") {
                                    include "page/barang/barang.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/barang/tambah.php";
                                } elseif ($aksi == "kembali") {
                                    include "page/barang/kembali.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/barang/hapus.php";
                                }
                            } elseif ($page == "anggota") {
                                if ($aksi == "") {
                                    include "page/anggota/anggota.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                } elseif ($aksi == "ubah") {
                                    include "page/anggota/ubah.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/anggota/hapus.php";
                                }
                            } elseif ($page == "histori") {
                                if ($aksi == "") {
                                    include "page/histori/histori.php";
                                }
                            } elseif ($page == "") {

                                include "home.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->



        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


    </body>

    </html>

<?php


} else {
    header("location:login.php");
}

?>