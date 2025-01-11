<nav class=" flex justify-around items-center py-3 " style="background-color: {{ env('COLOR_1') }};  color: {{ env('COLOR_2') }}">
    <div>
        <h1 class=" font-bold text-4xl">Hotel</h1>
    </div>

    <div class=" flex gap-4  text-lg font-semibold">
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Home</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Hotels</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Wedding</a>
    </div>

    <div class="text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_3') }}">
        <a href="/">Akun</a>
    </div>
</nav>