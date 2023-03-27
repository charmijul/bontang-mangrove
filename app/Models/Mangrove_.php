<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mangrove
{

    public static $mangroves = [
        [
            'nama' => 'Bakau Minyak',
            'latin' => 'Rhizophora apiculata',
            'ketinggian' => '3-15 m',
            'diameter_batang' => '10-25 cm',
            'manfaat' => 'Kayu dan akar bakau digunakan sebagai bahan bakar, bahan bangunan, dan obat-obatan tradisional.'
        ],
        [
            'nama' => 'Bakau Belangeran',
            'latin' => 'Sonneratia caseolaris',
            'ketinggian' => '3-10 m',
            'diameter_batang' => '10-20 cm',
            'manfaat' => 'Dapat dimanfaatkan sebagai bahan bangunan, kayu bakar, dan diolah menjadi arang. Buahnya dapat dijadikan bahan pewarna dan bahan pengawet makanan.'
        ],
        [
            'nama' => 'Bakau Seri',
            'latin' => 'Acanthus ilicifolius',
            'ketinggian' => '1-5 m',
            'diameter_batang' => '5-10 cm',
            'manfaat' => 'Daun dan akarnya digunakan sebagai obat tradisional. Daunnya juga dimanfaatkan sebagai bahan baku pembuatan pewarna alami.'
        ],
        [
            'nama' => 'Bakau Kurap',
            'latin' => 'Bruguiera sexangula',
            'ketinggian' => '4-6 m',
            'diameter_batang' => '10-25 cm',
            'manfaat' => 'Kayu bakau kurap biasanya digunakan sebagai bahan bangunan, kayu bakar, dan arang. Daunnya dimanfaatkan sebagai obat-obatan tradisional.'
        ],
        [
            'nama' => 'Bakau Lumpur',
            'latin' => 'Avicennia marina',
            'ketinggian' => '3-10 m',
            'diameter_batang' => '10-25 cm',
            'manfaat' => 'Kayu bakau lumpur dapat dimanfaatkan sebagai bahan bangunan, kayu bakar, dan arang. Kulit kayunya dimanfaatkan sebagai pewarna alami.'
        ],
    ];
    
    public static function all(){
        return collect(self::$mangroves);
    }
}
