<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
      </div>
    </div>

    <h3>Laporan Laba Rugi</h3>

    <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Total Unit Pembelian</th>
                        <th scope="col">Total Harga Pembelian</th>
                        <th scope="col">Total Unit Jual</th>
                        <th scope="col">Total Harga Jual</th>
                        <th scope="col">Laba/Rugi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach( $data['br'] as $br ) : ?>
                    <tr>
                        <td><?= $br['TransactionDate'];?></td>
                        <td> <?= $br['totalUnitPembelian'];?></td>
                        <td> <?= $br['TotalBiayaPembelian'];?></td>
                        <td> <?= $br['totalUnitJual'];?></td>
                        <td> <?= $br['TotalBiayaJual'];?></td>
                        <td> <?= $br['Hasil'];?></td>
                       </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
    </table>

</div>





