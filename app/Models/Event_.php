<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Event extends Model
// {
//     use HasFactory;
// }

class Event
{
    private static $event_posts = [
        [
            "title" => "Judul Event Kegiatan Pertama",
            "slug" => "judul-event-kegiatan-pertama",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem necessitatibus iste voluptate praesentium quidem natus
            fugit sapiente, minus cum? Dolores autem illum cupiditate suscipit doloremque facere quaerat soluta nesciunt, illo
            sapiente nostrum culpa quisquam, ea, nisi similique beatae reiciendis blanditiis? Voluptas possimus explicabo expedita.
            Est, quisquam exercitationem illo accusantium nobis velit, cum dignissimos error unde consectetur deleniti, laboriosam
            pariatur autem alias modi necessitatibus facere quidem culpa quod eligendi sunt reiciendis optio esse! Ipsa est at fugit
            perferendis! Facilis, totam ipsum."
        ],
        [
            "title" => "Judul Event Kegiatan Kedua",
            "slug" => "judul-event-kegiatan-kedua",
            "description" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro itaque similique numquam, ab dicta a, vero, vel ipsum
            aut voluptate recusandae fuga? Dolore nostrum nihil iure laborum cum alias sunt dicta, fuga sequi delectus consequuntur
            nemo id commodi excepturi sed explicabo rem repellendus eaque assumenda laudantium maxime, illo ipsam distinctio quae?
            Dolorum nostrum non voluptate inventore, voluptatibus rem exercitationem possimus hic magnam repellendus nobis
            dignissimos suscipit illo libero sed tempore. Voluptatibus pariatur dignissimos excepturi omnis et, voluptatem, itaque
            maiores iure asperiores vel dolore natus porro? Saepe est accusantium porro eaque atque accusamus cumque, necessitatibus
            veritatis delectus ratione beatae ipsam voluptatibus repellat quaerat aliquam, ut sed alias reiciendis? Autem libero
            culpa inventore nam praesentium, quos labore voluptatibus quibusdam officia dignissimos voluptates."
        ]
    ];

    public static function all(){
        return collect(self::$event_posts);
    }
    
    public static function find($slug){        
        $event = static::all();
        return $event->firstWhere('slug', $slug);
    }
}