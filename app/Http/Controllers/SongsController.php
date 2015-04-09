<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Song;
use Illuminate\Http\Request;

class SongsController extends Controller {

	private $song;

	public function __construct(Song $song)
	{
		$this->song = $song;
	}

	public function index()
	{
		$songs = $this->song->latest()->get();

		return view('songs.index', compact('songs'));
	}

	public function show(Song $song)
	{
		//$song = $this->song->whereSlug($slug)->first();

		return view('songs.show', compact('song'));
	}

	public function create()
	{
		return view('songs.create');
	}

	public function store(Request $request, Song $song)
	{
		$song->create($request->all());

		return redirect()->route('songs.index');
	}

	public function edit(Song $song)
	{
		//$song = $this->song->whereSlug($slug)->first();

		return view('songs.edit', compact('song'));
	}

	public function update(Song $song, Request $request)
	{
		//$song = $this->song->whereSlug($slug)->first();

		$song->fill($request->input())->save();
		//$song->fill(['title' => $request->get('title')])->save();

		//return redirect('songs');
		return redirect()->route('songs.index');
	}

}
