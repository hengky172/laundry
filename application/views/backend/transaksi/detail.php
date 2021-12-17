<style>
    td {
        font-size: 12px;
        text-transform: capitalize;
    }

    h3 {
        font-size: 16px;
        color: #009d63;
    }

    hr {
        border: 0;
        border-top: 2px solid black;
    }

    .tabel {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
    }

    th {
        font-size: 12px;
    }

    p {
        font-size: 12px;
    }
</style>

<body>
    <table>
        <tr>
            <td width="400">
                <h3>MyLaundry</h3>
            </td>
            <td>
                <h3>Invoice</h3>
            </td>
        </tr>
        <tr>
            <td>Alamat : Jakarta</td>
        </tr>
        <tr>
            <td>WA : 082185595558</td>
        </tr>
        <tr>
            <td>Email : Clean@gmail.com</td>
        </tr>
    </table>
    <hr><br>
    <table>
        <tr>
            <td width="80" style="font-weight: bold;">Konsumen</td>
            <td width="250">
                <?= $transaksi['nama_konsumen'] ?>
            </td>
            <td width="80" style="font-weight: bold;">Kode Transaksi</td>
            <td style="text-transform: uppercase;">
                <?= $transaksi['kode_transaksi']; ?>
            </td>
        </tr>
        <tr>
            <td width="80"></td>
            <td width="250">
                <?= $transaksi['alamat_konsumen'] ?>
            </td>
            <td width="80" style="font-weight: bold;">Tanggal Masuk</td>
            <td>
                <?= $transaksi['tgl_masuk']; ?>
            </td>
        </tr>
        <tr>
            <td width="80"></td>
            <td width="250">
                <?= $transaksi['no_telp'] ?>
            </td>
            <?php
            if ($transaksi['tgl_ambil'] != 0) { ?>
                <td width="80" style="font-weight: bold;">Tanggal Ambil</td>
                <td>
                    <?= $transaksi['tgl_ambil']; ?>
                </td>
            <?php } else { ?>
                <td width="80" style="font-weight: bold;">Tanggal Ambil</td>
                <td style="color: red;">
                    -
                </td>
            <?php } ?>
        </tr>
    </table>
    <br> <br>
    <table width="500" class="tabel">
        <tr>
            <th class="tabel">Paket Laundry</th>
            <th class="tabel">Berat /Kg</th>
            <th class="tabel">Harga</th>
            <th class="tabel">Sub Total</th>
        </tr>
        <tr>
            <td class="tabel">
                <?= $transaksi['nama_paket']; ?>
            </td>
            <td class="tabel">
                <?= $transaksi['berat']; ?>
            </td>
            <td class="tabel">
                <?= "Rp. " . number_format($transaksi['harga_paket'], 0, '.', '.'); ?>
            </td>
            <td class="tabel">
                <?= "Rp. " . number_format($transaksi['grand_total'], 0, '.', '.'); ?>
            </td>
        </tr>
        <tr>
            <td class="tabel" colspan="3" style="text-align:right; font-weight: bold; font-size:14px;">
                Grand Total
            </td>
            <td class="tabel" style="font-weight: bold; font-size:14px;">
                <?= "Rp. " . number_format($transaksi['grand_total'], 0, '.', '.'); ?>
            </td>
        </tr>
    </table>
    <div>
        <h5>Keterangan</h5>
        <p>1. Pengambilan Cucian Wajib Membawa Nota</p>
        <p>2. Hitung dan Periksa Sebelum Pergi</p>
        <p>3. Klaim Cucian Hilang Tidak Ditanggapi Setelah Meninggalkan Laundry</p>
    </div>

</body>