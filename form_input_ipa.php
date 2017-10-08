

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="proses_nilai_ipa.php" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title">Tambah Data Siswa</h4></center>
      </div>
      <div class="modal-body">
        <!-- dibawah taruh file form simpan -->

        <div class="form-group ">
          <label for="nis" class="control-label col-sm-4">NIS :</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nis" placeholder="NIS Anda">
          </div>
        </div>
        <div class="form-group">
          <label for="nama" class="control-label col-sm-4">Nama :</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Siswa">
            </div>
          </div>
          <div class="form-group">
            <label for="kelas" class="control-label col-sm-4">Kelas :</label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="kelas" placeholder="Kelas Siswa">
              </div>
            </div>
            <div class="form-group">
              <label for="bindo" class="control-label col-sm-4">Nilai Bahasa Indonesia :</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="bindo" placeholder="Masukan Nilai Bahasa Indonesia">
                </div>
              </div>
              <div class="form-group">
                <label for="binggris" class="control-label col-sm-4">Nilai Bahasa Inggris :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="binggris" placeholder="Masukan Nilai Bahasa Inggris">
                  </div>
                </div>
                <div class="form-group">
                  <label for="matematika" class="control-label col-sm-4">Nilai Matematika :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="matematika" placeholder="Masukan Nilai Matematika">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="fisika" class="control-label col-sm-4">Nilai Fisika :</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="fisika" placeholder="Masukan Nilai Fisika">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kimia" class="control-label col-sm-4">Nilai Kimia :</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" name="kimia" placeholder="Masukan Nilai Kimia">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="biologi" class="control-label col-sm-4">Nilai Biologi :</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="biologi" placeholder="Masukan Nilai Biologi">
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
