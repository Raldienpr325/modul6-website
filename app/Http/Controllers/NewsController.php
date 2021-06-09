<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Author;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $items = Author::pluck('name', 'id');
        $selectedID = 8;
        $list_author = Author::pluck('name', 'id');
        $dataNews = News::pluck('title', 'id');
        return view('admin.news.create', compact('list_author','dataNews', 'items','selectedID'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:100',
            'picture' => 'required|max:255',
            'content' => 'required|min:4',
            'is_published' => 'required|max:1',
            'user_id' => 'required|max:1',
            ]);
            //$news= News::find(1);
            //$news->author()->attach($request->input('author'));
            News::create($request->all());
            return redirect()->route('news.index');
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
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
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
        //
        $request->validate([
            'title' => 'required|max:100',
            'picture' => 'required|max:255',
            'content' => 'required|min:4',
            ]);
            News::findOrFail($id)->update([
                'name' => $request->name,
                'picture' => $request->picture,
                'content' => $request->content,
            ]);
            return redirect()->route('news.index');
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
        News::findOrFail($id)->delete();
        return redirect()->back();
    }
}