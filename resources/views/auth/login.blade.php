@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-lg">
        <div class="text-center">
            <a href="/" class="inline-block">
                <img class="w-auto h-12 mx-auto" src="{{ asset('images/logo-bsilhk.png') }}" alt="BSILHK Logo">
            </a>
            <h2 class="mt-6 text-2xl font-bold text-center text-gray-900">
                Login ke Akun Admin
            </h2>
            <p class="mt-2 text-sm text-center text-gray-600">
                Silakan masukkan kredensial Anda untuk melanjutkan.
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
            @csrf

            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="email" class="sr-only">Alamat Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required
                           class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-t-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm @error('email') border-red-500 @enderror"
                           placeholder="Alamat Email" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="relative block w-full px-3 py-2 text-gray-900 placeholder-gray-500 border border-gray-300 rounded-none appearance-none rounded-b-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm @error('password') border-red-500 @enderror"
                           placeholder="Password">
                </div>
            </div>

            @if ($errors->any())
            <div class="p-4 mt-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                 @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
            @endif


            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember" type="checkbox"
                           class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                    <label for="remember-me" class="block ml-2 text-sm text-gray-900">
                        Ingat saya
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-green-600 hover:text-green-500">
                            Lupa password?
                        </a>
                    </div>
                @endif
            </div>

            <div>
                <button type="submit"
                        class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md group hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
@endsection