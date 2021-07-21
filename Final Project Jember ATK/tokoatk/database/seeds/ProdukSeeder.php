<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama' => 'Pulpen Snowman',
            'harga' => '29800',
            'harga_nameset' => '2000',
            'kategori_id' => 1,
            'jenis' => 'Pulpen Tulis',
            'berat' => '1',
            'gambar' => 'snowman.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pulpen Standard',
            'harga' => '58000',
            'harga_nameset' => '5000',
            'kategori_id' => 1,
            'jenis' => 'Pulpen Tulis',
            'berat' => '1',
            'gambar' => 'standard.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pulpen Pilot',
            'harga' => '29800',
            'harga_nameset' => '2000',
            'kategori_id' => 1,
            'jenis' => 'Pulpen Tulis',
            'berat' => '1',
            'gambar' => 'pilot.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Kertas HVS Paper One',
            'harga' => '65000',
            'harga_nameset' => '500',
            'kategori_id' => 2,
            'jenis' => 'Kertas Tulis',
            'berat' => '7',
            'gambar' => 'hvs.png'
        ]);
        DB::table('produks')->insert([
        	'nama' => 'Kertas Carton',
            'harga' => '23500',
            'harga_nameset' => '250',
            'kategori_id' => 2,
            'jenis' => 'Kertas Tulis',
            'berat' => '150',
            'gambar' => 'carton.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Kertas Buffalo',
            'harga' => '34000',
            'harga_nameset' => '650',
            'kategori_id' => 2,
            'jenis' => 'Kertas Tulis',
            'berat' => '230',
            'gambar' => 'buffalo.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Kertas NCR',
            'harga' => '60000',
            'harga_nameset' => '1000',
            'kategori_id' => 2,
            'jenis' => 'Kertas Tulis',
            'berat' => '300',
            'gambar' => 'ncr.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pensil 2B',
            'harga' => '45000',
            'harga_nameset' => '1000',
            'kategori_id' => 3,
            'jenis' => 'Pensil Tulis',
            'berat' => '350',
            'gambar' => '2b.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pensil Mekanik',
            'harga' => '55000',
            'harga_nameset' => '2500',
            'kategori_id' => 3,
            'jenis' => 'Pensil Tulis',
            'berat' => '500',
            'gambar' => 'pensilmekanik.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pensil Warna Steadler 12',
            'harga' => '29000',
            'harga_nameset' => '29.000',
            'kategori_id' => 3,
            'jenis' => 'Pensil Tulis',
            'berat' => '350',
            'gambar' => 'pensilwarna.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Buku Sinar Dunia',
            'harga' => '35000',
            'harga_nameset' => '3000',
            'kategori_id' => 4,
            'jenis' => 'Buku Tulis',
            'berat' => '500',
            'gambar' => 'sinardunia.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Buku Kiki',
            'harga' => '40000',
            'harga_nameset' => '3500',
            'kategori_id' => 4,
            'jenis' => 'Buku Tulis',
            'berat' => '500',
            'gambar' => 'kiky.png'
        ]);
    }
}
