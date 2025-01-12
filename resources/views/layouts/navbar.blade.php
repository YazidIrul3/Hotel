<nav class=" relative flex justify-between px-4 items-center py-3 " style="background-color: {{ env('COLOR_1') }};  color: {{ env('COLOR_2') }}">
    <div>
        <h1 class=" font-bold text-4xl">Hotel</h1>
    </div>

    <div class=" flex gap-4  text-lg font-semibold">
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Home</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Hotels</a>
        <a href="/" class="hover:bg-slate-50 hover:bg-opacity-10 px-2 py-2 rounded-lg">Wedding</a>
    </div>

    <div id="account" class=" hover:cursor-pointer text-slate-50 font-bold px-2 py-3 rounded-md" style="background-color: {{ env('COLOR_3') }}">
        <h1>Akun</h1>
    </div>

    <div id="login-form" class="  z-50 text-slate-900 flex flex-col gap-4  h-full  w-[340px] px-4 py-4 ">
        <form action="" class="bg-slate-50 px-4 py-7 ">
            <h1 class=" text-center font-bold text-2xl mb-5 ">Login Your Account</h1>

            <div class=" flex flex-col gap-4">
                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="username">Username</label>
                    <input type="text" name="username" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="password">Password</label>
                    <input type="password" name="password" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2 mt-2">
                    <button class=" w-full text-slate-50 px-2 py-2 rounded-md font-bold"
                    style="background-color: {{ env('COLOR_3') }}"
                    >Login</button>

                    <p class=" font-semibold">Don't have an account ? <span id="register-span" class=" text-blue-600 cursor-pointer">Register</span> Now</p>
                </div>
            </div>

           
        </form>
    </div>

    <div id="register-form" class="   z-50 text-slate-900 flex flex-col gap-4  h-screen w-screen px-4 py-4 ">
        <form action="" class="bg-slate-50 px-4 py-7 w-[340px] ">
            <h1 class=" text-center font-bold text-2xl mb-5 ">Register Your Account</h1>

            <div class=" flex flex-col gap-4">
                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="name">Name</label>
                    <input type="text" name="name" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="email">Email</label>
                    <input type="text" name="email" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="username">Username</label>
                    <input type="text" name="username" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="password">Password</label>
                    <input type="password" name="password" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2">
                    <label class=" font-semibold text-slate-900" for="confirmpassword">Confirm Password</label>
                    <input type="password" name="confirmpassword" class=" w-full px-2 py-2 rounded-md border border-slate-900">
                </div>

                <div class=" flex flex-col gap-2 mt-2">
                    <button class=" w-full text-slate-50 px-2 py-2 rounded-md font-bold"
                    style="background-color: {{ env('COLOR_3') }}"
                    >Register</button>

                </div>
            </div>

           
        </form>
    </div>

</nav>