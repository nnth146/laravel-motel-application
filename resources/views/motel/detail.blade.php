<x-app>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="left">
                <x-buttons.laravel></x-buttons.laravel>
            </x-slot>
            <x-slot name="right">
                @if (false)
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
                                        <a href="#">
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
        <div class="mt-12 grid grid-cols-2 gap-4 rounded-md border-2 border-solid border-blue-336B87 p-2">
            <img class="w-full rounded-md" src="{{ Vite::asset('resources/images/motel.jpg') }}" alt="motel">
            <div
                class="relative grid grid-cols-[minmax(0,1fr)_50px] overflow-y-auto text-lg xl:text-xl text-blue-336B87 scrollbar-hide">
                <div class="break-words">
                    <p>Tên phòng: <span class="font-semibold">Phòng 301</span></p>
                    <p>Giá: <span class="font-semibold">1 triệu/1 tháng</span></p>
                    <p>Đồ dùng: <span class="font-semibold">Điều hoà + bình nóng lạnh</span></p>
                    <p>Địa chỉ: <span class="font-semibold">Tổ 2 phường Tân Thịnh, TP Thái Nguyên</span></p>
                    <p>Số điện thoại: <span class="font-semibold">0385328068</span></p>
                    <p>Thông tin thêm: <span class="font-semibold">Phòng sạch sẽ gọn gàng</span></p>
                </div>

                <div></div>

                <div class="absolute top-0 right-0 m-2 flex items-center gap-1 text-blue-336B87">
                    <p class="font-semibold">99</p>
                    <x-icon class="h-4 w-4 fill-blue-336B87" name="user"></x-icon>
                </div>
                <img class="absolute bottom-0 right-0 z-10 m-2 h-9 w-9 rounded-full"
                    src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="">
            </div>
        </div>

        <div class="my-12">
            <p class="text-2xl text-blue-336B87 font-semibold">Danh sách các phòng có cùng chủ phòng</p>
            <div class="mt-4 grid gap-4 md:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2">
                <a href="{{ route('detail') }}">
                    <x-motel.card></x-motel.card>
                </a>
                <a href="{{ route('detail') }}">
                    <x-motel.card></x-motel.card>
                </a>
                <a href="{{ route('detail') }}">
                    <x-motel.card></x-motel.card>
                </a>
                <a href="{{ route('detail') }}">
                    <x-motel.card></x-motel.card>
                </a>
            </div>
        </div>
    </x-slot>
</x-app>
