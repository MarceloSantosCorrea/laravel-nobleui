<li class="nav-item dropdown nav-profile">
    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile"/>
    </a>
    <div class="dropdown-menu" aria-labelledby="profileDropdown">
        <div class="dropdown-header d-flex flex-column align-items-center">
            <div class="figure mb-3">
                <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt=""/>
            </div>
            <div class="info text-center">
                <p class="name font-weight-bold mb-0">
                    {{ Auth::user()->name }}
                </p>
                <p class="email text-muted mb-3">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>
        <div class="dropdown-body">
            <ul class="profile-nav p-0 pt-3">
                <li class="nav-item">
                    <a href="profile" class="nav-link">
                        <i data-feather="user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i data-feather="edit"></i>
                        <span>Edit Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i data-feather="repeat"></i>
                        <span>Switch User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</li>
