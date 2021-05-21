@extends('layouts.default')

@section('content')
<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="container mt-5">
        <div class="row mt-2">
            <div class="card">
                <div class="card-body">
                    <h1>Halo {{ Auth::user()->name }}.</h1>
                    <h4>Silahkan pilih menu di samping untuk memulai.</h4>
                </div>
            </div>

        </div>
    </div>

    <!-- /Widgets -->
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->

    <!-- /.orders -->
    <!-- /#add-category -->
</div>
<!-- .animated -->
@endsection