<?php

$id = $_GET['id'];

$sql = $koneksi->query("select * from tb_barang where id='$id'");

$tampil = $sql->fetch_assoc();

$divisi = $tampil['divisi'];
?>

<div class="panel panel-default">
    <div class="panel-heading">
        Ubah Data
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">

                <form method="POST">
                    <div class="form-group">
                        <label>Nip</label>
                        <input class="form-control" name="nip" value="<?php echo $tampil['nip'] ?>" readonly />

                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Barang</label>
                        <input class="form-control" name="barang" value="<?php echo $tampil['barang'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Pengirim</label>
                        <input class="form-control" name="pengirim" value="<?php echo $tampil['pengirim'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Tanggal Datang</label>
                        <input class="form-control" name="tanggal" type="date" value="<?php echo $tampil['tgl_datang'] ?>" />

                    </div>

                    <div class="form-group">
                        <label>Divisi</label>
                        <select class="form-control" name="divisi">
                            <option value="it">Informasi Teknologi</option>
                            <option value="t">Teknik</option>

                        </select>
                    </div>


                    <div>
                        <input type="hidden" name="id" value=<?= $id ?>>
                        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

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


    $sql = $koneksi->query("update tb_barang set nip='$nip', nama='$nama', barang='$barang',
      pengirim='$pengirim', tgl_datang='$tgl_datang', divisi='$divisi' where id='$id'");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Ubah Berhasil Disimpan");
            window.location.href = "?page=barang&surat";
        </script>
<?php
    }
}

?>