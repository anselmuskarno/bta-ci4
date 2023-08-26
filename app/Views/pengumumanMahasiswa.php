<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin - Bimbingan Tugas Akhir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="admin/assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="admin/assets/js/html5shiv.min.js"></script>
		<script src="admin/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <div class="main-wrapper">

        <div class="header-outer">
            <div class="header">
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
                <a id="toggle_btn" class="float-left" href="javascript:void(0);">
                    <img src="admin/assets/img/sidebar/icon-21.png" alt="">
                </a>
                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle" src="admin/assets/img/user-06.png" width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span><?= session()->get('nama_mahasiswa'); ?></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/">Logout</a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="sidebar" style="background-color: blueviolet;" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left" style="background-color: blueviolet;">
                        <a href="index.html" class="logo">
                            <img src="admin/assets/img/logo3.png" style="width: 100px;" alt="">
                        </a>
                    </div>
                    <ul class="sidebar-ul">

                        <li class=" text-center">
                            <a href="/mahasiswaDashboard" title=""><img src="admin/assets/img/user.jpg" alt="" class="w-40 rounded-circle">
                                <br><span style="font-size:11px"><?= session()->get('nama_dosen_1'); ?></span> <br>
                                <div style="margin-top: -13px;"></div>
                                <?php if (session()->get('accDosen1') == "0") { ?>
                                    <span class="badge bg-danger">Belum ACC <?= session()->get('namaUjian'); ?></span>
                                <?php } else { ?>
                                    <span class="badge bg-primary">Sudah ACC <?= session()->get('namaUjian'); ?></span>
                                <?php } ?>


                            </a>
                        </li>
                        <li class=" text-center">
                            <a href="/mahasiswaDashboard2" title=""><img src="admin/assets/img/user.jpg" alt="" class="w-40 rounded-circle">
                                <br><span style="font-size:11px"> <?= session()->get('nama_dosen_2'); ?></span> <br>
                                <div style="margin-top: -13px;"></div>
                                <?php if (session()->get('accDosen2') == "0") { ?>
                                    <span class="badge bg-danger">Belum ACC <?= session()->get('namaUjian'); ?></span>
                                <?php } else { ?>
                                    <span class="badge bg-primary">Sudah ACC <?= session()->get('namaUjian'); ?></span>
                                <?php } ?> <br>
                            </a>

                        </li>

                        <li class="active">
                            <a href="/pengumumanMahasiswa"><img src="admin/assets/img/sidebar/icon-12.png" alt="icon"> <span> Pengumuman</span> </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengumuman</h4>
                            </div>
                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table m-b-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Pengumuman</th>
                                                <th>Isi Pengumuman</th>
                                                <th>File Pengumuman</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pengumuman as $p) : ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td><?= $p['judul_pengumuman']  ?></td>
                                                    <td><?= $p['isi_pengumuman']  ?></td>
                                                    <td>
                                                        <?php if ($p['file_pengumuman'] != null) { ?>
                                                            <a class="btn btn-sm btn-success text-white" target="_blank" href="uploadedFile/<?= $p['file_pengumuman']  ?>"> <?= $p['file_pengumuman']  ?> </a>
                                                        <?php } else { ?>
                                                            <span class="alert alert-danger">Tidak ada File</span>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

    <script src="admin/assets/js/jquery.slimscroll.js"></script>

    <script src="admin/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>