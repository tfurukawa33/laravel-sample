<?php

namespace App\Repositories\Artist;

use App\Models\Artist;

class ArtistRepository implements ArtistRepositoryInterface
{
    protected $artist;

    /**
    * @param object $artist
    */
    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

    /**
     * 名前で1レコードを取得
     *
     * @var $name
     * @return object
     */
    public function getFirstRecordByName($name)
    {
        return $this->artist->where('name', '=', $name)->first();
    }

    /**
     * idでレコード取得
     * 
     * @var $id
     * @return object
     */
    public function find($id)
    {
        return $this->artist->find($id);
    }

    /**
     * レコード全取得
     * 
     * @return array(object)
     */
    public function all()
    {
        return $this->artist->all();
    }
}