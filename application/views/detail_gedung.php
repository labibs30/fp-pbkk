<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            Detail Gedung
        </div>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="col">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="cil-md-8">'
                        <table class="table">
                            <tr>
                                <td>Nama Gedung</td>
                                <td><strong><?php echo $brg->nama_gdg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Alamat Gedung</td>
                                <td><strong><?php echo $brg->alamat_gdg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Luas Gedung</td>
                                <td><strong><?php echo $brg->luas_gdg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Luas Tanah Gedung</td>
                                <td><strong><?php echo $brg->luas_tanah_gdg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kapasitas</td>
                                <td><strong><?php echo $brg->kapasitas ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                                    </strong></td>
                            </tr>
                        </table>
                        <div class="ml-3">
                            <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_gdg, '<div class="btn btn-sm btn-primary">Booking</div>') ?>
                            <?php echo anchor('welcome/index/', '<div class="btn btn-sm btn-danger">kembali</div>') ?>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>