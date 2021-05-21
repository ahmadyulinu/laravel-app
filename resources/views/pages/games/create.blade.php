@extends('layouts.default')

@section('content')
<div class="card mt-5">
    <div class="card-body card-block p-4">
        <h2><strong>Tambah Artikel</strong></h2>
        <br>
        <small>TechHub Admins</small>
        <hr>
        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="article_title" class="form-control-label">Judul Artikel</label>
                <input type="text" id="article_title" name="article_title" class="form-control">
            </div>

            <div class="form-group">
                <label for="article_author" class="form-control-label">Penulis Artikel</label>
                <input type="text" id="article_author" name="article_author" class="form-control">
            </div>
            <div class="form-group">
                <label for="article_game" class="form-control-label">Game</label>
                <input type="text" id="article_game" name="article_game" class="form-control">
            </div>

            <div class="form-group">
                <label for="article_content" class="form-control-label">Isi Artikel</label>
                <textarea name="article_content" id="article_content" cols="30" rows="10"
                    class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="game_link" class="form-control-label">Link Game</label>
                <input type="text" id="game_link" name="game_link" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-outline-secondary btn-block" type="submit">TAMBAH ARTIKEL</button>
            </div>
        </form>
    </div>
</div>
@endsection