@extends('user.layouts.master')
@section('sidebar-tengah')

    <div class="tengah">
        @foreach ($post as $posts)
        <div class="card">
            <h2>{{$posts->title}}</h2>
            <h5>Penulis, Mar 28 2021</h5>
            <img src="{{$posts->picture}}" alt="pict"width="1080px" height="720px">
            <p>{{$posts->content}}</p>
            <a href="">Read more....</a>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{ $post->links() }}
        </div>
    </div>

@endsection
