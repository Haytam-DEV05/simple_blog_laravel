@php
    use App\Models\Post;
    $post = new Post();
    $post = $post->findOrFail($id);
@endphp
@extends('blog.layout')
@section('content')
    <a class="bg-red-300 py-1 px-6 rounded-lg mt-5 mr-10 block max-w-fit " href="{{ url('/') }}">- Retoure</a>
    <div class="container max-w-fit mx-auto mt-5 bg-green-400 p-5 rounded-lg">
        <h1 class="text-[35px] font-bold">{{ $post->title }}</h1>
        <div class="image w-100 h-80 my-2">
            <img src="{{ asset('images') }}/{{ $post->image }}" alt="{{ $post->image }}"
                class="w-full h-full object-contain">
        </div>
        <h2 class="text-[25px] font-semibold">{{ $post->userData->name }} | {{ $post->created_at }}</h2>
        <h3 class="text-[20px]">{{ $post->content }}</h3>
    </div>
@endsection