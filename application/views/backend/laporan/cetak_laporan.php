<style>
    th {
        font-size: 14px;
        background-color: #2ECC71;
    }

    .tabel {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<body>
    <table width="750" border="0">
        <tr>
            <td style="text-align: center; font-size:24px; font-weight:bold;">Laporan Transaksi</td>
        </tr>
    </table>
    <table width="750" border="0">
        <tr>
            <td style="text-align: center; font-size:16px;">Dari Tanggal <?= mediumdate_indo($this->session->userdata('tanggal_mulai')); ?> Sampai Tanggal <?= mediumdate_indo($this->session->userdata('tanggal_akhir')); ?></td>
        </tr>
    </table>
    <br><br>
    <table width="750" class="tabel">
        <tr>
            <th class="tabel">Tanggal Masuk</th>
            <th class="tabel">Kode Transaksi</th>
            <th class="tabel">Konsumen</th>
            <th class="tabel">Paket</th>
            <th class="tabel">Berat(Kg)</th>
            <th class="tabel">Grand Total</th>
            <th class="tabel">Status</th>
        </tr>
        <?php foreach ($laporan as $row) { ?>
            <tr>
                <td class="tabel"><?= mediumdate_indo($row->tgl_masuk) ?></td>
                <td class="tabel"><?= $row->kode_transaksi; ?></td>
                <td class="tabel"><?= $row->nama_konsumen; ?></td>
                <td class="tabel"><?= $row->nama_paket; ?></td>
                <td class="tabel"><?= $row->berat; ?></td>
                <td class="tabel"><?= "Rp. " . number_format($row->grand_total, 0, '.', '.'); ?></td>
                <td class="tabel"><?= $row->status; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>