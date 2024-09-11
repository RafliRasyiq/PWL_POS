<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Supplier 1: PT Elektronik Jaya (handled by user 1: admin)
            [
                'stok_id' => 1,
                'supplier_id' => 1,
                'barang_id' => 1, // Smartphone
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 2,
                'supplier_id' => 1,
                'barang_id' => 2, // Laptop
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 3,
                'supplier_id' => 1,
                'barang_id' => 3, // Smart TV
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 20,
            ],
            [
                'stok_id' => 4,
                'supplier_id' => 1,
                'barang_id' => 4, // Tablet
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 5,
                'supplier_id' => 1,
                'barang_id' => 5, // Smartwatch
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 60,
            ],
        
            // Supplier 2: CV Pakaian Nusantara (handled by user 2: manager)
            [
                'stok_id' => 6,
                'supplier_id' => 2,
                'barang_id' => 6, // Kemeja Pria
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 7,
                'supplier_id' => 2,
                'barang_id' => 7, // Celana Jeans
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 120,
            ],
            [
                'stok_id' => 8,
                'supplier_id' => 2,
                'barang_id' => 8, // Jaket Kulit
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 9,
                'supplier_id' => 2,
                'barang_id' => 9, // Kaos Oblong
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 10,
                'supplier_id' => 2,
                'barang_id' => 10, // Sepatu Sneaker
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 80,
            ],
        
            // Supplier 3: UD Makanan Sehat (handled by user 3: staff)
            [
                'stok_id' => 11,
                'supplier_id' => 3,
                'barang_id' => 11, // Susu UHT 1L
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 300,
            ],
            [
                'stok_id' => 12,
                'supplier_id' => 3,
                'barang_id' => 12, // Minyak Goreng 2L
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 250,
            ],
            [
                'stok_id' => 13,
                'supplier_id' => 3,
                'barang_id' => 13, // Beras Premium 5Kg
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 14,
                'supplier_id' => 3,
                'barang_id' => 14, // Mie Instan Goreng
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 1000,
            ],
            [
                'stok_id' => 15,
                'supplier_id' => 3,
                'barang_id' => 15, // Air Mineral 600ml
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 500,
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}