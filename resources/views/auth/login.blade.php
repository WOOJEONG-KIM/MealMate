@extends('layouts.layout')

@section('content')
<div class="container mx-auto my-10 px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white shadow-md rounded-lg p-8">
                <h2 class="text-3xl font-bold text-center mb-6">{{ __('Login') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
                        <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
