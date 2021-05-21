<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-md navbar-default" style="left: -0.7rem">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav" style="flex-direction: column; width: 100%">
                <li class="active text-center">
                    <a href="" style="font-size: 1rem;">Menus</a>
                </li>
                <hr>
                <li class="menu-title text-center" style="border-bottom: 1px solid white; letter-spacing: 2px">NEWS</li>
                <!-- /.menu-title -->

                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('news.index') }}">Lihat Berita</a>
                </li>
                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('news.create') }}"></i>Tambah Berita</a>
                </li>


                <li class="menu-title text-center" style="border-bottom: 1px solid white; letter-spacing: 2px">VIDEOS
                </li>
                <!-- /.menu-title -->
                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('vids.index') }}"></i>Lihat Video</a>
                </li>

                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('vids.create') }}">Tambah Video</a>
                </li>

                <li class="menu-title text-center" style="border-bottom: 1px solid white; letter-spacing: 2px">GAMES
                </li>
                <!-- /.menu-title -->
                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('games.index') }}"></i>Lihat Artikel Game</a>
                </li>

                <li class="btn btn-outline-secondary mt-2">
                    <a href="{{ route('games.create') }}">Tambah Artikel Game</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>