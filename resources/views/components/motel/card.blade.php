@props(['motel' => null])

<div class="grid h-64 cursor-pointer grid-cols-[40%_60%] rounded-md border-2 border-solid border-blue-336B87 p-1 shadow">
    <div class="w-[100%] overflow-hidden">
        <img class="h-full w-full" src="{{ Vite::asset('resources/images/motel.jpg') }}" alt="">
    </div>
    <div
        class="relative grid grid-cols-[minmax(0,1fr)_50px] overflow-y-auto p-2 text-lg text-blue-336B87 scrollbar-hide">
        <div class="break-words">
            <p>Tên phòng: <span class="font-semibold">Phòng 301</span></p>
            <p>Trạng thái: <span class="font-semibold">Đã có người ở</span></p>
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
            src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="motel">

    </div>
</div>
