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

                <ul class="nav float-left">

                    <li>
                        <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="admin/assets/img/logo1.png" alt="" width="30" height="30"></a>
                    </li>
                </ul>

                <ul class="nav user-menu float-right">

                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle" src="admin/assets/img/user-06.png" width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span>Admin</span>
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


        <div class="sidebar bg-primary" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left bg-primary">
                        <a href="index.html" class="logo">
                            <img src="admin/assets/img/logo3.png" style="width: 100px;" alt="">
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="">
                            <a href="/adminMahasiswa"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Daftar Mahasiswa</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/adminProposal"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Seminar Proposal</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/adminHasil"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Seminar Hasil</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/adminTutup"><img src="admin/assets/img/sidebar/icon-2.png" alt="icon"> <span> Seminar Tutup</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/daftarDosen"><img src="admin/assets/img/sidebar/icon-4.png" alt="icon"><span> Dosen Pembimbing</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/adminPengumuman"><img src="admin/assets/img/sidebar/icon-12.png" alt="icon"><span> Pengumuman</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="/chatAdminKaprodi"><img src="admin/assets/img/sidebar/icon-4.png" alt="icon"><span> Chat Kaprodi</span>
                            </a>
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
                                <h4 class="card-title">Daftar Pengumuman</h4>
                            </div>
                            <div class="card-body">
                                <div class="btn btn-sm btn-primary mb-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Tambah Data</div>

                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel2">Tambah Data Pengumuman </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <form action="/tambahPengumuman" method="post" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-md-5 col-form-label">Judul Pengumuman</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control" name="judul_pengumuman" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-5 col-form-label">Isi Pengumuman</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control" name="isi_pengumuman" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-5 col-form-label">File</label>
                                                            <div class="col-md-7">
                                                                <input type="file" class="form-control" name="file_pengumuman" required>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup X</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table m-b-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Pengumuman</th>
                                                <th>Isi Pengumuman</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $nomor = 1;
                                            foreach ($pengumuman as $m) : ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $nomor;
                                                        $nomor++; ?>

                                                    </td>
                                                    <td><?= $m['judul_pengumuman']  ?></td>
                                                    <td><?= $m['isi_pengumuman']  ?></td>
                                                    <td>
                                                        <span class="btn btn-sm bg-info text-white" data-bs-target="#detailModal<?= $m['id'] ?>" data-bs-toggle="modal" data-bs-dismiss="modal">Detail</span>
                                                        <a href="/deletePengumuman/<?= $m['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> <span class="btn btn-sm bg-danger text-white">Hapus</span></a>
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
                <?php foreach ($pengumuman as $d) : ?>
                    <div class="modal fade" id="detailModal<?= $d['id'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel2">Detail Data Dosen </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-md-5 col-form-label">Judul Pengumuman</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="<?= $d['judul_pengumuman'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-5 col-form-label">Isi Pengumuman</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" value="<?= $d['isi_pengumuman'] ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-5 col-form-label">File Pengumuman</label>
                                                <div class="col-md-7">
                                                    <a class="badge bg-warning text-white" target="_blank" href="uploadedFile/<?= $d['file_pengumuman'] ?>"> <?= $d['file_pengumuman'] ?> </a>
                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup X</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="notification-box">
                    <div class="msg-sidebar notifications msg-noti">
                        <div class="topnav-dropdown-header">
                            <span>Messages</span>
                        </div>
                        <div class="drop-scroll msg-list-scroll">
                            <ul class="list-box">
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Ruth C. Gault</span>
                                                <span class="message-time">1 Aug</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">D</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Domenic Houston </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">B</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Buster Wigton </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Rolland Webber </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Claire Mapes </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Melita Faucher</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Jeffery Lalor</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">L</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Loren Gatlin</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Tarah Shropshire</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">See all messages</a>
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