<nav class="flex justify-around items-center min-h-20 shadow-md bg-gray-100">
    <div class="logo font-bold text-[30px]">Blog</div>
    <ul class="flex space-x-4">
        <li><a href="{{ url('/admin') }}">Categories</a></li>
        <li><a href="{{ url('/admin/posts') }}">Posts</a></li>
        <li><a href="{{ url('/admin/users') }}">Users</a></li>
        <li><a href="{{ url('/logout') }}">Logout</a></li>
    </ul>
</nav>