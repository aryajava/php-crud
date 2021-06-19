<div class="row mt-3">
    <div class="col-6 mx-auto">
        <?php Flasher::flash(); ?>
    </div>
</div>
<div class="row">
    <div class="col-6 mx-auto">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header fs-4 bg-primary text-white">Tambah Barang</div>
            <div class="card-body">
                <form action="http://localhost/php-crud/barang/ubah-barang" method="POST">
                    <input type="hidden" class="form-control-plaintext mb-3" name="id" readonly required value="<?= $barang['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="kode" readonly required placeholder="Kode Barang" value="<?= $barang['kdbarang']; ?>">
                        <label for="kode">Kode Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Barang" value="<?= $barang['nmbarang']; ?>">
                        <label for="nama">Nama Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="spek" placeholder="Spesifikasi Barang" value="<?= $barang['spesifikasi']; ?>">
                        <label for="spek">Spesifikasi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="seri" placeholder="No Seri Barang" value="<?= $barang['noseri']; ?>">
                        <label for="seri">No. Seri Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Barang" value="<?= $barang['lokasi']; ?>">
                        <label for="lokasi">Lokasi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="kondisi" placeholder="Kondisi Barang" value="<?= $barang['kondisi']; ?>">
                        <label for="kondisi">Kondisi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="row">
                            <div class="col d-grid gap-2">
                                <a href="http://localhost/php-crud/barang" class="btn btn-primary">Kembali</a>
                            </div>
                            <div class="col d-grid gap-2">
                                <button type="submit" class="btn btn-success">Ubah Data Barang</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>