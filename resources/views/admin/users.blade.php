@php
    use App\Models\User;
    $users = new User();
    $users = $users->get();
@endphp
@extends('admin.layout')
@section('content')
    <div class="container max-w-275 mx-auto p-3">
        <h1 class="text-[30px] font-semibold">Users</h1>
        <form class="bg-gray-200 shadow-md p-5 rounded" method="POST" action="{{ url('/create_user') }}">
            @csrf
            <div class="my-3">
                <label for="name" class="block text-[20px] font-semibold">Name</label>
                <input type="text" name="name" placeholder="Pleas Enter Your Name..."
                    class="outline-0 border border-black py-1 px-4 focus:ring-1 focus:ring-blue-300 w-full focus:placeholder:text-[0px] duration-150 transition-all">
            </div>
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
            <button class="bg-blue-500 text-white py-1 px-4 cursor-pointer rounded mt-3">Create</button>
        </form>

        <table border="2" width="100%" class="mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->created_at }}</th>
                        <th>
                            <a class="bg-red-300 text-red-800 py-1 px-3 cursor-pointer block my-1 max-w-fit mx-auto"
                                href="{{ url('/del_user') }}/{{ $user->id }}">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection