@extends('..layouts.layout')
@section('content')
    <div class="w-full mx-auto text-center absolute z-50">
        <div class="cover-container mt-4 flex p-3 mx-auto flex flex-col">
            <header class="masthead mb-auto text-white">
                <div class="inner">
                    <h3 class="masthead-brand text-4xl">ATheneus</h3>
                    <nav class="nav nav-masthead text-white justify-content-center sm:p-4">
                        <a class="nav-link xl:text-3xl lg:text-3xl md:text-3xl" href="/play/">Jugar</a>
                        <a class="nav-link xl:text-3xl lg:text-3xl md:text-3xl" href="/about/">Acerca de</a>
                    </nav>
                </div>
            </header>
            <main role="main">
                @yield('container')
            </main>
            <footer class="mastfoot mt-auto p-6">
                <div class="inner text-center text-white">
                    <p>Made with coffe and hard drugs. &#x1F49D;</p>
                </div>
            </footer>
        </div>
    </div>
@endsection



