<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    // use HasFactory;

    /**
     * テーブルの主キー
     *
     * @var integer
     */
    protected $primaryKey = 'ArtistId';

    /**
     * Artistの出したAlbumを取得
     */
    public function album()
    {
        return $this->hasMany(Album::class, 'ArtistId', 'ArtistId');
    }
}
