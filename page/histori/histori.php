<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Histori Barang & Surat
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Barang</th>
                                <th>Pengirim</th>
                                <th>Tanggal Datang</th>
                                <th>Tanggal Kembali</th>
                                <th>Divisi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;

                            $sql = $koneksi->query("select * from tb_histori");

                            while ($data = $sql->fetch_assoc()) {

                                $divisi = convert_divisi($data['divisi']);
                            ?>

                                </tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nip']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['barang']; ?></td>
                                <td><?php echo $data['pengirim']; ?></td>
                                <td><?php echo $data['tgl_datang']; ?></td>
                                <td><?php echo $data['tgl_kembali']; ?></td>
                                <td><?php echo $divisi; ?></td>

                                </tr>


                            <?php } ?>
                        </tbody>


                </div>
            </div>
        </div>
    </div>
</div>