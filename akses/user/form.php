<div class="card">
    <div class="card-header">
        Form <strong>User</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" enctype="multipart/form-data" class="">
            <div class="form-group">
                <label class=" form-control-label">Username</label>
                <input type="text" name="username" placeholder="Masukan Username" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Password</label>
                <input type="text" name="password" placeholder="Masukan Password" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Nama User</label>
                <input type="text" name="nama_user" placeholder="Masukan Nama User" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Foto</label>
                <input type="file" name="foto" placeholder="Masukan Foto" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Id Level  : 1 sebagai admin, 2 sebagai operator, 3 sebagai pelanggan.</label>
                <input type="text" name="id_level" placeholder="Masukan id_level : 1, 2 atau 3" title="Perhatian : 1 sebagai admin, 2 sebagai operator, 3 sebagai pelanggan" class="au-input au-input--full">
            </div>

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="submit" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Tambahkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $nama_tabel = "user";

    $nama_user = $_POST['nama_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $id_level = $_POST['id_level'];

    $nama_foto = $_FILES['foto']['name'];
    $folder = "../img/user/";
    $upload = $folder . $nama_foto;
    move_uploaded_file($_FILES['foto']['tmp_name'], $upload);

    $query = $ok->input_user($nama_tabel, $nama_user, $username, $password, $id_level, $nama_foto);
    if ($query) {
        echo "<div class='alert alert-success btn-xl'><i class='fa fa-check'></i> 
    Berhasil Disimpan</div>";
    } else {
        echo "<div class='alert alert-danger btn-xl'><i class='fa fa-times-circle'></i> 
    Gagal Disimpan</div>";
    }
}
?> 