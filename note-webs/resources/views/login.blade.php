<x-layout>
    @if ($errors->any())
        <div class="auth-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="auth-container">
        <h1>Login</h1>
        <form action="{{ route('login.submit') }}" method="POST" class="auth">
            @csrf
            <span>E-mail: </span>
            <input type="email" name="email">
            <span>Password: </span>
            <input type="text" name="password">
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>