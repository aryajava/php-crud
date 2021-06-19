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
                <form action="http://localhost/php-crud/barang/tambah-barang" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Barang">
                        <label for="kode">Kode Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                        <label for="nama">Nama Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="spek" name="spek" placeholder="Spesifikasi Barang">
                        <label for="spek">Spesifikasi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="seri" name="seri" placeholder="No Seri Barang">
                        <label for="seri">No. Seri Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi Barang">
                        <label for="lokasi">Lokasi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kondisi" name="kondisi" placeholder="Kondisi Barang">
                        <label for="kondisi">Kondisi Barang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <div class="row">
                            <div class="col d-grid gap-2">
                                <a href="http://localhost/php-crud/barang" class="btn btn-primary">Kembali</a>
                            </div>
                            <div class="col d-grid gap-2">
                                <button type="submit" class="btn btn-success">Tambahkan Barang</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>