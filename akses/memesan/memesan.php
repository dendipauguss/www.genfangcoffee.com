<script src="jquery/jquery.js"></script>


<?php   
          if(isset($_POST['kirim'])){
//echo $_SESSION['id_user'];

$meja=$_POST['meja']; //no_meja 1
$_SESSION['meja']=$meja;
            $tgl=date("Y-m-d");
            $ket="p";
            $stat="BL";
          $user = $_SESSION['id_user'];
      $id_order="";
      // echo $meja;
            $data=array(
              'id_order' => $id_order,
              'no_meja'=>$meja,
              'tanggal'=>$tgl,
              'id_user' => $user,
              'keterangan'=>$ket,
              'status_order'=>$stat);
$data=$ok->insert('pesan',$data);
$data->execute();
}
$data = $ok->select('pesan',"no_meja='$_SESSION[meja]'");
foreach($data as $row){
$iod=$row['id_order'];
$_SESSION['id_order']=$iod;

}
//echo $_SESSION['id_order'];
?>

<form  method="POST" name="form1" class="form-horizontal" id="formulir">
  
     <table>
  <tr>
    <td width="300px">
      <input type="hidden" name="id_detail_order">
      <input type="hidden" name="id_order" value="<?php echo $_SESSION['id_order']; ?>">
        <label class="control-label" style="margin-left: 10px;">Menu Restoran</label>
         
            <select autofocus  data-plugin-selectTwo name="masakan" id="masakan" class="form-control cc-exp" >
              <?php
              $data=$ok->select("masakan");
              $jumlah=0;
              foreach ($data as $key => $value) {
                echo "<option value='$value[id_masakan]' >$value[nama_masakan] | $value[stok]</option>";
              }
              ?>
            </select>
    </td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td width="100px">
      <label class="control-label" style="margin-left: 10px;">Porsi</label>
         <input type="number" id="qty" name="qty" class="form-control cc-cvc" default id="inputDefault">
         <input type="hidden" name="keterangan">
        <input type="hidden" name="status">
    </td>
    <td width="200px">
      <label  class="control-label" style="margin-left: 10px; margin-bottom: -30px; ">
        <button type="submit" id="add-row" class="btn btn-info" value="Add Row" style="float: right;">Pilih</button>
        </label>
    </td>
  </tr>
</table>     
          
</form> 
<br>


<div id="hasil"></div>



<script type="text/javascript">
$(document).ready(function(){
 
$('#hasil').load('memesan/view.php');

});


</script>

<script type="text/javascript">
$(document).ready(function(){

  $("form[name='form1']").on('submit',function(e) { 
  
  $.ajax({
      url:'memesan/save_trans.php', 
      data:$(this).serialize(),
      type:'POST',
      success:function(data){
        console.log(data);
     
alert ("Anda Yakin memilih makanan ini?");
     window.location.replace('?go=memesan');
      },
      error:function(data){
       
      }
    });
    e.preventDefault(); 
  });

});
</script>