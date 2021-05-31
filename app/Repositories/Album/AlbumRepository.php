<?php

namespace App\Repositories\Album;

use App\Models\Album;

class AlbumRepository implements AlbumRepositoryInterface
{
    protected $album;

    /**
    * @param object $album
    */
    public function __construct(Album $album)
    {
        $this->album = $album;
    }

    /**
     * 名前で1レコードを取得
     *
     * @var $name
     * @return object
     */
    public function getFirstRecordByName($name)
    {
        return $this->album->where('name', '=', $name)->first();
    }

    /**
     * idでレコード取得
     * 
     * @var $id
     * @return object
     */
    public function find($id)
    {
        return $this->album->find($id);
    }

    /**
     * レコード全取得
     * 
     * @return array(object)
     */
    public function all()
    {
        return $this->album->all();
    }
}