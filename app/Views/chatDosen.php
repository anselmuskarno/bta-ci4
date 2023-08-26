<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bimbingan Tugas Akhir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="admin/assets/js/html5shiv.min.js"></script>
		<script src="admin/assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
        @media print {
            body {
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
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
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="/chatDosen" class="mobile-logo d-md-block d-lg-none d-block"><img src="admin/assets/img/logo3.png" alt="" width="100"></a>
                    </li>
                </ul>

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
                        <a href="/chatDosen" class="logo">
                            <img src="admin/assets/img/logo3.png" style="width: 100px;" alt="">
                        </a>
                    </div>
                    <ul class="sidebar-ul">

                        <li class="active text-center">
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

                        <li class="">
                            <a href="/pengumumanMahasiswa"><img src="admin/assets/img/sidebar/icon-12.png" alt="icon"> <span> Pengumuman</span> </a>
                        </li>
                        <li class="btn btn-primary w-100 mt-5 text-white">
                            <a href="javascript:void(0);" class="text-white" onclick="printPageArea('printableArea')">Cetak Riwayat Chat</a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="/tambahChatDariMhs" method="post">
            <?= csrf_field(); ?>
            <div class="page-wrapper">
                <div class="chat-main-row">
                    <div class="chat-main-wrapper">
                        <div class="col-lg-9 message-view task-view">
                            <div class="chat-window">
                                <div class="fixed-header">
                                    <div class="navbar">
                                        <div class="user-details mr-auto">
                                            <div class="float-left user-img m-r-10">
                                                <a href="#!" title="Mike Litorus"><img src="admin/assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="user-info float-left">
                                                <a href="#!" title="Mike Litorus"><span class="font-bold"><?= session()->get('nama_dosen_1'); ?></span> </a> <br>
                                                <span class="Last-seen">Dosen Pembimbing 1</span>
                                            </div>
                                        </div>
                                        <div class="search-box">
                                            <div class="input-group input-group-sm">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-append">
                                                    <button class="btn" type="button"><i class="fas fa-search"></i></button>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="chat-contents">
                                    <div class="chat-content-wrap">
                                        <div class="chat-wrap-inner">
                                            <div class="chat-box">
                                                <div class="chats" id="printableArea">

                                                    <?php foreach ($dosen as $d) : ?>

                                                        <?php if ($d['file_chat_ke_dosen1'] != null &&  $d['status_hapus_chat_ke_dosen1'] == null) { ?>
                                                            <div class="chat chat-right">
                                                                <div class="chat-body ansel">
                                                                    <div class="chat-bubble d-flex justify-content-end">

                                                                        <div class="chat-content">
                                                                            <?php if ($d['extensiFile_ke_dosen1'] == "docx" || $d['extensiFile_ke_dosen1'] == "doc") { ?>
                                                                                <img src="iconFile/word.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } else if ($d['extensiFile_ke_dosen1'] == "xlsx" || $d['extensiFile_ke_dosen1'] == "xlsm" || $d['extensiFile_ke_dosen1'] == "xlsb" || $d['extensiFile_ke_dosen1'] == "xlsb") { ?>
                                                                                <img src="iconFile/excel.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } else if ($d['extensiFile_ke_dosen1'] == "pdf") { ?>
                                                                                <img src="iconFile/pdf.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } ?>
                                                                            <?php if ($d['extensiFile_ke_dosen1'] == "png" || $d['extensiFile_ke_dosen1'] == "jpg") { ?>
                                                                                <a target="_blank" href="<?= base_url() . 'uploadedFile/' . $d['file_chat_ke_dosen1'] ?>">
                                                                                    <img src="uploadedFile/<?= $d['file_chat_ke_dosen1'] ?>" style="width: 70px; height:70px" alt=""> <br>
                                                                                </a> <br>
                                                                            <?php } else if ($d['extensiFile_ke_dosen1'] != "png" || $d['extensiFile_ke_dosen1'] != "jpg") { ?>
                                                                                <a target="_blank" href="<?= base_url() . 'uploadedFile/' . $d['file_chat_ke_dosen1'] ?>"><?= $d['file_chat_ke_dosen1']  ?></a> <br>
                                                                            <?php } ?>
                                                                            <div class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $d['id'] ?>">Kelola File</div>
                                                                            <span class="chat-time spanku">8:30 am</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($d['chat_ke_dosen_1'] != null &&  $d['status_hapus_chat_ke_dosen1'] == null) { ?>
                                                            <div class="chat chat-right" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $d['id'] ?>">
                                                                <div class="chat-body ansel">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <p class="paragraph"><?= $d['chat_ke_dosen_1']  ?></p>
                                                                            <span class="chat-time spanku">8:30 am</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($d['status_hapus_chat_ke_dosen1'] != null) { ?>
                                                            <div class="chat chat-right" data-bs-toggle="modal" data-bs-target="#exampleModal2<?= $d['id'] ?>">
                                                                <div class="chat-body ansel">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <p class="paragraph"><span class="text-danger"><i class="fa fa-ban"></i> <i> Anda telah menghapus pesan ini</i></span></p>
                                                                            <span class="chat-time spanku">8:30 am</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($d['chat_dari_dosen1'] != null) { ?>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="#!" class="avatar">
                                                                        <img alt="<?= session()->get('nama_mahasiswa'); ?>" src="admin/assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <p><?= $d['chat_dari_dosen1']  ?></p>
                                                                            <span class="chat-time">8:30 am</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else if ($d['file_chat_dosen1_ke_mhs'] != null) { ?>
                                                            <div class="chat chat-left">
                                                                <div class="chat-avatar">
                                                                    <a href="#!" class="avatar">
                                                                        <img alt="<?= session()->get('nama_mahasiswa'); ?>" src="admin/assets/img/user.jpg" class="img-fluid rounded-circle">
                                                                    </a>
                                                                </div>
                                                                <div class="chat-body">
                                                                    <div class="chat-bubble">
                                                                        <div class="chat-content">
                                                                            <?php if ($d['extensiFileDosen1_ke_mhs'] == "docx" || $d['extensiFileDosen1_ke_mhs'] == "doc") { ?>
                                                                                <img src="iconFile/word.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } else if ($d['extensiFileDosen1_ke_mhs'] == "xlsx" || $d['extensiFileDosen1_ke_mhs'] == "xlsm" || $d['extensiFileDosen1_ke_mhs'] == "xlsb" || $d['extensiFileDosen1_ke_mhs'] == "xlsb") { ?>
                                                                                <img src="iconFile/excel.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } else if ($d['extensiFileDosen1_ke_mhs'] == "pdf") { ?>
                                                                                <img src="iconFile/pdf.png" style="width: 20px; height:20px" alt="">
                                                                            <?php } ?>
                                                                            <?php if ($d['extensiFileDosen1_ke_mhs'] == "png" || $d['extensiFileDosen1_ke_mhs'] == "jpg") { ?>
                                                                                <a target="_blank" href="<?= base_url() . 'uploadedFile/' . $d['file_chat_dosen1_ke_mhs'] ?>">
                                                                                    <img src="uploadedFile/<?= $d['file_chat_dosen1_ke_mhs'] ?>" style="width: 70px; height:70px" alt=""> <br>
                                                                                </a> <br>
                                                                            <?php } else if ($d['extensiFileDosen1_ke_mhs'] != "png" || $d['extensiFileDosen1_ke_mhs'] != "jpg") { ?>
                                                                                <a target="_blank" href="<?= base_url() . 'uploadedFile/' . $d['file_chat_dosen1_ke_mhs'] ?>"><?= $d['file_chat_dosen1_ke_mhs']  ?></a><br> <br>
                                                                            <?php } ?>
                                                                            <span class="chat-time spanku">8:30 am</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    <?php endforeach ?>
                                                    <input type="text" autofocus style="width:0px; height:0px">

                                                    <?php foreach ($dosen as $d) : ?>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal<?= $d['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <center>
                                                                <div style="padding-top:150px">
                                                                    <div class="modal-dialog modal-dialog-centered " style="width: 300px;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-footer text-center">
                                                                                <button type="button" class="btn btn-sm btn-warning" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Teruskan <i class="fa fa-share"></i></button>
                                                                                <form action="/DosenController/delete/<?= $d['id'] ?>" method="post">
                                                                                    <input type="hidden" name="id" value="<?= $d['id'] ?>">
                                                                                    <input type="hidden" name="nama_mhs" value="<?= $d['nama_mhs'] ?>">
                                                                                    <input type="hidden" name="nama_dosen1" value="<?= $d['nama_dosen1'] ?>">
                                                                                    <input type="hidden" name="file_chat_ke_dosen1" value="<?= $d['file_chat_ke_dosen1'] ?>">
                                                                                    <input type="hidden" name="chat_dari_dosen1" value="<?= $d['chat_dari_dosen1'] ?>">
                                                                                    <input type="hidden" name="chat_ke_dosen_1" value="<?= $d['chat_ke_dosen_1'] ?>">
                                                                                    <input type="hidden" name="tanggal_chat_ke_dosen1" value="<?= $d['tanggal_chat_ke_dosen1'] ?>">
                                                                                    <input type="hidden" name="status_hapus_chat_ke_dosen1" value="Anda menghapus pesan ini">
                                                                                    <input type="hidden" name="status_baca_dosen1" value="<?= $d['status_baca_dosen1'] ?>">
                                                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus <i class="fa fa-trash"></i></button>
                                                                                </form>
                                                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup X</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </div>
                                                    <?php endforeach ?>
                                                    <?php foreach ($dosen as $d) : ?>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal2<?= $d['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <center>
                                                                <div style="padding-top:150px">
                                                                    <div class="modal-dialog modal-dialog-centered " style="width: 300px;">
                                                                        <div class="modal-content">
                                                                            <div class="modal-footer text-center">
                                                                                <form action="/DosenController/deletePermanen/<?= $d['id'] ?>" method="post">
                                                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus Permanen &nbsp; <i class="fa fa-trash"></i></button>
                                                                                </form>
                                                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup X</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered " style="margin-top: -100px;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalToggleLabel2">Teruskan ke ... </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-inline">

                                                <div class="chat chat-left ">

                                                    <div class="chat-avatar">
                                                        <a href="#!" class="avatar">
                                                            <img alt="<?= session()->get('nama_mahasiswa'); ?>" src="admin/assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p><?= session()->get('nama_dosen_1'); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a href="#!" class="avatar">
                                                            <img alt="<?= session()->get('nama_mahasiswa'); ?>" src="admin/assets/img/user.jpg" class="img-fluid rounded-circle">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-bubble">
                                                            <div class="chat-content">
                                                                <p>Juprianus Rusman</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup X</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    const ob = document.body;
                                    const ansel = document.querySelector('.ansel');
                                    const spanku = document.querySelector('.spanku');
                                    const luar = document.querySelector('.luar');
                                    const paragraph = document.querySelector('.paragraph');
                                    const textHapus = document.createTextNode('Hapus');
                                    ansel.addEventListener('click', function() {
                                        ob.sty
                                    })
                                </script>
                                <div class="chat-footer" style="margin-top: -100px;">
                                    <div class="message-bar">
                                        <div class="message-inner">
                                            <a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="admin/assets/img/attachment.png" alt=""></a>
                                            <div class="message-area">
                                                <form action="/tambahChatDariMhs" method="post">
                                                    <?= csrf_field(); ?>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Ketik pesan" name="chat_ke_dosen_1" autofocus required>
                                                        <!-- <input type="hidden" name="nama_dosen" value=""> -->
                                                        <input type="hidden" name="nama_dosen1" value="<?= session()->get('nama_dosen_1'); ?>">
                                                        <input type="hidden" name="nama_mhs" value="<?= session()->get('nama_mahasiswa'); ?>">
                                                        <span class="input-group-append">
                                                            <button class="btn btn-info" type="submit"><i class="fas fa-paper-plane"></i></button>
                                                        </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="drag_files" class="modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Lampirkan File</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body p-t-0">
                                <form id="js-upload-form" action="/lampirkanFile/save" method="post" enctype="multipart/form-data">
                                    <input type="file" class="upload-drop-zone form-control" id="drop-zone" name="file_chat_ke_dosen1">
                                    <i class="fas fa-cloud-upload fa-2x"></i>
                                    </input>
                                    <!-- <input type="hidden" name="nama_dosen" value=""> -->
                                    <input type="hidden" name="nama_dosen1" value="<?= session()->get('nama_dosen_1'); ?>">
                                    <input type="hidden" name="nama_mhs" value="<?= session()->get('nama_mahasiswa'); ?>">
                                    <div class="m-t-30 text-center">
                                        <button class="btn btn-primary btn-sm" type="submit">Kirim</button>
                                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="add_group" class="modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Create a group</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Groups are where your team communicates. They’re best when organized around a topic —
                                    #leads, for example.</p>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <label>Group Name <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                        <label>Send invites to: <span class="text-muted-light"></span></label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="add_chat_user" class="modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Create Chat Group</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="input-group m-b-30">
                                    <input placeholder="Search to start a chat" class="form-control search-input" id="btn-input" type="text">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary">Search</button>
                                    </span>
                                </div>
                                <div>
                                    <h5>Recent Conversations</h5>
                                    <ul class="chat-user-list">
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <span class="avatar align-self-center">J</span>
                                                    <div class="media-body align-self-center text-nowrap">
                                                        <div class="user-name">Jeffery Lalor</div>
                                                        <span class="designation">H.O.D</span>
                                                    </div>
                                                    <div class="text-nowrap align-self-center">
                                                        <div class="online-date">1 day ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media ">
                                                    <span class="avatar align-self-center">B</span>
                                                    <div class="media-body align-self-center text-nowrap">
                                                        <div class="user-name">Bernardo Galaviz</div>
                                                        <span class="designation">Science Teacher</span>
                                                    </div>
                                                    <div class="align-self-center text-nowrap">
                                                        <div class="online-date">3 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <span class="avatar align-self-center">
                                                        <img src="admin/assets/img/user.jpg" alt="<?= session()->get('nama_mahasiswa'); ?>">
                                                    </span>
                                                    <div class="media-body text-nowrap align-self-center">
                                                        <div class="user-name"><?= session()->get('nama_dosen_1'); ?></div>
                                                        <span class="designation"><?= session()->get('jabatan_1'); ?></span>
                                                    </div>
                                                    <div class="align-self-center text-nowrap">
                                                        <div class="online-date">7 months ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-t-50 text-center">
                                    <button class="btn btn-primary btn-lg">Create Group</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="share_files" class="modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Share File</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="files-share-list">
                                    <div class="files-cont">
                                        <div class="file-type">
                                            <span class="files-icon"><i class="fas fa-file-pdf"></i></span>
                                        </div>
                                        <div class="files-info">
                                            <span class="file-name text-ellipsis">AHA Selfcare Mobile Application
                                                Test-Cases.xls</span>
                                            <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Share With</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="m-t-50 text-center">
                                    <button class="btn btn-primary btn-lg">Share</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

    <script src="admin/assets/js/jquery.slimscroll.js"></script>

    <script src="admin/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        function printPageArea(areaID) {
            var printContent = document.getElementById(areaID).innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>

</body>

</html>