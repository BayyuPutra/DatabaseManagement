<!-- <div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data Barang
        </button>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-6">
          <h3>Daftar Barang</h3>
          <ul class="list-group">
            <?php foreach( $data['br'] as $br ) : ?>
              <li class="list-group-item">
                  <?= $br['NamaBarang'];?>
                  <?= $br['Keterangan'];?>
                  <?= $br['Satuan'];?>
                  <a href="<?= BASEURL; ?>/barang/hapus/<?= $br['IdBarang']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/barang/ubahDetail/<?= $br['IdBarang']; ?>" class="badge badge-primary float-right">Ubah</a>
              </li>
            <?php endforeach; ?>
          </ul>      
        </div>
    </div>

</div>


Modal -->
<!-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/barang/tambah" method="post">
          <input type="hidden" name="IdBarang" id="IdBarang">
          <div class="form-group">
            <label for="NamaBarang">NamaBarang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="Namabarang">
          </div>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" placeholder="Keterangan">
          </div>

          <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="number" class="form-control" id="Satuan" name="Satuan" placeholder="Satuan">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div> -->


<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                <i class="fas fa-plus-circle"></i> Tambah Barang
            </button>
        </div>
    </div>

    <h2 class="mb-3">Daftar Barang</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data['br'] as $br) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $br['NamaBarang']; ?></td>
                        <td><?= $br['Keterangan']; ?></td>
                        <td><?= $br['Satuan']; ?></td>
                        <td><?= $br['HargaBarang']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/barang/hapus/<?= $br['IdBarang']; ?>" class="badge badge-danger tombolHapus" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">
                                <i class="fas fa-trash-alt"></i> Hapus
                            </a>
                            <a href="<?= BASEURL; ?>/barang/ubahDetail/<?= $br['IdBarang']; ?>" class="badge badge-primary tombolUbah">
                                <i class="fas fa-edit"></i> Ubah
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>



<!-- Modal tambah-->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="formModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/barang/tambah" method="post">
          <input type="hidden" name="IdBarang" id="IdBarang">
          <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="Nama barang...">
          </div>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" placeholder="Keterangan...">
          </div>

          <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" placeholder="Satuan...">
          </div>
          <div class="form-group">
            <label for="HargaBarang">Harga Barang</label>
            <input type="text" class="form-control" id="HargaBarang" name="HargaBarang" placeholder="Harga barang...">
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

<!-- end modal tambah -->.

<!-----REFERENSI------->
<!-- Modal Edit-->
<!-- <div class="modal fade" id="formModalUbah" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="formModalLabel">Ubah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/barang/ubahBarang" method="post">

          <input type="hidden" name="IdBarang" id="IdBarang">
          <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="<?= $data['br'][0]['NamaBarang']; ?>">
          </div>

          <div class="form-group">
            <label for="Keterangan">Keterangan</label>
            <input type="text" class="form-control" id="Keterangan" name="Keterangan" value="<?= $data['br'][0]['Keterangan']; ?>">
          </div>

          <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="number" class="form-control" id="Satuan" name="Satuan" value="<?= $data['br'][0]['Satuan']; ?>">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
      </div>
    </div>
  </div>
</div> -->

<!-- end modal edit -->









