<div class="modal fade" id="modalMejaPesan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title  font-weight-bold">Menu Restoran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <form name="add_name" id="add_name">
                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                            <option value="0" name="name[]">Pilih Menu</option>
                            <?php
                            $nama_tabel = "masakan";
                            $data = $ok->view($nama_tabel);
                            foreach ($data as $view) {
                              echo "<option>";
                              echo $view['nama_masakan'];
                              echo "</option>";
                            }

                            ?>
                        </select>
                        <button type="button" name="add" class="btn btn-primary">Pilih</button>
                    </form>
                    <hr>
                    <div>

                    </div>







                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success">Memesan</button>
            </div>
        </div>
    </div>
</div> 