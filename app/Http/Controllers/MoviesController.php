<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Requests\MovieRequest;
use todoparrot\Movie;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Input;

use todoparrot\Http\Controllers\Session;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$movies = Movie::all();
        $movies = Movie::orderBy('id', 'DESC')->get();
        /*$description = $movies->description;
        $data['description'] = substr($description,200);*/

        return view('movies.index')
                        ->with('movies', $movies);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $movies = Movie::all();
        $data['userTitle'] = "User Information";

        return view('movies.upload')
                        ->with('movies', $movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_movie = new movie;
        $new_movie->title = Input::get('title');
        $new_movie->category = Input::get('category');
        $new_movie->rating = Input::get('rating');
        $new_movie->description = Input::get('description');
        $new_movie->link = Input::get('link');

        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/movieapp/images/', $file->getClientOriginalName());
            
            $new_movie->image_name = $file->getClientOriginalName();
            $new_movie->image_size = $file->getClientsize();
            $new_movie->image_type = $file->getClientMimeType();
        }
        if(Input::hasFile('video')){
            $file=Input::file('video');
            $file->move(public_path().'/movieapp/videos/', $file->getClientOriginalName());
            
            $new_movie->video_name = $file->getClientOriginalName();
            $new_movie->video_size = $file->getClientsize();
            $new_movie->video_type = $file->getClientMimeType();
        }else{
            echo "The system is not seeing video field";
        }
        $new_movie->save();
        return \Redirect::route('movies.create')
                           ->with('message', 'Your Movie has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = movie::findOrFail($id);
        return view('movies.show')->withmovie($movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::findOrFail($id);
        return view('movies.edit')->with("movie", $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_movie = movie::findOrFail($id);
        $update_movie->title = Input::get('title');
        $update_movie->category = Input::get('category');
        $update_movie->rating = Input::get('rating');
        $update_movie->description = Input::get('description');
        $update_movie->link = Input::get('link');

        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path().'/movieapp/images/', $file->getClientOriginalName());
            
            $update_movie->image_name = $file->getClientOriginalName();
            $update_movie->image_size = $file->getClientsize();
            $update_movie->image_type = $file->getClientMimeType();
        }elseif(Input::hasFile('video')){
            $file=Input::file('video');
            $file->move(public_path().'/movieapp/videos/', $file->getClientOriginalName());
            
            $update_movie->video_name = $file->getClientOriginalName();
            $update_movie->video_size = $file->getClientsize();
            $update_movie->video_type = $file->getClientMimeType();
        }
        $update_movie->save();
        return \Redirect::route('movies.index')
                           ->with('message', 'Your Movie has been updated!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        movie::destroy($id);
        return \Redirect::route('movies.index')
                           ->with('message', 'Your Movie has been deleted!');
    }
}
