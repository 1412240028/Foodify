@extends('Foodify.layouts.app')

@section('content')
    <h2 align="center">LOGIN ADMIN</h2>
    <hr>

    @if($errors->any())
        <table width="100%" border="1" cellpadding="8" cellspacing="0" bgcolor="#ffcccc">
            <tr><td>{{ $errors->first() }}</td></tr>
        </table>
        <br>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <table border="1" cellpadding="8" cellspacing="0">
            <tr><th align="left">Email</th><td><input type="email" name="email" value="{{ old('email') }}" size="40" required autofocus></td></tr>
            <tr><th align="left">Password</th><td><input type="password" name="password" size="40" required></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        </table>
    </form>
@endsection
