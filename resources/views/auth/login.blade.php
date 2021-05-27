@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <table style="border-radius: 1px; width: 50%; margin: 0px auto; float: none;">
                <form action="{{ route('login') }}" method="POST" style="width:500px; margin:auto">
                    <tr>
                        @csrf
                        <td>
                            <label for="name">Name</label>
                        </td>
                        <td>
                            <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                            @error('name')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                                <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        </td>
                    </tr>
                    </form>

        </div>
    </div>
@endsection