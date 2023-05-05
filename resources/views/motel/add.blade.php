<x-app>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="left">
                <x-buttons.laravel></x-buttons.laravel>
            </x-slot>
            <x-slot name="right">
                @if (true)
                    <x-dropdown>
                        <x-slot name="trigger">
                            <div class="flex items-center gap-2">
                                <img class="h-10 w-10 rounded-full" src="{{ Vite::asset('resources/images/avatar.jpg') }}"
                                    alt="avatar">
                                <p class="block text-lg font-semibold text-blue-336B87">Tuấn Hưng</p>
                                <x-icon class="h-4 w-4 fill-blue-336B87" name="chevron-down"></x-icon>
                            </div>
                        </x-slot>
                        <x-slot name="content">
                            <div>
                                <ul>
                                    <li>
                                        <a href="{{ route('edit-profile') }}">
                                            <div class="flex items-center gap-2 p-3 hover:bg-gray-50">
                                                <x-icon class="h-5 w-5 fill-blue-336B87" name="user"></x-icon>
                                                <p class="text-blue-336B87">My profile</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="border-t-[1px] border-solid border-gray-100">
                                        <a href="#">
                                            <div class="flex items-center gap-2 p-3 hover:bg-gray-50">
                                                <x-icon class="h-5 w-5 fill-blue-336B87" name="log-out"></x-icon>
                                                <p class="text-blue-336B87">Log out</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="flex items-center gap-2">
                        <x-buttons.login></x-buttons.login>
                        <x-buttons.register></x-buttons.register>
                    </div>
                @endif
            </x-slot>
        </x-navigation>
    </x-slot>
    <x-slot name="main">
        <p class="text-xl mt-12 mb-3 text-blue-336B87 font-semibold" >Thêm phòng mới</p>
        <div class="grid grid-cols-1 gap-3 xl:grid-cols-2">
            <div class="bg-zinc-50 p-8 min-h-[300px]">
                <label class="flex h-full w-full items-center justify-center cursor-pointer" for="image">
                    <x-icon class="h-10 w-10" name="image"></x-icon>
                </label>
                <input id="image" type="file" hidden>
            </div>

            <div class="flex flex-col justify-end gap-2 rounded-md bg-zinc-50 p-8">
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="name">Name</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="name" type="text" placeholder="Nguyễn A">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="description">Description</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="description" type="text" placeholder="Phòng rộng rãi thoáng mát">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="address">Address</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="address" type="text" placeholder="Thành phố Thái Nguyên">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="item">Item</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="item" type="text" placeholder="Bình nóng lạnh và điều hoà">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="amount-of-people">Amount of people</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="amount-of-people" type="text" placeholder="99">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="price">Price</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="price" type="text" placeholder="1000">
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4 gap-2">
            <a href="" class="bg-blue-336B87 p-2 w-24 text-center text-white font-semibold rounded-md">
                Accept
            </a>
            <a href="" class="p-2 w-24 text-center text-blue-336B87 font-semibold rounded-md">
                Cancel
            </a>
        </div>
    </x-slot>
</x-app>
