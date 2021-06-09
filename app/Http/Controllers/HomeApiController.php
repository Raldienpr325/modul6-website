<?php

namespace App\Http\Controllers;
use App\Models\News;
use JWTAuth;


class HomeApiController extends Controller
{
    //
    protected $user;
    protected $post;
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
        $this->post = News::class;
    }
    public function index()
    {
        return $this->user->news()->get();
    }
    public function show($id)
    {
        $posts = $this->user->news()->find($id);
    
        if (!$posts) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, posts not found.'
            ], 400);
        }
    
        return $posts;
    }
}