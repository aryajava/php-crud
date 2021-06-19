        <div class="row my-3">
            <div class="col-6">
                <a href="http://localhost/php-crud/barang/tambah" class="btn btn-primary">Tambah Barang</a>
            </div>
            <div class="col-6">
                <form action="http://localhost/php-crud/barang/cari" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Barang.." name="keyword" value="" autocomplete="off">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Spesifikasi</th>
                            <th scope="col">No Seri</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($listBarang) : foreach ($listBarang as $value) : ?>
                                <tr>
                                    <th scope="row"><?= $value['kdbarang']; ?></th>
                                    <td><?= $value['nmbarang']; ?></td>
                                    <td><?= $value['spesifikasi']; ?></td>
                                    <td><?= $value['noseri']; ?></td>
                                    <td><?= $value['lokasi']; ?></td>
                                    <td><?= $value['kondisi']; ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col d-grid gap-2 mx-auto">
                                                <a href="http://localhost/php-crud/barang/ubah?id=<?= $value['id']; ?>&&kdbarang=<?= $value['kdbarang']; ?>" class="btn btn-sm btn-success">UBAH</a>
                                            </div>
                                            <div class="col d-grid gap-2">
                                                <a href="http://localhost/php-crud/barang/hapus?id=<?= $value['id']; ?>&&kdbarang=<?= $value['kdbarang']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data Barang | <?= $value['kdbarang'] ?> ?');">HAPUS</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;
                        else : ?>
                            <tr>
                                <td colspan="7" class="text-center">Data tidak ada!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>