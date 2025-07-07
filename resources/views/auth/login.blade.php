@extends('layouts.app')

@section('content')
    <div style="max-width: 400px; margin: 0 auto; background: #4a6a7a; padding: 20px; border-radius: 5px; color: white;">
        <h2 style="text-align: center; margin-bottom: 20px;">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    style="width: 100%; padding: 8px; border-radius: 3px; border: none;">
                @error('email')
                    <div style="color: #ff6b6b; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Senha</label>
                <input id="password" type="password" name="password" required
                    style="width: 100%; padding: 8px; border-radius: 3px; border: none;">
                @error('password')
                    <div style="color: #ff6b6b; margin-top: 5px;">{{ $message }}</div>
                @enderror
            </div>
            <div style="text-align: center;">
                <button type="submit" style="background: #a3c9d9; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; font-weight: bold;">Entrar</button>
            </div>
        </form>
    </div>
@endsection
