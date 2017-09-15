<div class="modal fade" id="modal-edit" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Data</h4>
      </div>
      <div class="modal-body">
        <div class="isi-data"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="proses_simpan.php" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Siswa</h4>
      </div>
      <div class="modal-body">
        <!-- dibawah taruh file form simpan -->

        <div class="form-group ">
          <label for="nis" class="control-label col-sm-2">NIS :</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="nis" placeholder="NIS Anda">
        </div>
        </div>
        <div class="form-group">
          <label for="tahun" class="control-label col-sm-2"> Tahun </label>
          <div class="col-sm-6">
            <select class="form-control" name="tahun">
              <?php for ($i=2015; $i > 1990 ; $i--) { ?>
                <option><?php echo $i ?></option>
              <?php } ?>
            </select>
          </div>
        </div>


        <div class="form-group">
          <label for="nama" class="control-label col-sm-2">Nama :</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" name="nama" placeholder="Nama Anda">
        </div>
      </div>
      <div class="form-group">
      <label for="jenis_kelamin" class="control-label col-sm-2">Jenis Kelamin :</label>
      <div class="col-sm-6">
      <select class="form-control" name="jenis_kelamin">

        <option>Laki-Laki</option>
        <option>Perempuan</option>

      </select>
      </div>
      </div>
      <div class="form-group">
        <label for="telp" class="control-label col-sm-2">Nomor Telpon :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="telp" placeholder="Nomor Telepon Anda">
        </div>
      </div>
      <div class="form-group">
        <label for="alamat" class="control-label col-sm-2">Alamat : </label>
        <div class="col-sm-6">
          <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="foto" class="control-label col-sm-2">Foto : </label>
          <div class="col-sm-6">
            <input type="file" name="foto">
          </div>
        </div>
        <div class="form-group">
          <center>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
        <input type="submit" value="simpan" class="btn btn-success" >
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
