<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Repositories\Artist\ArtistRepositoryInterface;

class ArtistController extends Controller
{
    protected $artistRepo;

    public function __construct(ArtistRepositoryInterface $artistRepo)
    {
        $this->artistRepo = $artistRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = $this->artistRepo->all();
        $artistsList = [];
        foreach ($artists as $artist) {
            $artistList = (object) array(
                "Name" => $artist->Name,
                "Album" => $artist->album()->get()->toArray()
            );
            array_push($artistsList, $artistList);
        }
        // dump($artistsList);
        // return view('artist/index');
        return view('artist/index', compact('artistsList'));
    }
}
