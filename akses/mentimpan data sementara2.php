<pre lang="php">
<?php 
//jika tombol proses diklik
if (isset($_POST['btnProses'])) {
        //pengecekan untuk error
        $message = array();
        if (trim($_POST['cmbBarang']) == "BLANK") {
                $message[] = "Nama barang belum dipilih";
            }
        if (trim($_POST['txtVolume']) == "" or !is_numeric(trim($_POST['txtVolume']))) {
                $message[] = "Jumlah barang tidak boleh kosong dan harus diisi angka";
            }
        if (trim($_POST['txtKeterangan']) == "") {
                $message[] = "Keterangan barang tidak boleh kosong";
            }

        //membaca variabel di form
        $cmbBarang = $_POST['cmbBarang'];
        $txtVolume = $_POST['txtVolume'];
        $txtKeterangan = $_POST['txtKeterangan'];

        if (!count($message) == 0) {
                //menampilkan pesan error 
            }

        //tidak ada pesan error
        if (count($message) == 0) {
                $no = 0;
                //inputan ke tabel sementara hanya 10 data saja, bagaimana agar data tidak dibatasi?
                for ($i = 0; $i < 10; $i++) {
                        if ($_SESSION['a'][$i][0] == "") {
                                $_SESSION['a'][$i][0] = $cmbBarang;
                                $_SESSION['a'][$i][1] = $txtVolume;
                                $_SESSION['a'][$i][2] = $txtKeterangan;
                                break;
                            }
                    }
                echo "<meta http-equiv='refresh' content='0; url=?page=pengadaan'>";
                exit;
            }
    }


//jika tombol simpan diklik, data dari tabel sementara di simpan
//.ke database barang berdasarkan nama supplier yang dipilih
if (isset($_POST['btnSimpan'])) {

        $message = array();
        if (trim($_POST['cmbSupplier']) == "BLANK") {
                $message[] = "Nama supplier belum dipilih";
            }

        if (!count($message) == 0) {
                //menampilkan pesan error 
            }


        if (count($message) == 0) {
                //tidak tahu codingnya mas
            }
    }


?>

<!--inputan data-->
<form action="?page=pengadaan" method="post" name="frmTambahPengadaan">
<label class="control-label">Nama Barang :</label>
     <select name="cmbBarang">
       <option value="BLANK">-- Pilih Barang --</option>
            <?php
               //mengambil data barang dari database barang
            ?>
    </select>
<label class="control-label">Jumlah Barang :</label>
      <input type="text" name="txtVolume" value="" />
<label class="control-label">Keterangan Barang :</label>
       <input type="text" name="txtKeterangan" value="" />

<input type="submit" class="btn btn-primary" name="btnProses" value="Proses" />
<input type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan" />

</form>


<!--menampilkan inputan data di tabel bawah ini-->
<!--tabel sementara sebelum di simpan ke database-->
<table>
 <thead>
  <tr>
   <th>No</th>
   <th>Nama Barang</th>
   <th>Volume</th>
   <th>Keterangan</th>
   <th>Hapus</th>
   </tr>
  <thead>

  <tbody>
      <?php
        for ($i = 0; $i < count($_SESSION['a']); $i++) {
                $no++;
                ?>
                 <tr class="success">
			<td style="text-align:center"><?php echo $no; ?></td>
			<td><?php echo $_SESSION['a'][$i][0]; ?></td>
			<td><?php echo $_SESSION['a'][$i][1]; ?></td>
			<td><?php echo $_SESSION['a'][$i][2]; ?></td>
			<td><?php  ?></td>
		</tr>
       <?php 
    } ?>
    </tbody>
</table>

< /pre> 