<script src="jquery/jquery.js"></script>


<form method="POST" id="formulir-bayar" name="form2">
<table class="table table-bordered table-primary">
	<tr>
		<thead>
		<th>Jenis</th>
		<th>QTY</th>
		<th>HARGA</th>
		<th>Total</th>
		<td>ACT</td>
		</thead>
	</tr>

<?php
include "../../fungsi/koneksi.php";
session_start();
$id=$_SESSION['id_order'];

$data=$ok->total($id);
$jumlah=0;
foreach ($data as $key => $row) {
	
	$jumlah=$jumlah+$row['Total'];

	echo "<tr>
	<td>$row[nama_masakan] </td>
	<td>$row[qty]</td>
	<td>$row[harga]</td>
	<td>$row[Total]</td>
	<td>
	
<a class='delete' data-id='<?php echo $id; ?>' onclick='confirm(Apakah anda yakin akan menghapus data ?)'><button  class='btn btn-small btn-outline-danger' ><i class='icon-remove icon-white'></i> Hapus</button></a>
	</td>



	
	";
}
 echo "</tr>
	<tr><td colspan=3>Total</td>
	<td>$jumlah</td></tr>";
 echo "</tr>
	<tr><td colspan=4> <input type='hidden' value='$id' id='idorder' name='io'>
	<input type='hidden' value='$jumlah' name='jumlah' id='jumlah'>

	
	</td>
	<td width='200px'>";

	?>
	Nominal : <input type="text" class="form-control" id="nominal"  name="nominal"><br><input type='submit' class='btn btn-success' id='bayar'  value='Bayar' onclick="return confirm('yakin Akan dibayar?');">
	<?php
	echo "</td></tr>";
	

?>

</table></form>
<div id="selisih"></div>
<script type="text/javascript">
$(document).ready(function(){

  $("#formulir-bayar").on('submit',function(e) { 
  
  $.ajax({
      url:'memesan/save_bayar.php', 
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
   
 var io = $("#idorder").val();
  var jumlah = $("#jumlah").val();
 var nominal = $("#nominal").val();
 var selisih=parseInt(nominal)-parseInt(jumlah);
      var markup = "<table class='table table-bordered table-info'><tr><td> Total Beli: "+jumlah+"</td><td> Uang : "+nominal+"</td><td><b> Kembalian: "+selisih+" </b></td></tr></table>";
       $("#selisih").append(markup);

  window.setTimeout(function(){ 
      window.location.replace('?go=meja');
} ,11000);
      },
      error:function(data){
       alert("error");
      }
    });
    e.preventDefault(); 
  });

});
</script>