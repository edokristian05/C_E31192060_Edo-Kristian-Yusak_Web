<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Pulpen',
        	'kategori' => 'Jenis_Pulpen',
        	'gambar' => '',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Kertas',
        	'kategori' => 'Jenis_Kertas',
        	'gambar' => '',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Pensil',
        	'kategori' => 'Jenis_Pensil',
        	'gambar' => '',
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Buku',
        	'kategori' => 'Jenis_Buku',
        	'gambar' => '',
        ]);
    }
}
