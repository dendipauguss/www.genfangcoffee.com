<?php
include "../../fungsi/koneksi.php";
  
      $ido=$_POST['io'];
       $total_bayar=$_POST['jumlah'];
       $tgl=date("Y-m-d");
     $idt="";
    session_start();//jika mau mengambil sesion maka harus ada sesion start
    $user = $_SESSION['id_user'];
      // $user="2";
       $pelanggan="1";

        $data   = array(
          'id_transaksi'=>$idt,
          'id_order'=>$ido,
          'tanggal' => $tgl,
          'total_bayar' => $total_bayar,
           'id_user' => $user,
          'id_pembeli'=>$pelanggan
          
            
        );
        $asup   = $ok->insert('transaksi',$data);
        $yes=$asup->execute();
         $ubah_status=$ok->ubah_status($ido);
 $stat=$ubah_status->execute();
    if($yes==true){
      return true;

unset($_SESSION['id_order']);
unset($_SESSION['meja']);

   } else {
return false;
   }
      

?>