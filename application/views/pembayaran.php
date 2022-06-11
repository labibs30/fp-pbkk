<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['price'];
                    }
                    echo "Total : Rp. " . number_format($grand_total, 0, ',', '.');

                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label><br>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label><br>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda">
                </div>
                <div class="form-group">
                    <label>Tanggal Booking</label><br>
                    <input type="date" name="tanggal" placeholder="tanggal booking yang diinginkan">
                </div>
                <div class="form-group">
                    <label>No Lengkap</label><br>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda">
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label><br>
                    <select>
                        <option>BSI - XXXXXX</option>
                        <option>BNI - XXXXXX</option>
                        <option>Mandiri - XXXXXX</option>
                        <option>BRI - XXXXXX</option>
                        <option>BCA - XXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Booking</button>
            </form>
        <?php
                } else {
                    echo "Keranjang Belanja Anda Masih Kosong";
                }
        ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>