<script src="jquery/jquery.js"></script>

<!--data uang perbulan-->
<div class="card">
  <div class="card-header"><b>Laporan Perbulan</b></div>
    <div class="card-body">
      <div id="loader" style="display:none; position:fixed;margin-left:45%; margin-top:8px;"><img src="img/loading.gif" >Silahkan Tunggu...
      </div>
      <form  id="formulir" method="POST">
        <div class="form-group" style="float: left;">
                    <select name="bulan" id="bulan" class="form-control" style="margin:0px auto;">
                      <?php
                          $bulan=array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

                            for ($i=1;$i<13;$i++){
                              
                                if($i<10){
                                  $a="0$i";
                                }else{
                                  $a=$i;
                                }
                                echo "<option value='$a'>$bulan[$i]</option>";  
                            }
                        ?>
                    </select>
        </div>
        <div class="form-group" style="float: left; margin: 0 20px 0 20px;">
                 <select name="tahun" id="tahun" class="form-control" style="margin:0px auto;">
                        <?php
                        $th=date("Y");
                         for ($i=2016;$i<=$th;$i++){
                            if($th==$i){
                              $pilih="selected";
                            }
                          echo "<option value='$i' $pilih>$i</option>";  
                         }
                        ?>
                 </select>
        </div>

             <div class="form-group">
                <input type="submit" name="submit"  value="Tampilkan" class="btn btn-outline-info">
              </div>
        
      </form>
    </div><!--div body perbulan-->

      <div class="card-header"><b>Laporan Masakan</b> &nbsp;&nbsp;&nbsp;
        <a href="laporan/laporan_data_masakan.php" target="_blank" class=" btn btn-outline-info ml-5">Cetak</a>
      </div>
      <div class="card-header"><b>Laporan Paling Laku</b> 
        <a href="laporan/lap_laku.php" target="_blank" class=" btn btn-outline-info ml-5">Cetak</a>
      </div>





    </div><!--div kotak putih-->
</div>
     

<script type="text/javascript">
$(document).ready(function(){
  $('#formulir').on('submit',function(e) {  
  $.ajax({
      url:'laporan/hasil_ngalapor.php', 
      data:$(this).serialize(),
      type:'POST',
 beforeSend:function(){
$("#loader").show();
},
success:function(result){

  $("#hasilna").html(result);
  $("#loader").hide();
}
    });
    e.preventDefault(); 
  });
});
</script>      
  
<div id="hasilna" style="margin-top:20px;"></div>