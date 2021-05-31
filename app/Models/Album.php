<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // use HasFactory;

    /**
     * テーブルの主キー
     *
     * @var integer
     */
    protected $primaryKey = 'AlbumId';

    /**
     * Albumを出したArtistを取得
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'ArtistId', 'ArtistId');
    }
}
