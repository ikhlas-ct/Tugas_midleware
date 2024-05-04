<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conditions = ['baru', 'bekas', 'bekas'];
        for ($i = 0; $i < 12; $i++) {
            DB::table('kucingkeren')->insert([
                'gambar' => 'https://cdn.pixabay.com/photo/2024/02/28/07/42/european-shorthair-8601492_1280.jpg',
                'nama' => 'kucing' . $i,
                'umur' => rand(0, 20),
                'berat' => rand(2, 20),
                'harga' => rand(1000, 20000),
                'stock' => rand(0, 20),
                'kondisi' => $conditions[rand(0, 2)],
                'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero magnam dolore aliquid qui praesentium reiciendis modi dolor quia iure, eum ullam error quasi aut totam, natus ipsam amet? Nam, reprehenderit.'
                
            ]);
        }
    }
}
