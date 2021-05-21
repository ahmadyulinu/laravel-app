@extends('layouts.default')

@section('content')
<div class="card mt-5">
    <div class="card-body card-block p-4">
        <h2><strong>Edit Video</strong></h2>
        <br>
        <small>TechHub Admins</small>
        <hr>
        <form action="{{ route('vids.update', $vids->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="video_title" class="form-control-label">Judul Video</label>
                <input type="text" id="video_title" name="video_title" value="{{ $vids->video_title }}"
                    class="form-control">
            </div>

            <div class="form-group">
                <label for="video_thumbnail" class="form-control-label">Thumbnail Video</label>
                <input type="text" id="video_thumbnail" name="video_thumbnail" value="{{ $vids->video_thumbnail  }}"
                    class="form-control">
            </div>
            <div class="form-group">
                <label for="uploader" class="form-control-label">Uploader</label>
                <input type="text" id="uploader" name="uploader" value="{{ $vids->uploader }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="video_link" class="form-control-label">Link Video</label>
                <input type="text" id="video_link" name="video_link" class="form-control"
                    value="{{ $vids->video_link }}">
            </div>

            <div class="form-group">
                <label for="date_uploaded" class="form-control-label">Tanggal Diunggah</label>
                <input type="text" id="date_uploaded" name="date_uploaded" class="form-control"
                    value="{{ $vids->date_uploaded }}">
            </div>

            <div class="form-group">
                <button class="btn btn-outline-secondary btn-block" type="submit">EDIT VIDEO</button>
            </div>
        </form>
    </div>
</div>
@endsection