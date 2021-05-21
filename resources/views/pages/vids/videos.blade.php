@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Video</h4>
                    <div class="table-stats order-table ov-h">
                        <table class="table" style="border-color: black">
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Uploader</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($vids as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td><img src="{{  $n->video_thumbnail  }}" alt="" class="img-thumbnail rouded"></td>
                                    <td>{{ $n->video_title }}</td>
                                    <td><a href="{{ $n->video_link }}" target="_blank">YouTube</a></td>
                                    <td>
                                        {{ $n->uploader }}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('vids.edit', $n->id) }}" class="btn btn-primary btn-sm mb-1">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('vids.destroy', $n->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()