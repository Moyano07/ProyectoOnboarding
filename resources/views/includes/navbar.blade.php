<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if(auth()->user()->hasRole('ADMIN'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user/store') }}">{{ __('Create User') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user/list') }}">{{ __('User List') }}</a>
                            </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/ldap/user/list') }}">User Ldap List</a>
                        </li>
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ url('/publication/create') }}">New Publication</a>
                         </li>
                         @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
