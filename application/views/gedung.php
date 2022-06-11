<div class="container-fluid">

    <div class="row text-center mt-4">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" src=".../100px180/" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $brg->nama_gdg ?></h5>
                    <small><?php echo $brg->keterangan ?></small>

                    <br>
                    <span class="badge badge-success mb-3">Rp. <?php echo $brg->harga ?></span><br>

                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_gdg, '<div class="btn btn-sm btn-primary">Booking</div>') ?>

                    <?php echo anchor('dashboard/detail/' . $brg->id_gdg, '<div class="btn btn-sm btn-success   ">Detail</div>') ?>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>