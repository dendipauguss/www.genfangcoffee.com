	<!-- modal input -->
	<div id="modalpesan" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title">Pesan Pemberitahuan</h4>
	            </div>
	            
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
	            </div>

	        </div>
	    </div>
	</div>



	<?php 
	$konek=mysqli_connect("localhost", "root", "", "kafe");
	?>
	<?php 
	$periksa = mysqli_query($konek,"SELECT * from masakan where stok <=3");
	while ($q = mysqli_fetch_array($periksa)) {
		if ($q['stok'] <= 5) {
			?>
	<script>
	    $(document).ready(function() {
	        $('#pesan_sedia').css("color", "red");
	        $('#pesan_sedia').append("<span class='quantity'>1</span>");
	    });
	</script>
	<?php
	echo "<div style='padding:10px' class='alert alert-danger'>
		Peringatan : Stok  <a href='#' style='color:red'>" . $q['nama_masakan'] . "</a> yang tersisa tinggal <a href='#' style='color:red'>" . $q['stok'] . "</a> !!!</div>";
}
}
?> 