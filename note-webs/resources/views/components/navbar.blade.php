<div class="navbar-container">
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('note.index') }}">NoteBook</a>
            </div>
            @if ($user)
            <div class="navbar-links">
                <a href="#">Hi {{ $user->name }}!</a>
                <a href="{{ route('login.logout') }}">Log out</a>
            </div>
            @else
            <div class="navbar-links">
                <a href="{{ route('login.index') }}">Login</a>
                <a href="{{ route('register.index') }}">Register</a>
            </div>
            @endif
        </nav>
    </div>