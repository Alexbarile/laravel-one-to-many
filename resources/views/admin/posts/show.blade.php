@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 m-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>Dettaglio post: {{$post->title}}</h2>
                </div>
                <div>
                    <a href="{{route('admin.posts.index')}}" class="btn btn-primary">
                        Torna all'elenco
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 m-4">
            <p><strong>Slug:</strong> {{$post->slug}}</p>
            <label class="d-block" for=""></label>
            <p><strong>Contenuto:</strong> {{$post->content}}</p>
            <p><strong>Categoria:</strong> {{$post->type ? $post->type->name : 'Senza categoria'}}</p>
        </div>
    </div>
</div>
@endsection