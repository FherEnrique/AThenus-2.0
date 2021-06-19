@extends('..layouts.layout')
@section('content')
<div class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">ATheneus</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="/play/">Jugar</a>
                    <a class="nav-link" href="/about/">Acerca de</a>
                </nav>
            </div>
        </header>
        <main role="main">
            @yield('container')
        </main>
        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Made with coffe and hard drugs. &#x1F49D;</p>
            </div>
        </footer>
    </div>
</div>
@endsection



