<li class="nav-item">
    <a href="{{url('dashboard')}}" class="nav-link">
        <p>
            <i class="nav-icon fas fa-tachometer-alt"></i>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('user.profile')}}" class="nav-link">
        <p>
            <i class="nav-icon fas fa-user"></i>
            My Profile
        </p>

    </a>
</li>

<li class="nav-item">
    <a href="{{route('password.create')}}" class="nav-link">
        <p>
            <i class="nav-icon fas fa-edit"></i>
            Change Password
        </p>

    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <p>
            <i class="nav-icon fas fa-sign-out-alt"></i>
            Sign Out
        </p>

    </a>
</li>
