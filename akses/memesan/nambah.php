
<style type="text/css"> 
   .link-pareum{ 
      pointer-events: none; 
      cursor: default;
   }
</style>

<?php
$data=$ok->select("meja");
$jumlah=0;
foreach ($data as $key => $value) {

	$jumlah=$jumlah+$value['no_meja'];
	
if ($value['status']=='1'){
	
	$gambar="meja2.png";
	$pareum="disabled";
} else {
	$pareum="";
	$gambar="meja.png";

}

?>
			
               
<form action="?go=selanjutnya" method="POST" style="float: left;">
  <div style="width: 235px">
    <input type="hidden" value="<?php echo $value['no_meja']; ?>" name="meja">  
        <div class='au-card au-card--no-shadow au-card--no-pad px-3 py-3' style="margin: 0 10px 20px 10px;">
            <img src="meja/<?php echo $gambar; ?>" class="img-responsive" width="200px" alt="Project">
               <div class="mt-3" >
                    <center>
                      <input type="submit" class="btn btn-info" value="Order meja <?php echo $value['no_meja'];?>" name="kirim" id="kirim" <?php echo $pareum; ?>> </center>
                </div>
        </div>
  </div>
</form>
<?php
}
?>