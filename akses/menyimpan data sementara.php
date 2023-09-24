iya saya pake session mas, untuk kasus saya seperti itu enaknya pake session atau tabel sementara (CREATE TEMPORARY TABLE......) ya mas?

untuk hapus session pake unset($_SESSION['a']); yang mas berikan belum bisa, model tabel session saya seperti ini:

ini tabel hasil inputan pake session, ketika saya klik simbol hapus semua data malah hilang..
----------------------------------------------------------------------------------------------
No | Nama Barang | Volume | Keterangan Barang |       Hapus     |
----------------------------------------------------------------------------------------------
 1  |      Barang a   |      9     |  Barang ok             | simbol hapus  |
 2  |      Barang b   |      4     |  Barng ready          | simbol hapus   |

coding menampilkan tabel di atas seperti ini mas:     
      <pre lang="php">
              <?php  
                                for ($i=0;$i<count($_SESSION['a']);$i++) 
                                {
                                    $no++;
                                    ?>
                                     <tr class="success">
                                        <td style="text-align:center"><?php echo $no; ?></td>  <!-- No -->
                                        <td><?php echo $_SESSION['a'][$i][0]; ?></td>            <!-- Nama Barang -->
                                        <td><?php echo $_SESSION['a'][$i][1]; ?></td>           <!-- Volume -->
                                        <td><?php echo $_SESSION['a'][$i][2]; ?></td>           <!- Keterangan Barang-->
                                        <td style="text-align:center"><a href="?page=hapus-pengadaan&amp;id=<?php echo $no; ?>" target="_self" alt="Hapus Data Pengadaan" onClick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="icon-trash"></i></a></td>
                                    </tr>
                           <?php } ?>        
      < /pre>
ketika simbol hapus diklik, diarahkan ke "hapus_pengadaan.php", berikut coding saya
di "hapus_pengadaan.php"
      <pre lang="php">
      <?php
        session_start();
        include_once "connect/cek_session.php";
        if($_GET) 
        {
	  if(empty($_GET['id']))
	  {
		echo "<b>Data yang dihapus tidak ada</b>";
	  }
	  else
	  {
		unset($_SESSION['a']);
		echo "<meta http-equiv='refresh' type='reset' content='0; url=?page=pengadaan'>";
	   }	
	}
      ?>
 ericaerica 
January 2014
database saya seperti ini mas,

tabel barang:
id_barang INT(11);
nama_barang VARCHAR(50);
volume INT(11);
keterangan VARCHAR(50);
supplier_id_supplier VARCHAR (5);  // di dapat dari tabel supplier

tabel supplier:
id_supplier VARCHAR(5);
nama_supplier VARCHAR(20);
alamat VARCHAR(100);
email VARCHAR(45);
telepon VARCHAR(20);

maksudnya dibawah ini gmn mas?
$values=array();
for(...) {
  $values[]='("'.implode('","',$_SESSION['a'][...]).'")';
}

$sql='INSERT INTO `barang` (`barang`,`volume`,`keterangan`) VALUES '.implode(',',$values);