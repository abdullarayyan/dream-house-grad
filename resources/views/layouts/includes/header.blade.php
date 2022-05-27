<header>
    <div class="logo-wrapper">
        <i class='bx bx-menu' onclick="toggleNav()"></i>
        <a href="{{ url('/customer') }}">
            <div class="logo">
                <img src="{{ asset('assets/images/logo.png') }}"/>
            </div>
            <span class="logo-title">Building House</span>
        </a>
    </div>

    <div class="left">
        @auth

            <div class="profile">
                <img class="profile-image" src={{ url('assets/images/profile-placeholder.png') }} />
                <div class="profile-name">
                    <span id="navbarDropdown" class="name dropdown-toggle" role="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }}
                        <i class='bx bxs-chevron-down'></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    <span class="job-name">{{ Auth::user()->role_label }}</span>
                </div>
            </div>
        @endauth
    </div>
    @if(\Illuminate\Support\Facades\Auth::user()==null)
    <div class="left" style="    height: 50px;
    width: 50px;
    overflow: hidden;
    border-radius: 25px;">



            {{--            @can(\App\Classes\AccessClass::VIEW_SETTING,\Auth::user())--}}
            <a href="{{ url('/login') }}" style=""><i class='bx bx-cog'></i></a>
            {{--            @endcan--}}


    </div>
    @endif

</header>
