<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
    * @param object $user
    */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 名前で1レコードを取得
     *
     * @var $name
     * @return object
     */
    public function getFirstRecordByName($name)
    {
        return $this->user->where('name', '=', $name)->first();
    }

    /**
     * idでレコード取得
     * 
     * @var $id
     * @return object
     */
    public function find($id)
    {
        return $this->user->find($id);
    }

    /**
     * レコード全取得
     * 
     * @return array(object)
     */
    public function get()
    {
        return $this->user->get();
    }
}