<x-app>
    <x-slot name="head">
        @vite('resources/js/auth/register.js')
    </x-slot>
    <x-slot name="main">
        <div class="flex h-screen items-center justify-center">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div
                    class="flex w-[90vw] flex-col gap-3 rounded-md border-2 border-solid border-b-blue-336B87 p-8 shadow-md sm:w-[70vw] lg:w-[50vw] xl:w-[40vw] 2xl:w-[30vw]">
                    <p class="border-b-2 border-solid border-blue-336B87 pb-1 text-2xl font-semibold text-blue-336B87">
                        Register</p>
                    <div id="fullname">
                        <label class="mx-1 mb-1 block text-[1em] text-blue-336B87" for="fullname">Name</label>
                        <x-auth.input-text class="w-full" id="fullname" name="fullname" placeholder="Nguyen Nhu Tuan Hung">
                        </x-auth.input-text>
                    </div>
                    <div id="username">
                        <label class="mx-1 mb-1 block text-[1em] text-blue-336B87" for="username">Email</label>
                        <x-auth.input-text class="w-full" id="email" name="email" placeholder="ictu@gmail.com">
                        </x-auth.input-text>
                    </div>
                    <div id="password-field">
                        <label class="mx-1 mb-1 block text-[1em] text-blue-336B87" for="password">Password</label>
                        <div class="relative">
                            <x-auth.input-text class="w-full pr-[44px]" id="password" name="password"
                                type="password" placeholder="**********"></x-auth.input-text>
                            <div class="absolute inset-y-0 right-0 m-2">
                                <input class="hidden" id="toggle" name="toggle" type="checkbox">
                                <label
                                    class="flex h-full items-center rounded-md bg-gray-300 py-1 px-2 text-blue-336B87 hover:bg-gray-200"
                                    id="toggle-label" for="toggle">
                                    <x-icon class="h-4 w-4 fill-blue-336B87" name="eye"></x-icon>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="repassword-field">
                        <label class="mx-1 mb-1 block text-[1em] text-blue-336B87" for="re-password">Re-Password</label>
                        <div class="relative">
                            <x-auth.input-text class="w-full pr-[44px]" id="re-password" name="re-password"
                                type="password" placeholder="**********"></x-auth.input-text>
                            <div class="absolute inset-y-0 right-0 m-2">
                                <input class="hidden" id="toggle-repassword" name="toggle-repassword" type="checkbox">
                                <label
                                    class="flex h-full items-center rounded-md bg-gray-300 py-1 px-2 text-blue-336B87 hover:bg-gray-200"
                                    id="toggle-label-repassword" for="toggle-repassword">
                                    <x-icon class="h-4 w-4 fill-blue-336B87" name="eye"></x-icon>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input class="cursor-pointer rounded-md bg-blue-336B87 p-2 text-center text-xl text-white"
                        type="submit" value="Register"></a>
                </div>
            </form>
        </div>
    </x-slot>
</x-app>
