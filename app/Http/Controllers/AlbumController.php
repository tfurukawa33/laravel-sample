<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Repositories\Album\AlbumRepositoryInterface;

class AlbumController extends Controller
{
    protected $albumRepo;

    public function __construct(AlbumRepositoryInterface $albumRepo)
    {
        $this->albumRepo = $albumRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = $this->albumRepo->all();
        foreach ($albums as $album) {
            dump($album->Title);
        }
        return view('album/index');
    }

}
