<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <select v-model="val" @change="setLang">
                    @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                        <option value="{{$key}}">
                            {{$value['native']}}
                        </option>
                    @endforeach
                </select>
                <!-- Authentication Links -->
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
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        لوحة التحكم
                    </a>
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user('members')->name }} <span class="caret"></span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md bg-dark shadow-sm form-group">
    <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> ¦
                <a class="navbar-brand" href="{{ url('/advertise') }}">
                    عروض الإيجار و البيع
                </a>¦

                <a class="navbar-brand" href="{{ url('/job') }}">
                    فرص العمل
                </a>
                <a class="navbar-brand" href="{{ url('/cv') }}">
                    السير الذاتية
                </a>

{{--        <router-link class="navbar-brand" to="/">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </router-link>--}}
{{--        ¦--}}
{{--        <router-link class="navbar-brand" to="/">--}}
{{--            عروض الإيجار--}}
{{--        </router-link>--}}
{{--        ¦--}}
{{--        <router-link class="navbar-brand" to="/advertise">--}}
{{--            عروض البيع--}}
{{--        </router-link>--}}

{{--        <router-link class="navbar-brand" to="/job">--}}
{{--            فرص العمل--}}
{{--        </router-link>--}}
{{--        <router-link class="navbar-brand" to="/cv">--}}
{{--            السير الذاتية--}}
{{--        </router-link>--}}

    </div>
</nav>


