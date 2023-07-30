<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                <i class="fas fa-plus-circle"></i> Tambah Pelanggan
            </button>
        </div>
    </div>

    <h2 class="mb-3">Daftar Pelanggan</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['br'] as $br) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $br['NamaPelanggan']; ?></td>
                        <td><?= $br['NoTelp']; ?></td>
                        <td><?= $br['AlamatPelanggan']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/pelanggan/hapus/<?= $br['IdPelanggan']; ?>" class="badge badge-danger tombolHapus" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                            <a href="<?= BASEURL; ?>/pelanggan/ubahDetail/<?= $br['IdPelanggan']; ?>" class="badge badge-primary tombolUbah">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/pelanggan/tambah" method="post">
          <input type="hidden" name="IdPelanggan" id="IdPelanggan">
          <div class="form-group">
            <label for="NamaPelanggan">Nama Pelanggan</label>
            <input type="text" class="form-control" id="NamaPelanggan" name="NamaPelanggan" placeholder="Nama Pelanggan...">
          </div>

          <div class="form-group">
            <label for="NoTelp">No Telp</label>
            <input type="text" class="form-control" id="NoTelp" name="NoTelp" placeholder="NoTelp...">
          </div>

          <div class="form-group">
            <label for="AlamatPelanggan">Alamat Pelanggan</label>
            <input type="text" class="form-control" id="AlamatPelanggan" name="AlamatPelanggan" placeholder="Alamat Pelanggan...">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal edit -->




