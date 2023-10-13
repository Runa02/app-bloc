<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
    use HasFactory;
    protected $fillable = ([
        'judul',
        'sumber',
        'kategori_id',
        'image',
        'konten',
    ]);

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
