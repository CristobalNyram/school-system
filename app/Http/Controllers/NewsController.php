<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =News::latest()->where('status','2')->get();

        $variables = [
            'menu'=>"news",
            'news'=> $news,    
        ];
        return view('news.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $variables = [
            'menu'=>"news",        
        ];
        return view('news.create')->with($variables);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $new= new News();
        $name_image = $request->file('image_url')->getClientOriginalName();
        $date_image= Carbon::now()->timestamp;
        $request->file('image_url')->store('public/images/');
        $new->image_url=$date_image.$name_image;
        $new->title=$request->title;
        $new->content=$request->content;     
        $new->status='2';
        $new->user_id=Auth::id();
      
        if($new->save()===true)
        {
          return back()->with('success','Se ha agregado exitosamente la noticia.');
           
        }
        else
        {
        
        return back()->withErrors('No se pudo agregar la noticia.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $new)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
