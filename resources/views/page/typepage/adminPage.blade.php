<div class="mt-[10rem]">
    <h1>Admin Page</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
