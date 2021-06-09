@extends('layouts.adminmaster')
@section('title', 'Create News')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">News</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('news.store') }}" method="POST">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="News Title">
                                    <small class="text-danger">@error('title') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="picture">Picture</label>
                                    <input type="text" name="picture" class="form-control @error('picture') is-invalid @enderror" placeholder="News Picture">
                                    <small class="text-danger">@error('picture') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" placeholder="News Content">
                                    <small class="text-danger">@error('content') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="from-group">
                                <label for="author">Author</label>
                                <select class="input-group" name="author">  
                                    @foreach ($items as $key => $value)
                                        <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}> 
                                            {{ $value }} 
                                        </option>
                                    @endforeach    
                                </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="from-group">
                                    <label for="publish">Is Published</label>
                                    <input type="text" name="is_published" @error('is_published') is-invalid @enderror" list="published">
                                    <datalist id="published" name="publish">
                                        <option value="1">Veriffied</option>
                                        <option value="0">Not Veriffied</option>
                                    </datalist>
                                    <small class="text-danger">@error('is_published') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="from-group">
                                    <label for="publishapi">Publish API User</label>
                                    <input type="text" name="user_id" @error('user_id') is-invalid @enderror" list="user">
                                    <datalist id="user" name="user">
                                        <option value="1">public test</option>
                                        <option value="2">Personal</option>
                                    </datalist>
                                    <small class="text-danger">@error('user_id') {{$message}} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('news.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection