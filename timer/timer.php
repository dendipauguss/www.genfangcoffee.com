
      <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    

<p ><H1><center><font color="white">Pesanan Anda</font></center></H1><p>
<div class="col-sm-12 col-md-12 col-lg-12">
<table  class="table table-bordered" style="font-size:30px;color:white; ">
    <tr>
        <thead>
        <th style="width:100px;">No.</th>
        <th style="width:300px;">Meja</th>
        <th style="width:300px;">Status</th>
        <th style="width:200px;">Ready in</th>
      
        </thead>
    </tr>
   <?php
session_start();
include "../fungsi/koneksi.php";

$data=$ok->select('pesan',"keterangan='p'");



foreach ($data as $key => $value) {
    $f=$value['id_order'];
    $_SESSION['sesi'.$key.'']=$f;



?>
<tr id="baris<?php echo $key;?>"><td><?=$key+1;?></td><td>Meja <?=$value['no_meja'];?></td>
<td>
<span id="progres<?php echo $key;?>"></span></td><td><span id="timer<?php echo $key;?>"></span></td></tr>


<?php     
//set session dulu dengan nama $_SESSION["mulai"]
  if (isset($_SESSION["mulai$key"])) { 
        //jika session sudah ada
        $telah_berlalu = time() - $_SESSION["mulai$key"];
    } else { 
        //jika session belum ada
        $_SESSION["mulai$key"]  = time();
        $telah_berlalu      = 0;
    }

    
    $duration= 15;
    $temp_waktu = ($duration*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
    $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
    $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
     
    if ($temp_menit < 60) { 
        /* Apabila $temp_menit yang kurang dari 60 menit */
        $jam    = 0; 
        $menit  = $temp_menit; 
        $detik  = $temp_detik; 
    } else { 
        /* Apabila $temp_menit lebih dari 60 menit    */       
        $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
        $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
        $detik  = $temp_detik;
    }  

?>
    <script type="text/javascript">
        $(document).ready(function() {
           var detik =<?php echo $detik; ?>;
        var menit =<?php echo $menit; ?>;
        var jam =<?php echo $jam; ?>;
      
        function hitung() {
         
     
            /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
             /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 10 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer<?php echo $key;?>').html(
                    '' + menit + ' menit : ' + detik + ' detik'
                );
                
            detik--;
            /** Jika var detik < 0
                * var detik akan dikembalikan ke 59
                * Menit akan Berkurang 1
            */
            if(menit<20){
                    if (menit <= 20 && menit >=10) {
                    
                     
                       $('#progres<?php echo $key;?>').html('Being Made');
                }

                  if (menit <= 9 && menit >=2) {
                    
                    
                       $('#progres<?php echo $key;?>').html('Quality Check');
                }
                
                  if (menit <= 2 && menit >=0) {
                    
                        $('#timer<?php echo $key;?>').html('Now');
                       $('#progres<?php echo $key;?>').html('Ready to Serve');

                }


                 if(menit<1  && detik<=60 && detik >=2){

             $('#timer<?php echo $key;?>').html('Now');
                       $('#progres<?php echo $key;?>').html('Ready');
           

                }

                 if (menit < 0) {
                     $('#timer<?php echo $key;?>').html('Now');
                     $('#progres<?php echo $key;?>').html('Ready');

                     $('#baris<?php echo $key;?>').remove();
                 
                
                      
  
                } 
            }
            if (detik < 0) {
                detik = 59;
                menit--;
                /** Jika menit < 0
                    * Maka menit akan dikembali ke 59
                    * Jam akan Berkurang 1
                */
               
               
            }
        }
        /** Menjalankan Function Hitung Waktu Mundur */
        hitung();
    });
    </script>




<?php

}
    
?>




</table>       
  
 </div>  
