@php
    use App\Models\Category;
    $categories = new Category();
    $categories = $categories->get();
@endphp
@extends('admin.layout')
@section('content')
    <div class="container max-w-275 mx-auto p-3">
        <h1 class="text-[30px] font-semibold">Category</h1>
        <form class="bg-gray-200 shadow-md p-5 rounded" method="GET" action="{{ url('/create_category') }}">
            @csrf
            <div class="my-3">
                <label for="name" class="block text-2xl font-semibold">Name</label>
                <input type="text" name="name" placeholder="Pleas Wright Something Here..."
                    class="outline-0 border border-black py-1 px-4 focus:ring-1 focus:ring-blue-300 w-full">
            </div>
            <button class="bg-blue-500 text-white py-1 px-4 cursor-pointer rounded">Create</button>
        </form>
        <table border="2" width="100%" class="mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr class="text-center">
                        <td>{{ $categorie->name }}</td>
                        <td>{{$categorie->userData->name}}</td>
                        <td>{{$categorie->created_at}}</td>
                        <td>
                            <a href="{{ url('/del_category') }}/{{ $categorie->id }}"
                                class="bg-red-300 text-red-700 py-1 px-4 my-2 cursor-pointer block max-w-fit mx-auto">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
