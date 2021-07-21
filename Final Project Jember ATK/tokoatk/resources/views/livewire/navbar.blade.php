<div>
<nav class="navbar navbar-expand-md" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Jember<strong>ATK</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Home</a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                         Kategori
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($kategoris as $kategori)
                        <a class="dropdown-item" href="{{ route('produks.kategori', $kategori->id) }}">{{ $kategori->nama }}</a>
                        @endforeach
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('produks') }}">Semua Kategori</a>
                    </div>  
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('history') }}">History</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('keranjang') }}">
                                    Keranjang<i class="fas fa-shopping-bag"></i>
                                    @if($jumlah_pesanan !==0)
                                    <span class="badge badge-danger">{{ $jumlah_pesanan }}</span>
                                    @endif
                                </a>
                            </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('keranjang') }}">
                                    Login Admin<i class=""></i> -->

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</div>
