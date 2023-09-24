<?php
include "../../fungsi/koneksi.php";
  
      $ido=$_POST['id_detail_order'];
       $id_order=$_POST['id_order'];
       $id_masakan=$_POST['masakan'];
       $qty=$_POST['qty'];
       $keterangan="DM";
       $status="DB";

        $data   = array(
          'id_detail_order'=>$ido,
          'id_order' => $id_order,
          'id_masakan' => $id_masakan,
           'qty' => $qty,
          'keterangan'=>$keterangan,
          'status_detail_order'=>$status
            
        );
        $asup   = $ok->insert('detail_order',$data);
        $ok=$asup->execute();
    if($ok){

    }else{

    }

      

?>