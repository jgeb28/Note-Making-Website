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
        <h1>Registration</h1>
        <form action="{{ route('register.submit') }}" method="POST" class="auth">
            @csrf
            <span>E-mail: </span>
            <input type="email" name="email">
            <span>Name: </span>
            <input type="text" name="name"> 
            <span>Password: </span>
            <input type="password" name="password">
            <span>Retype Password: </span>
            <input type="password" name="password_confirmation">
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>