<?php
if (!session_id()) session_start();

require_once __DIR__ . '/controllers/Barang.php';
require_once __DIR__ . '/controllers/Tentangku.php';
require_once __DIR__ . '/models/BarangModel.php';
require_once __DIR__ . '/addons/Flasher.php';

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
$barang = new Barang();
$tentangku = new Tentangku();

if ($url == '/') {
    return $barang->index();
} elseif ($url[0] == 'barang') {
    $url[]++; // berjam2 nyelesaiin warning, eh tambah ini lgs ilang warning nya :')
    if ($url[1] == 'tambah') {
        return $barang->add();
    } elseif ($url[1] == 'tambah-barang') {
        return $barang->addBarang();
    } elseif ($url[1] == 'ubah') {
        return $barang->edit();
    } elseif ($url[1] == 'ubah-barang') {
        return $barang->editBarang();
    } elseif ($url[1] == 'hapus') {
        return $barang->remove();
    } elseif ($url[1] == 'cari') {
        return $barang->search();
    }
    return $barang->index();
} elseif ($url[0] == 'tentangku') {
    return $tentangku->index();
}
