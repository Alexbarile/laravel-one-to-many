@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 m-3">
                <h1>MODIFICA POST</h1>
            </div>
            <div class="class-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <form method="POST" action="{{route('admin.posts.update', $post->slug)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="title">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Titolo" value="{{old('title') ?? $post->title}}">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group m-2">
                        <label class="fs-2 fw-semibold" for="content">Contenuto</label>
                        <textarea type="password" class="form-control" name="content" id="content" placeholder="Contenuto" value="{{old('content') ?? $post->content}}"></textarea>
                        @error('content')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection