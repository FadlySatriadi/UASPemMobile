<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VEXXY</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa-solid fa-shirt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">VEXXY
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-house-chimney"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MASTER DATA
            </div>

            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('Data_Barang')}}">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Data Barang</span>
                </a>
            </li>

            <!-- Nav Item - Data Sub Kriteria -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_alternatif')}}">
                <i class="fa-solid fa-meteor"></i>
                    <span>Detail Pakaian</span>
                </a>
            </li>

            <!-- Nav Item - Detail Pakaian -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('data_pendor')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Brand</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong>ADMIN</strong></span>
                                <img class="img-profile rounded-circle" src="{{asset('template/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center mb-4">
                        <i class="fa-solid fa-shop" style="font-size: 25px; margin-right: 10px;"></i>
                        <h1 class="h3 mb-0 text-gray-800">Tambah Detail Pakaian</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{route('simpan_alternatif')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" id="nama_alternatif" name="nama_alternatif" class="form-control" placeholder="Nama Alternatif">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="jenis">
                                            <option value="">Jenis Pakaian</option>
                                            <option value="Baju Kaos" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Baju Kaos') echo "selected"; ?>>
                                                Baju Kaos</option>
                                            <option value="Baju Kemeja" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Baju Kemeja') echo "selected"; ?>>
                                                Baju Kemeja</option>
                                            <option value="Hoodie" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Hoodie') echo "selected"; ?>>
                                                Hoodie</option>
                                            <option value="Celana Cargo" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Celana Cargo') echo "selected"; ?>>
                                                Celana Cargo</option>
                                            <option value="Celana Jeans" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Celana Jeans') echo "selected"; ?>>
                                                Celana Jeans</option>
                                            <option value="Topi" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Topi') echo "selected"; ?>>
                                                Topi</option>
                                            <option value="Bomber" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Bomber') echo "selected"; ?>>
                                                Bomber</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="brand">
                                            <option value="">Brand</option>
                                            <option value="Adidas" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Adidas') echo "selected"; ?>>
                                                Adidas</option>
                                            <option value="Supreme" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Supreme') echo "selected"; ?>>
                                                Supreme</option>
                                            <option value="Nike" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Nike') echo "selected"; ?>>
                                                Nike</option>
                                            <option value="Awesam" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Awesam') echo "selected"; ?>>
                                                Awesam</option>
                                            <option value="Converse" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Converse') echo "selected"; ?>>
                                                Converse</option>
                                            <option value="Uniqlo" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Uniqlo') echo "selected"; ?>>
                                                Uniqlo</option>
                                            <option value="Sundongyang" <?php if (isset($dtAlternatif) && $dtAlternatif->jenis_alternatif == 'Sundongyang') echo "selected"; ?>>
                                                Sundongyang</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="warna" name="warna" class="form-control" placeholder="Warna">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="stok" name="stok" class="form-control" placeholder="Stok">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="ml-auto" style="background-color: rgb(50, 205, 50); border-radius: 5px; border: none; width: 110px; height: 35px;">
                                            <a style="color: white; text-decoration: none;" href="{{Route('create_alternatif')}}"><strong>Simpan Data</strong></a>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; VEXXY 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

</body>

</html>