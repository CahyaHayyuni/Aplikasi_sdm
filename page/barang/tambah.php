<div class="panel panel-default">
    <div class="panel-heading">
        Tambah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">

                <form method="POST">
                    <div class="form-group">
                        <label>Nip</label>
                        <input class="form-control" name="nip" />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" />

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
<<<<<<< HEAD
                            <option value="it">Informasi Teknologi</option>
                            <option value="tnk">Teknik</option>
                            <option value="kom">Komersial</option>
                            <option value="keu">Keuangan</option>
                            <option value="qrm">Menegement Resiko & Mutu</option>
                            <option value="tpkb">TPKB</option>
                            <option value="trs">Trisakti</option>
                            <option value="hsse">HSSE</option>
                            <option value="umum">SDM & Umum</option>
=======
                            <option value="it">Informasin Teknologi</option>
                            <option value="t">Teknik</option>
>>>>>>> d3a2c8e0f65e209d3470badef6da8e488261d7f3

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