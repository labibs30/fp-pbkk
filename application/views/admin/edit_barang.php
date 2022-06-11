<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="form-group">
                <label>Nama Gedung</label>
                <input type="text" name="nama_gdg" class="form-control" value="<?php echo $brg->nama_gdg ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat_gdg" class="form-control" value="<?php echo $brg->alamat_gdg ?>">
            </div>
            <div class="form-group">
                <label>Pemilik</label>
                <input type="text" name="pemilik" class="form-control" value="<?php echo $brg->pemilik ?>">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_gdg" class="form-control" value="<?php echo $brg->id_gdg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>
            <div class="form-group">
                <label>Luas Gedung</label>
                <input type="text" name="luas_gdg" class="form-control" value="<?php echo $brg->luas_gdg ?>">
            </div>
            <div class="form-group">
                <label>Luas Tanah Gedung</label>
                <input type="text" name="luas_tanah_gdg" class="form-control" value="<?php echo $brg->luas_tanah_gdg ?>">
            </div>
            <div class="form-group">
                <label>Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control" value="<?php echo $brg->kapasitas ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>
            <div class="form-group">
                <label>Denah</label>
                <input type="file" name="denah" class="form-control" value="<?php echo $brg->denah ?>">
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $brg->gambar ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>