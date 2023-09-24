<link rel="stylesheet" type="text/css" href="akses/vendor/bootstrap-4.1/bootstrap.min.css">
<div >
	<div class="text-center mt-5"><b>
		PT. WAKAHA, TBK<br>
		JL RAYA PADAREK LEMAHSUGIH </b>
		<br>
	----------------------------------------------------------------------------------------------------------------------------------------------------------------
	</div>
<center>
		<table>
		<tr>
			<th width="100">Meja</th><th width="200">Menu</th><th width="100">QTY</th><th width="150">Harga</th><th width="150">Total</th>
		</tr>
	
<?php
include "fungsi/koneksi.php";
  //echo $_POST['bayar_meja'];

  session_start();
    $_SESSION['note'];
    $meja=$_SESSION['note'];
    $jumlah=0;
        $asup   = $ok->bayar_meja($meja);
        foreach ($asup as $key => $value) {

          $jumlah=$jumlah+ $value['total'];

    echo 
         "
      <tr>
         <td>
         $value[no_meja]
         </td>
         <td>
         $value[nama_masakan]
         </td>
         <td>
         $value[qty]
         </td>
         <td>
         $value[harga]
         </td>
         <td>
         $value[total]
         </td>
      </tr>


         ";
        }
    
echo " <tr>
          <td colspan='4'>Total</td><td><b>".$jumlah."</b></td>
          <td width='200px'>";
?>

	</table>
</center>












</div>
<script>window.print();
</script>