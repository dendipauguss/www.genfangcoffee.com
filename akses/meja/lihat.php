<style type="text/css"> 
   .link-pareum{ 
      pointer-events: none; 
      cursor: default;
   }
</style>
<div class="table-responsive">
    <div class='row'>

<!----------Dbawa pulang------------------------------------------------->
<form action="?go=memesan" method="POST" style="float: left;">
            <div style="width: 240px;">
                <div class='au-card au-card--no-shadow au-card--no-pad px-3 py-3' style="margin: 0 10px 0 10px;">
                    <input type="hidden" value="0" name="meja">
                    <img src='meja/logo-tas.png' width="200px" style="margin-bottom: 20px;">
                    <center><input type="submit" value="Bawa Pulang " class="btn btn-info" name="kirim" id="kirim" title='Klik untuk memesan'></center>
                </div>
            </div> 
 </form>



<?php
$data=$ok->select("meja");
$jumlah=0;
foreach ($data as $key => $value) {

    $jumlah=$jumlah+$value['no_meja'];
    
if ($value['status']=='0'){
    $pareum="disabled";
    $gambar="meja2.png";
} else {
    $pareum="";
    $gambar="meja.png";
}

?>
<!----------Mesen meja----------------------------------------------->
                
<form action="?go=memesan" method="POST">
    <input type="hidden" value="<?php echo $value['no_meja']; ?>" name="meja">  
        <div class='au-card au-card--no-shadow au-card--no-pad px-3 py-3 ' style="margin: 0 10px 20px 10px;">
                 <img src="meja/<?php echo $gambar; ?>" class="img-responsive" width="190px" alt="Project">
            <div class="mt-3" >
            <center><input type="submit" class="btn btn-info" value="Pesan Meja <?php echo $value['no_meja'];?>" name="kirim"  id="kirim" <?php echo $pareum; ?>> </center>
            </div>
                                      
        </div>
</form>
<?php
}
?>

    </div>
</div> 