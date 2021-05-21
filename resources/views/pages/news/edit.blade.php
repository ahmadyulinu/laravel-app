@extends('layouts.default')

@section('content')
<div class="card mt-5">
    <div class="card-body card-block p-4">
        <h2><strong>Edit Artikel Berita</strong></h2>
        <br>
        <small>TechHub Admins</small>
        <hr>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="article_title" class="form-control-label">Judul Artikel</label>
                <input type="text" id="article_title" name="article_title" value="{{ $news->article_title }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="article_author" class="form-control-label">Penulis Artikel</label>
                <input type="text" id="article_author" name="article_author" value="{{ $news->article_author  }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="article_image" class="form-control-label">Link Artikel</label>
                <input type="text" id="article_image" name="article_image" value="{{ $news->article_image }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="article_content" class="form-control-label">Isi Artikel</label>
                <textarea type="text" id="article_content" name="article_content" class="form-control">{{ trim($news->article_content) }}
                </textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-outline-secondary btn-block" type="submit">EDIT ARTIKEL</button>
            </div>
        </form>
    </div>
</div>
@endsection