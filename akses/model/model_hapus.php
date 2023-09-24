			<!-- modal static -->
			<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticModalLabel">Hapus</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								Apakah anda yakin ingin menghapus data ini ?
							</p>
						</div>
						<div class="modal-footer">
				<?php 
					echo "<button type='button' class='btn btn-outline-danger' data-dismiss='modal'>Tidak</button>
							<a href='?go=$edit&aksi=hapus&kode=$view' class='btn btn-outline-info'>Yakin</a>";
						 ?>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal static -->