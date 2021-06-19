<?php

class BarangModel
{
    private $connection;

    function __construct()
    {
        $this->connection = new mysqli(
            'localhost',
            'root',
            '',
            'db_phpcrud'
        );
    }

    public function getBarang($id = null, $kdbarang = null)
    {
        if ($id && $kdbarang) {
            $query = "SELECT * FROM barang WHERE id ='$id' AND kdbarang = '$kdbarang'";

            $result = $this->connection->query($query);
            if ($result->num_rows === 0) {
                return false;
            } else {
                return $result->fetch_assoc();
            }
        } else {
            $query = "SELECT * FROM barang";

            $result = $this->connection->query($query);
            if ($result->num_rows === 0) {
                return false;
            } else {
                while ($row = $result->fetch_assoc()) {
                    $results[] = $row;
                }
                return $results;
            }
        }
    }
    public function insertBarang($data)
    {
        $kdbarang = $data['kode'];
        $nmbarang = $data['nama'];
        $spesifikasi = $data['spek'];
        $noseri = $data['seri'];
        $lokasi = $data['lokasi'];
        $kondisi = $data['kondisi'];

        $query = "INSERT INTO barang(kdbarang,nmbarang,spesifikasi,noseri,lokasi,kondisi) VALUES('$kdbarang','$nmbarang','$spesifikasi','$noseri','$lokasi','$kondisi')";
        // $query = "INSERT INTO barang VALUES('$kdbarang','$nmbarang','$spesifikasi','$noseri','$lokasi','$kondisi')";
        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
    public function editBarang($data)
    {
        $id = $data['id'];
        $kdbarang = $data['kode'];
        $nmbarang = $data['nama'];
        $spesifikasi = $data['spek'];
        $noseri = $data['seri'];
        $lokasi = $data['lokasi'];
        $kondisi = $data['kondisi'];

        $query = "UPDATE barang SET kdbarang = '$kdbarang',nmbarang = '$nmbarang',spesifikasi='$spesifikasi',noseri='$noseri',lokasi='$lokasi',kondisi='$kondisi' WHERE id='$id' AND kdbarang= '$kdbarang'";
        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
    public function deleteBarang($id, $kdbarang)
    {
        $query = "DELETE FROM barang WHERE id = '$id' AND kdbarang = '$kdbarang'";
        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        } else {
            return true;
        }
    }
    public function searchBarang($data)
    {
        $keyword = $data['keyword'];
        $query = "SELECT * FROM barang WHERE nmbarang LIKE '%$keyword%'";
        $result = $this->connection->query($query);
        if ($result->num_rows === 0) {
            return false;
        } else {
            while ($row = $result->fetch_assoc()) {
                $results[] = $row;
            }
            return $results;
        }
    }
}
