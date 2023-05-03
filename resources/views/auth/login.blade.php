<x-app>
    <x-slot name="main">
        <div class="flex h-screen items-center justify-center">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div
                    class="flex w-[600px] flex-col gap-3 rounded-md border-2 border-solid border-b-blue-336B87 p-8 shadow-md">
                    <p class="border-b-2 border-solid border-blue-336B87 pb-1 text-2xl font-semibold text-blue-336B87">
                        Login</p>
                    <div>
                        <label class="mx-1 mb-1 block text-[20px] text-blue-336B87" for="username">Username</label>
                        <x-auth.input-text class="w-full" id="username" name="username" placeholder="ictu@gmail.com">
                        </x-auth.input-text>
                    </div>
                    <div>
                        <label class="mx-1 mb-1 block text-[20px] text-blue-336B87" for="password">Password</label>
                        <x-auth.input-text class="w-full" id="password" name="password" type="password"
                            placeholder="**********"></x-auth.input-text>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <input class="h-5 w-5" name="remember-me" type="checkbox">
                            <p class="inline font-semibold text-blue-336B87">Remember me</p>
                        </div>
                        <a class="font-semibold text-blue-336B87" href="#">Forgot password?</a>
                    </div>
                    <input class="cursor-pointer rounded-md bg-blue-336B87 p-2 text-center text-xl text-white"
                        type="submit" value="Login"></a>
                </div>
            </form>
        </div>
    </x-slot>
</x-app>
