
<div class="d-flex justify-content-center">
    <form action="<?= BASEURL; ?>/barang/ubah" method="post" class="w-50 mt-4 p-4 rounded bg-light">
        <h2 class="mb-4 text-center">Ubah Data Barang</h2>
        <input type="hidden" name="IdBarang" id="IdBarang" value="<?= $data['br']['IdBarang']; ?>">

        <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="<?= $data['br']['NamaBarang']; ?>">
        </div>

        <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?= $data['br']['Keterangan']; ?>">
        </div>

        <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="<?= $data['br']['Satuan']; ?>">
        </div>

        <div class="form-group">
            <label for="HargaBarang">Harga Barang</label>
            <input type="text" class="form-control" id="HargaBarang" name="HargaBarang" value="<?= $data['br']['HargaBarang']; ?>">
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
