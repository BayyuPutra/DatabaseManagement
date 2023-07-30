<!-- <div>
<form action="<?= BASEURL; ?>/akses/ubah" method="post">
          <input type="hidden" name="IdAkses" id="IdAkses" value="<?= $data['br']['IdAkses']; ?>">
          <div class="form-group">
            <label for="NamaAkses">NamaAkses</label>
            <input type="text" class="form-control" id="NamaAkses" name="NamaAkses" value="<?= $data['br']['NamaAkses']; ?>">
          </div>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?= $data['br']['Keterangan']; ?>">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
</div> -->



<div class="d-flex justify-content-center">
    <form action="<?= BASEURL; ?>/akses/ubah" method="post" class="w-50 mt-4 p-4 rounded bg-light">
        <h2 class="mb-4 text-center">Ubah Akses</h2>
        <input type="hidden" name="IdAkses" id="IdAkses" value="<?= $data['br']['IdAkses']; ?>">

        <div class="form-group">
            <label for="NamaAkses">Nama Akses</label>
            <input type="text" class="form-control" id="NamaAkses" name="NamaAkses" value="<?= $data['br']['NamaAkses']; ?>">
        </div>

        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?= $data['br']['Keterangan']; ?>">
        </div>        

        <div class="d-flex justify-content-center mt-4">
            <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">
                <i class="fas fa-times"></i> Batal
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-check"></i> Ubah Data
            </button>
        </div>
    </form>
</div>
