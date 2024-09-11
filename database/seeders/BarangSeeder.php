<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1: PT Elektronik Jaya (Kategori Elektronik)
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 2500000,
                'harga_jual' => 3000000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Laptop',
                'harga_beli' => 6000000,
                'harga_jual' => 7500000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Smart TV',
                'harga_beli' => 4500000,
                'harga_jual' => 5500000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Tablet',
                'harga_beli' => 1500000,
                'harga_jual' => 2000000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Smartwatch',
                'harga_beli' => 1000000,
                'harga_jual' => 1250000,
            ],
        
            // Supplier 2: CV Pakaian Nusantara (Kategori Pakaian)
            [
                'barang_id' => 6,
                'kategori_id' => 2,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kemeja Pria',
                'harga_beli' => 80000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 2,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 100000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 2,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Jaket Kulit',
                'harga_beli' => 300000,
                'harga_jual' => 450000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 2,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Kaos Oblong',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 2,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Sepatu Sneaker',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],
        
            // Supplier 3: UD Makanan Sehat (Kategori Makanan & Minuman)
            [
                'barang_id' => 11,
                'kategori_id' => 3,
                'barang_kode' => 'BRG011',
                'barang_nama' => 'Susu UHT 1L',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 12,
                'kategori_id' => 3,
                'barang_kode' => 'BRG012',
                'barang_nama' => 'Minyak Goreng 2L',
                'harga_beli' => 25000,
                'harga_jual' => 35000,
            ],
            [
                'barang_id' => 13,
                'kategori_id' => 3,
                'barang_kode' => 'BRG013',
                'barang_nama' => 'Beras Premium 5Kg',
                'harga_beli' => 60000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 14,
                'kategori_id' => 3,
                'barang_kode' => 'BRG014',
                'barang_nama' => 'Mie Instan Goreng',
                'harga_beli' => 2500,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 15,
                'kategori_id' => 3,
                'barang_kode' => 'BRG015',
                'barang_nama' => 'Air Mineral 600ml',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
