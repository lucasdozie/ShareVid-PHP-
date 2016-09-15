<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\videoRequest;

use todoparrot\video;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Input;


class videosController extends Controller
{
    //
    public function index()
	{
		$videos = Video::all();
 
		return view('videos.index', compact('videos'));
	}

	public function showall()
	{
		$videos = Video::all();
 
		return view('videos.index', compact('videos'));
	}
 
	public function add(Request $request) {
 
		//Request $request
		
		/*$video = new video(array(
		'name' => $request->get('filename'),
		'category' => $request->get('category')
		));
		$video->save();

		$imageName = $video->id.'.'.$request->file('image')->getClientOriginalExtension();

		$request->file('image')->move(base_path().'/public/images/vid',$imageName);

		return \Redirect::route('/',array($video->id))->with('message', 'Image added!');*/

		$video = new video;
		$video->title = Input::get('filename');
		$video->category = Input::get('category');
		if(Input::hasFile('image')){
			$file=Input::file('image');
			$file->move(public_path().'/images/', $file->getClientOriginalName());
			
			$video->name = $file->getClientOriginalName();
			$video->size = $file->getClientsize();
			$video->type = $file->getClientMimeType();
		}
		$video->save();

		return \Redirect::route('video.show',array($video->id))->with('message', 'Image added!');
	}
}
