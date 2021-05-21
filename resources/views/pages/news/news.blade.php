@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Artikel</h4>
                    <div class="table-stats order-table ov-h">
                        <table class="table" style="border-color: black">
                            <thead>
                                <tr>
                                    <th>#</th>

                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Content</th>
                                    <th>Source</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($news as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td>{{ $n->article_title }}</td>
                                    <td>{{ $n->article_author }}</td>
                                    <td>{{ $n->article_content }}</td>
                                    <td><a href="{{ $n->article_image }}" target="_blank">Link</a></td>
                                    <td class="text-center">
                                        <a href="{{ route('news.edit', $n->id) }}" class="btn btn-primary btn-sm mb-1">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('news.destroy', $n->id) }}" method="post"
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