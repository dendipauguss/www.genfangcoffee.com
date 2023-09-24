<div class="card">
    <div class="card-header">
        Form <strong>Pesanan / Memesan</strong>
    </div>
    <div class="card-body card-block">
        <form action="" method="POST" class="">
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Nomor Meja</label>
                <input type="text" id="nf-email" name="no_meja" placeholder="Masukan Nomor Meja" class="au-input au-input--full">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Tanggal</label>
                <input type="date" id="nf-email" name="tanggal" placeholder="Masukan Tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Id User</label>
                <input type="text" id="nf-email" name="id_user" placeholder="Masukan Id User" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Keterangan</label>
                <input type="text" id="nf-email" name="keterangan" placeholder="Masukan Keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nf-email" class=" form-control-label">Staus Order</label>
                <input type="text" id="nf-email" name="status_order" placeholder="Masukan ada atau tidak" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-5"></div>
                <div class="col-sm-5">
                    <button type="submit" name="ubah" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Tambahkan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $nama_tabel = "pesan";
    $kode = $_POST['id_order'];

    $no_meja = $_POST['no_meja'];
    $tanggal = $_POST['tanggal'];
    $id_user = $_POST['id_user'];
    $keterangan = $_POST['keterangan'];
    $status_order = $_POST['status_order'];

    $query = $ok->input_order($nama_tabel, $kode, $no_meja, $tanggal, $id_user, $keterangan, $status_order);
    if ($query) {
        echo "<script>window.location='?go=order'</script>";
    } else {
        echo "<div class='alert alert-danger'>
        <i class='fa fa-times-circle'></i> 
        Gagal Di Merubah</div>";
    }
}
?> 