<?php

namespace App\Repositories\Artist;

interface ArtistRepositoryInterface
{
    /**
     * Nameで1レコードを取得
     *
     * @var string $name
     * @return object
     */
    public function getFirstRecordByName($name);

    /**
     * id でレコード取得
     * 
     * @var integer $id
     * @return object
     */
    public function find($id);

    /**
     * レコード全取得
     * 
     * @return array(object)
     */
    public function all();
}