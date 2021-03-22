<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">

                <form method="POST">
                    <div class="form-group">
                        <label>Nama/NIP</label>
                        <select class="form-control" name="nama">
                            <?php
                            $sql = $koneksi->query("select * from tb_anggota order by nip");
                            while ($data = $sql->fetch_assoc()) {
                                echo "<option value='$data[nip].$data[nama]'>$data[nip] | $data[nama]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Barang</label>
                        <input class="form-control" name="barang" />

                    </div>

                    <div class="form-group">
                        <label>Pengirim</label>
                        <input class="form-control" name="pengirim" />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Datang</label>
                        <input class="form-control" name="tgl_datang" type="date" />

                    </div>

                    <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi">
                            <option value="it">Informasi Teknologi</option>
                            <option value="tnk">Teknik</option>
                            <option value="kom">Komersial</option>
                            <option value="keu">Keuangan</option>
                            <option value="qrm">Menegement Resiko & Mutu</option>
                            <option value="tpkb">TPKB</option>
                            <option value="trs">Trisakti</option>
                            <option value="hsse">HSSE</option>
                            <option value="umum">SDM & Umum</option>

                        </select>
                    </div>


                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
            </div>
        </div>

        </form>
    </div>
</div>
</div>
</div>

<?php

$nip = isset($_POST['nip']) ? $_POST['nip'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$pecah_nama = explode(".", $nama);
$nip = $pecah_nama[0];
$nama = $pecah_nama[1];
$barang = isset($_POST['barang']) ? $_POST['barang'] : '';
$pengirim = isset($_POST['pengirim']) ? $_POST['pengirim'] : '';
$tgl_datang = isset($_POST['tgl_datang']) ? $_POST['tgl_datang'] : '';
$divisi = isset($_POST['divisi']) ? $_POST['divisi'] : '';

$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';


if ($simpan) {

    $sql = $koneksi->query("insert into tb_barang (nip, nama, barang, pengirim, tgl_datang, divisi)value('$nip', '$nama', '$barang', '$pengirim', '$tgl_datang', '$divisi')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "?page=barang&surat";
        </script>
<?php
    }
}

?>