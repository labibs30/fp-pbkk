<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Gedung</th>
            <th>Alamat</th>
            <th>Harga</th>
        </tr>

        <?php
        $no = 1;
        $total = 0;
        foreach ($this->cart->contents() as $items) :
            $total += $items['price'];
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['alamat'] ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
            </tr>
            <tr></tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">
            <td align="right">
                <?php echo number_format($total, 0, ',', '.') ?>
            </td>
            </td>
        </tr>
    </table>

    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Pembelian</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>