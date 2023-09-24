<script src="jquery/jquery.js"></script>

<div class="card">
  <div class="card-header"><b>Form Pembayaran</b></div>
    <div class="card-body">
        <form  method="POST" name="form1" class="form-horizontal" id="formulir">
            <label class="col-md-3 control-label" style="float: left; margin-top: 5px;">Masukan Nomor Meja</label>
            <div class="col-md-2" style=" float: left;">
            <input autofocus="autofocus" type="number" name="bayar_meja" id="bayar_meja" class="form-control ">
            </div>
            <input type="submit" class="btn btn-info" value="Lihat">
        </form> 
    </div>
  </div>
</div>



<div id="hasil"></div>



<script type="text/javascript">
$(document).ready(function(){
 $('#formulir').on('submit',function(e) { 
 var bayar_meja=$("#bayar_meja").val(); 
  $.ajax({
      url:'memesan/bayar_panderi.php', 
     data: {
    bayar_meja:bayar_meja
      },
      type:'POST',
 beforeSend:function(){
$("#loader").show();
},
success:function(result){
alert(bayar_meja);
  $("#hasil").html(result);
  $("#loader").hide();
}
    });
    e.preventDefault(); 
  });

});

</script>