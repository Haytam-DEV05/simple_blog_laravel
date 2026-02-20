@extends('admin.layout')
@section('content')
    <div class="max-w-200 mx-auto my-15">
        @if (session()->has('error'))
            <p class="text-red-800 bg-red-200 border border-red-700 rounded py-2 px-5">{{ session()->get('error') }}</p>
        @endif
        <form action="{{ url('/login') }}" method="POST" class="bg-gray-200 shadow-md p-4 rounded mt-2">
            @csrf
            <div>
                <label for="email" class="block text-[20px] font-semibold">Email</label>
                <input type="email" name="email" placeholder="example@gmail.com"
                    class="outline-0 border border-black py-1 px-4 focus:ring-1 focus:ring-blue-300 focus:placeholder:text-[0px] duration-450 transition-all w-full">
            </div>
            <div>
                <label for="password" class="block text-[20px] font-semibold">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password"
                    class="outline-0 border border-black py-1 px-4 focus:ring-1 focus:ring-blue-300 w-full focus:placeholder:text-[0px] duration-150 transition-all">
            </div>
            <button class="bg-blue-500 text-white py-1 px-4 cursor-pointer rounded mt-3">Login</button>
        </form>

    </div>
@endsection
