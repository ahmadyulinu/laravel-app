@extends('layouts.default')

@section('content')
<div class="card mt-5">
    <div class="card-body card-block p-4">
        <h2><strong>Edit Artikel</strong></h2>
        <br>
        <small>TechHub Admins</small>
        <hr>
        <form action="{{ route('games.update', $games->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="article_title" class="form-control-label">Judul Artikel</label>
                <input type="text" id="article_title" name="article_title" value="{{ $games->article_title }}"
                    class="form-control">
            </div>

            <div class=" orm-group">
                <label for="article_author" class="form-control-label">Penulis Artikel</label>
                <input type="text" id="article_author" name="article_author" value="{{ $games->article_author  }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="article_game" class="form-control-label">Game</label>
                <input type="text" id="article_game" name="article_game" value="{{ $games->article_game }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="article_content" class="form-control-label">Isi Artikel</label>
                <input type="text" id="article_content" name="article_content" value="{{ $games->article_content }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="game_link" class="form-control-label">Link Game</label>
                <input type="text" id="game_link" name="game_link" value="{{ $games->game_link }}" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-outline-secondary btn-block" type="submit">EDIT ARTIKEL</button>
            </div>
        </form>
    </div>
</div>
@endsection