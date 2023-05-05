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
        <p class="mt-12 text-[18px] font-semibold text-blue-336B87">Tìm kiếm theo</p>
        <div class="flex gap-x-2">
            <select class="min-w-36 rounded-md bg-blue-336B87 p-3 font-semibold text-white" id="search-type"
                name="search-type">
                <option value="1" selected>Tên Phòng</option>
                <option value="2">Tên Chủ Trọ</option>
            </select>
            <input class="grow rounded-md bg-gray-300 px-2 focus:bg-white focus:outline-blue-336B87" type="text"
                placeholder="Nhập tên bạn muốn tím kiếm">
            <a class="flex items-center rounded-md bg-blue-336B87 px-3 font-semibold text-white" href="">
                Tìm kiếm
            </a>
        </div>
        <p class="mt-4 text-[28px] font-semibold text-blue-336B87">Danh sách các phòng trọ</p>
        <div class="mt-4 grid gap-4 md:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2">
            <a href="{{ route('detail') }}">
                <x-motel.card></x-motel.card>
            </a>
        </div>
    </x-slot>
</x-app>
