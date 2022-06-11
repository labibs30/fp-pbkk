<div class="container-fluid">
    <h4>Detail Pesanan</h4>
    <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id ?></div>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nama Gedung</th>
            <th>Tanggal Booking</th>
            <th>Harga</th>
        </tr>
        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $total += $psn->harga;
        ?>
            <tr>
                <td><?php echo $psn->id_gdg ?></td>
                <td><?php echo $psn->nama_gdg ?></td>
                <td><?php echo $psn->tgl_booking ?></td>
                <td><?php echo $psn->harga ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="3">
            <td align="right">
                <?php echo number_format($total, 0, ',', '.') ?>
            </td>
            </td>
        </tr>

    </table>

</div>