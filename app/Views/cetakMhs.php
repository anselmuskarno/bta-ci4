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

    <div style="height: 100px;">

    </div>


    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Mahasiswa Tugas Akhir</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Judul TA</th>
                                        <th>Nomor HP</th>
                                        <th>Dosen 1</th>
                                        <th>Dosen 2</th>
                                        <th>Jenis Ujian</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($mahasiswa as $m) : ?>
                                        <tr>
                                            <td> <?= $nomor ?> </td>
                                            <?php $nomor++; ?>
                                            <td><?= $m['nama_mahasiswa']  ?></td>
                                            <td><?= $m['nim']  ?></td>
                                            <td><?= $m['judul_ta']  ?></td>
                                            <td><?= $m['nomor_hp']  ?></td>
                                            <td><?= $m['nama_dosen_1']  ?>
                                            </td>
                                            <td><?= $m['nama_dosen_2']  ?>
                                            </td>
                                            <td><?= $m['nama_ujian']  ?>
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
        <?php foreach ($mahasiswa as $m) : ?>
            <div class="modal fade" id="detailModal<?= $m['id'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Detail Data Mahasiswa </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['username_mahasiswa'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['password_mahasiswa'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nama_mahasiswa'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">NIM</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nim'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Judul Tugas Akhir</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['judul_ta'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nomor Hp</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nomor_hp'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Dosen 1</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nama_dosen_1'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Dosen 2</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nama_dosen_2'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kaprodi</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" value="<?= $m['nama_kaprodi'] ?>" disabled>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acc_dosen1" value="0">
                                    <input type="hidden" name="acc_dosen2" value="0">
                                    <input type="hidden" name="acc_kaprodi" value="0">
                                    <input type="hidden" name="file_skripsi" value="0">
                                    <input type="hidden" name="nama_ujian" value="proposal">
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

        <?php foreach ($mahasiswa as $m) : ?>
            <div class="modal fade" id="editModal<?= $m['id'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Edit Data Mahasiswa </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form action="/editmhs" method="post">
                                    <input type="hidden" name="id" value="<?= $m['id'] ?>">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" name="username_mahasiswa" class="form-control" value="<?= $m['username_mahasiswa'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="text" name="password_mahasiswa" class="form-control" value="<?= $m['password_mahasiswa'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama_mahasiswa" class="form-control" value="<?= $m['nama_mahasiswa'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">NIM</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nim" class="form-control" value="<?= $m['nim'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Judul Tugas Akhir</label>
                                        <div class="col-md-9">
                                            <input type="text" name="judul_ta" class="form-control" value="<?= $m['judul_ta'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nomor HP</label>
                                        <div class="col-md-9">
                                            <input type="text" name="nomor_hp" class="form-control" value="<?= $m['nomor_hp'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Dosen 1</label>
                                        <div class="col-md-9">
                                            <select name="nama_dosen_1" class=" form-control select" required>
                                                <option value="<?= $m['nama_dosen_1'] ?>"><?= $m['nama_dosen_1'] ?></option>
                                                <?php foreach ($dosen as $d) : ?>
                                                    <option value="<?= $d['nama_dosen']  ?>"><?= $d['nama_dosen']  ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Dosen 2</label>
                                        <div class="col-md-9">
                                            <select name="nama_dosen_2" class=" form-control select" required>
                                                <option value="<?= $m['nama_dosen_2'] ?>"><?= $m['nama_dosen_2'] ?></option>
                                                <?php foreach ($dosen as $d) : ?>
                                                    <option value="<?= $d['nama_dosen']  ?>"><?= $d['nama_dosen']  ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Nama Kaprodi</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nama_kaprodi" value="<?= $m['nama_kaprodi'] ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="acc_dosen1" value="<?= $m['acc_dosen1']  ?>">
                                    <input type="hidden" name="acc_dosen2" value="<?= $m['acc_dosen2']  ?>">
                                    <input type="hidden" name="acc_kaprodi" value="<?= $m['acc_kaprodi']  ?>">
                                    <input type="hidden" name="file_skripsi" value="<?= $m['file_skripsi']  ?>">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Jenis Ujian</label>
                                        <div class="col-md-9">
                                            <select name="nama_ujian" class=" form-control select" required>
                                                <option value="<?= $m['nama_ujian']  ?>"><?= $m['nama_ujian']  ?></option>
                                                <option value="proposal">Proposal</option>
                                                <option value="semhas">Hasil</option>
                                                <option value="tutup">Tutup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>
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


    <script>
        window.print();
    </script>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="admin/assets/js/jquery-3.6.0.min.js"></script>

    <script src="admin/assets/js/bootstrap.bundle.min.js"></script>

    <script src="admin/assets/js/jquery.slimscroll.js"></script>

    <script src="admin/assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>