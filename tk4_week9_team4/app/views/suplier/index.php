<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                <i class="fas fa-plus-circle"></i> Tambah Suplier
            </button>
        </div>
    </div>

    <h2 class="mb-3">Daftar Suplier</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['br'] as $br) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $br['NamaSuplier']; ?></td>
                        <td><?= $br['Alamat']; ?></td>
                        <td><?= $br['NoTelp']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/suplier/hapus/<?= $br['IdSuplier']; ?>" class="badge badge-danger tombolHapus" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                            <a href="<?= BASEURL; ?>/suplier/ubahDetail/<?= $br['IdSuplier']; ?>" class="badge badge-primary tombolUbah">
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Penjualan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/suplier/tambah" method="post">
          <input type="hidden" name="IdSuplier" id="IdSuplier">
          <div class="form-group">
            <label for="NamaSuplier">Nama Suplier</label>
            <input type="text" class="form-control" id="NamaSuplier" name="NamaSuplier" placeholder="NamaSuplier">
          </div>

          <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label for="NoTelp">No Telp</label>
            <input type="text" class="form-control" id="NoTelp" name="NoTelp" placeholder="Alamat">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal edit -->