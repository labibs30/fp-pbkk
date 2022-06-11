<div class="container-fluit ml-3 mr-3">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Gedung</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Alamat Gedung</th>
            <th>Pemilik Gedung</th>
            <th>Keterangan</th>
            <th>Luas Gedung</th>
            <th>Luas Tanah Gedung</th>
            <th>Kapasitas</th>
            <th>Harga</th>
            <th colspan="3">AKSI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($barang as $brg) :  ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_gdg ?></td>
                <td><?php echo $brg->alamat_gdg ?></td>
                <td><?php echo $brg->pemilik ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->luas_gdg ?></td>
                <td><?php echo $brg->luas_tanah_gdg ?></td>
                <td><?php echo $brg->kapasitas ?></td>
                <td><?php echo $brg->harga ?></td>
                <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td>
                    <?php echo anchor(
                        'admin/data_barang/edit/' . $brg->id_gdg,
                        '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>'
                    ) ?>

                </td>
                <td>
                    <?php echo anchor(
                        'admin/data_barang/hapus/' . $brg->id_gdg,
                        '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'
                    ) ?>

                </td>

            </tr>
        <?php endforeach ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT GEDUNG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Gedung</label>
                        <input type="text" name="nama_gdg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat_gdg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pemilik</label>
                        <input type="text" name="pemilik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Luas Gedung</label>
                        <input type="text" name="luas_gdg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Luas Tanah Gedung</label>
                        <input type="text" name="luas_tanah_gdg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="text" name="kapasitas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Denah</label>
                        <input type="file" name="denah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>