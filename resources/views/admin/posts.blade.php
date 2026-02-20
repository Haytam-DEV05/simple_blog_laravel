@php
    use App\Models\Category;
    use App\Models\Post;

    $categories = new Category();
    $categories = $categories->get();

    $posts = new Post();
    $posts = $posts->get();

@endphp
@extends('admin.layout')
@section('content')
    <div class="container max-w-275 mx-auto p-3">
        <h1 class="text-[30px] font-semibold">Posts</h1>
        <form class="bg-gray-200 shadow-md p-5 rounded" method="POST" action="{{ url('/create_post') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="my-1">
                <label for="image" class="block text-[20px] font-semibold">Image</label>
                <input type="file" name="image" id="image"
                    class="outline-0 border border-black py-.5 px-4 focus:ring-1 focus:ring-blue-300 w-full">
            </div>
            <div class="my-1">
                <label for="title" class="block text-[20px] font-semibold">Title</label>
                <input type="text" name="title"
                    class="outline-0 border border-black py-.5 px-4 focus:ring-1 focus:ring-blue-300 w-full">
            </div>
            <div class="my-1">
                <label for="category" class="block text-[20px] font-semibold">Ctegory</label>
                <select name="category" id="category"
                    class="outline-0 border border-black py-.5 px-4 focus:ring-1 focus:ring-blue-300 w-full">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-1">
                <label for="Content" class="block text-[20px] font-semibold">Content</label>
                <textarea name="content_text" id="content"
                    class="outline-0 border border-black py-1 px-4 focus:ring-1 focus:ring-blue-300 w-full"></textarea>
            </div>
            <button class="bg-blue-500 text-white py-1 px-4 cursor-pointer rounded">Create</button>
        </form>
        <table width="100%" border="3" class="mt-3">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="text-center">
                        <td class=""><img src="{{ asset('images') }}/{{ $post->image }}" alt="{{ $post->image }}"
                                class="w-20 h-20 mx-auto object-cover">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->cattegoryData->name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="{{ url('/del_post') }}/{{ $post->id }}"
                                class="bg-red-300 text-red-600 py-1 px-3 cursor-pointer my-1">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection