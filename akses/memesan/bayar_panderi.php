<script src="jquery/jquery.js"></script>
  
<form method="POST" id="formulir-bayar" >
<table class="table table-bordered table-info">
  <tr>
    <thead>
    <th>Id_order</th>
    <th>Nomor Meja</th>
    <th>Maskan</th>
    <th>Harga</th>
    <th>QTY</th>
    <td>Total</td>
    </thead>
  </tr>
<?php
include "../../fungsi/koneksi.php";
  //echo $_POST['bayar_meja'];

    $meja=$_POST['bayar_meja'];
    $jumlah=0;
        $asup   = $ok->bayar_meja($meja);
        foreach ($asup as $key => $value) {

          $jumlah=$jumlah+ $value['total'];

    echo 
         "
      <tr>
         <td>
         $value[id_order]
         </td>
         <td>
         $value[no_meja]
         </td>
         <td>
         $value[nama_masakan]
         </td>
         <td>
         $value[harga]
         </td>
         <td>
         $value[qty]
         </td>
         <td>
         $value[total]
         </td>
      </tr>


         ";
        }
    
echo " <tr>
          <td colspan='5'>Total</td><td>$jumlah</td>
          <td width='200px'>";
?>
          <input type="hidden" value="<?php echo $value['id_order']; ?>" name="io" id="io">
          <input type="hidden" value="<?php echo $jumlah; ?>" name="jumlah" id="jumlah">
          Nominal : <input type="text" class="form-control" id="nominal"  name="nominal"><br>
          <input type='submit' class='btn btn-success' id='bayar'  value='Bayar' onclick="return confirm('Anda Yakin ingin melanjutkan transaksi?')" >
          <button class="btn btn-success"><a href="../nota_pembayaran.php" target="_blank" class="text-white">note</a></button>
          <?php
          echo "</td></tr>";
          ?>
</table>
</form>



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
   
 var io = $("#io").val();
  var jumlah = $("#jumlah").val();
 var nominal = $("#nominal").val();
 var selisih=parseInt(nominal)-parseInt(jumlah);
      var markup = "<table class='table table-bordered table-primary'><tr><td> Total Beli: "+jumlah+"</td><td> Uang : "+nominal+"</td><td><b> Kembalian: "+selisih+" </b></td></tr></table>";
       $("#selisih").append(markup);

   window.setTimeout(function(){ 
        window.location.replace('?go=bayar');
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