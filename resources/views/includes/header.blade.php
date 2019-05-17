<header class="blog-header">
    <div class="header-top d-flex  align-items-center ">
        <div class="container ">
            <div class="d-flex justify-content-end ">
                @if (Route::has('login'))
                    @auth
                        <a class="text-light" href="{{ route('logout') }}"></a>
                        @if (!Auth::check() || !Auth::user()->hasRole('admin'))
                        @else  <a href="/admin" class="text-light auth">Панель адміністратора</a>
                        @endif

                        <a href="{{ url('/home') }}" class="text-light auth">Профіль</a>

                        <a class="text-light" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Вихід
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    @else
                        <a href="{{ route('login') }}" class="text-light auth">Логін</a>
                        <a href="{{ route('register') }}" class="text-light ">Регістрація</a>
                    @endauth
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav d-flex justify-content-between align-items-center">
            <a class="navbar-brand " href="/">
                <img src="{{ asset('img/logo.png') }}" height="128" alt="">
            </a>
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Пошук" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
            </form>


            <img
                src="data:image/png;base64,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">

        </div>
    </div>
    <hr>
    <div class="container">
        <nav class="nav d-flex justify-content-around">
            <a class="p-2 text-muted" href="/articles">Каталог</a>
            <a class="p-2 text-muted disabled">Розхідний матеріал</a>
            <a class="p-2 text-muted" href="/posts">Статті</a>
            <a class="p-2 text-muted" href="/delivery">Доставка</a>
            <a class="p-2 text-muted" href="/sale">Акції</a>
            <a class="p-2 text-muted" href="/about">Про нас</a>
        </nav>
    </div>
    <br>
</header>
