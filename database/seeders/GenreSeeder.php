<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'laputa castel in the sky',
            'description' => '
            Pazu, seorang insinyur magang menemukan seorang gadis muda, Sheeta melayang turun dari langit mengenakan liontin bercahaya.'
        ]);
        Genre::create([
            'name' => 'my neighbor totoro',
            'description' => 'Dua gadis muda, Satsuki dan Mei,
             telah pindah bersama ayah mereka ke rumah baru di negara itu, sementara ibu mereka pulih dari sakit di rumah sakit terdekat.'
        ]);
        Genre::create([
            'name' => 'Kikis delivery service',
            'description' => 'Sudah menjadi tradisi bagi semua penyihir muda untuk meninggalkan keluarga mereka pada malam bulan purnama untuk mempelajari keahlian mereka.'
        ]);
        Genre::create([
            'name' => 'Only Yesterday',
            'description' => '
            Taeko, seorang wanita lajang yang bekerja di meja kerja di Tokyo, telah mencapai titik dalam hidupnya di mana dia harus melepaskan diri dari pekerjaannya, 
            keluarganya dan yang terpenting, kehidupan kota besar.'
        ]);
        Genre::create([
            'name' => 'Horor',
            'description' => 'perang Dunia I telah berakhir, dan perdamaian kembali berkuasa. Penerbang dari seluruh dunia mengelilingi Laut Adriatik, tertarik untuk menangkap kembali romantisme penerbangan yang hilang selama perang.'
        ]);
    }
}
