<h1>smkn1subang-app| @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('tentangsekolah') }}">Tentang sekolah</a></li>
        <li><a href="{{ url('pesertadidik') }}">peseetadidik</a></li>
        <li><a href="{{ url('eskul') }}">eskul</a></li>
        <li><a href="{{ url('prestasi') }}">prestasi</a></li>
</nav>
<hr />
<div>
    @yield('content')
</div>