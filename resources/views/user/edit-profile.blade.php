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
        <div class="mt-12 grid grid-cols-1 gap-3 xl:grid-cols-2">
            <div class="flex flex-col justify-end gap-2 rounded-md bg-zinc-50 p-8">
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="name">Name</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="name" type="text" value="Nguyễn Như Tuấn Hưng" disabled>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="phone">Phone</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="phone" type="text" value="0385328068" disabled>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="description">Description</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="description" type="text" value="Không có thông tin thêm" placeholder="..." disabled>
                </div>
                <div class="flex flex-row justify-end gap-2">
                    <a class="w-20 rounded-md bg-blue-336B87 p-2 text-center font-semibold text-white"
                        href="">Save</a>
                    <a class="w-20 rounded-md bg-blue-336B87 p-2 text-center font-semibold text-white"
                        href="">Cancel</a>
                </div>
            </div>

            <div class="flex flex-col justify-end gap-2 rounded-md bg-zinc-50 p-8">
                <div class="group relative h-32 w-32 overflow-hidden rounded-full">
                    <label class="absolute z-20 hidden h-full w-full items-center justify-center group-hover:flex"
                        for="avatar">
                        <x-icon class="h-8 w-8 fill-white" name="add"></x-icon>
                    </label>
                    <div class="absolute z-10 hidden h-full w-full bg-slate-300 opacity-30 group-hover:block">
                    </div>
                    <input id="avatar" type="file" hidden>
                    <img class="mx-auto" src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="avatar">
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="phone">Phone</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="phone" type="text" value="0385328068" disabled>
                </div>
                <div class="flex flex-col">
                    <label class="mb-1 text-lg font-semibold text-blue-336B87" for="description">Description</label>
                    <input
                        class="rounded-md border-[1px] border-solid border-blue-336B87 px-3 py-2 text-blue-336B87 focus:outline-blue-336B87"
                        id="description" type="text" value="Không có thông tin thêm" placeholder="..." disabled>
                </div>
                <div class="flex flex-row justify-end gap-2">
                    <a class="w-20 rounded-md bg-blue-336B87 p-2 text-center font-semibold text-white"
                        href="">Save</a>
                    <a class="w-20 rounded-md bg-blue-336B87 p-2 text-center font-semibold text-white"
                        href="">Cancel</a>
                </div>
            </div>
        </div>

        <div class="my-12">
            <div class="flex justify-between">
                <p class="text-2xl font-semibold text-blue-336B87">Danh sách các phòng của bạn</p>
                <a class="w-20 rounded-md bg-blue-336B87 p-2 text-center font-semibold text-white"
                    href="">Add</a>
            </div>
            <div class="mt-4 grid gap-4 md:grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2">
                <div
                    class="grid h-64 cursor-pointer grid-cols-[40%_60%] grid-rows-1 rounded-md border-2 border-solid border-blue-336B87 p-1 shadow">
                    <div class="w-[100%] overflow-hidden">
                        <img class="h-full w-full" src="{{ Vite::asset('resources/images/motel.jpg') }}" alt="">
                    </div>
                    <div class="grid grid-cols-[minmax(0,1fr)_50px] p-2 text-lg text-blue-336B87">
                        <div class="h-full overflow-y-auto break-words scrollbar-hide">
                            <p>Tên phòng: <span class="font-semibold">Phòng 301</span></p>
                            <p>Giá: <span class="font-semibold">1 triệu/1 tháng</span></p>
                            <p>Đồ dùng: <span class="font-semibold">Điều hoà + bình nóng lạnh</span></p>
                            <p>Địa chỉ: <span class="font-semibold">Tổ 2 phường Tân Thịnh, TP Thái Nguyên</span></p>
                            <p>Số điện thoại: <span class="font-semibold">0385328068</span></p>
                            <p>Thông tin thêm: <span class="font-semibold">Phòng sạch sẽ gọn gàng</span></p>
                        </div>

                        <div class="relative">
                            <div class="absolute top-0 right-0 flex items-center gap-1 text-blue-336B87">
                                <p class="font-semibold">99</p>
                                <x-icon class="h-4 w-4 fill-blue-336B87" name="user"></x-icon>
                            </div>
                            <div class="absolute bottom-0 right-0 flex flex-col gap-1">
                                <a href="">
                                    <x-icon class="h-10 w-10 rounded-md bg-gray-100 p-2 fill-blue-336B87" name="edit"></x-icon>
                                </a>
                                <a href="">
                                    <x-icon class="h-10 w-10 rounded-md bg-gray-100 p-2 fill-blue-336B87" name="delete"></x-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app>
