@php
    use App\Models\Post;
    $posts = new Post();
    $posts = $posts->get();
@endphp
@extends('blog.layout')
@section('content')
    <div class="container max-w-275 mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 mt-5">
        @foreach ($posts as $post)
            <div class="post border border-black p-2 rounded-lg">
                <a href="{{ url('/post') }}/{{ $post->id }}">
                    <div class="image w-50 h-50 mx-auto">
                        <img src="{{ asset('images') }}/{{ $post->image }}" alt="{{ $post->image }}"
                            class="w-full h-full rounded-full">
                    </div>
                    <h2 class="mt-5 text-[30px] font-semibold">{{ $post->title }}</h2>
                </a>
            </div>
        @endforeach
    </div>
@endsection