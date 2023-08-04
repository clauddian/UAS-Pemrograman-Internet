<?php

namespace App\Models;
use CodeIgniter\Model;
class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "idbarang";
    protected $allowedFields = ["namabarang","jumlah"];
    protected $useTimestamps = false;
}