

<ul class="d-flex align-items-center">
@guest
    @if (Route::has('login'))
        <li class="nav-item me-4">
            <a style="color: black" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    {{-- @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif --}}
@else
    <li class="nav-item dropdown me-4">      
        <ul class="navbar-nav ms-auto fs-3">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <span>
                        <img src="{{ Auth::user()->img }}" style="width:40px; height:40px; position:absolute; left:-50px; border-radius:50%; max-width: 100%; object-fit: cover; object-position: center;">
                    </span>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a  class="dropdown-item" href="{{ route('admin.register') }}">
                            Đăng ký NV
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                
                
            @endguest
        </ul>
    </li>
    {{-- <li>
            <img src="{{ Auth::user()->img }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
    </li> --}}
@endguest
    
</ul>
