<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected  $genres= [
        [

            'idem' => 1.2,
            'name' => 'laputa castel in the sky',
            'description' => 'Pazu, seorang insinyur magang menemukan seorang gadis muda, 
                Sheeta melayang turun dari langit mengenakan liontin bercahaya.'
    
        ],
        [

            'idem' => 1.3,
            'name' => 'my neighbor totoro',
            'description' => 'Dua gadis muda, Satsuki dan Mei, telah pindah bersama ayah mereka ke rumah baru di negara itu,
             sementara ibu mereka pulih dari sakit di rumah sakit terdekat.'
    
        ],
        [

            'idem' => 1.4,
            'name' => 'Kikis delivery service',
            'description' => 'Sudah menjadi tradisi bagi semua penyihir muda untuk
             meninggalkan keluarga mereka pada malam bulan purnama untuk mempelajari keahlian mereka.'
    
        ],
        [

            'idem' => 1.5,
            'name' => 'Only Yesterday',
            'description' => 'Taeko, seorang wanita lajang yang bekerja di meja kerja di Tokyo, 
            telah mencapai titik dalam hidupnya di mana dia harus melepaskan diri dari pekerjaannya, keluarganya dan yang terpenting, kehidupan kota besar.'
    
        ],
        [

            'idem' => 1.6,
            'name' => 'porco rosso',
            'description' => 'Perang Dunia I telah berakhir, dan perdamaian kembali berkuasa.
             Penerbang dari seluruh dunia mengelilingi Laut Adriatik, tertarik untuk menangkap kembali romantisme penerbangan yang hilang selama perang.'
    
        ],
        
      ];
    
      public function getAllMovies()
      {
        return $this->genres;
      }
}
