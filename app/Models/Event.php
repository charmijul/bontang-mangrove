<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'excerpt',
    //     'body',
    //     'image',
    //     'created_at',
    //     'updated_at'
    // ];
    public $table = 'events';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    
    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
