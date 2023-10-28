<div class="w-full px-4 relative h-full overflow-y-auto">
    @forelse ($curhat as $item)
        <div
            class="w-full p-4 bg-gray-100 outline-gray-300 outline-1 outline-offset-[-1px] outline dark:bg-gray-800 dark:outline-gray-700 rounded flex flex-col gap-4 mb-3">
            <div class="user-detail-wrapper flex gap-3">
                <img src="{{ asset('img/user.png') }}" class="h-10" alt="">
                <div class="user-info">
                    <p class="text-indigo-600 dark:text-indigo-400 font-bold tracking-tighter">Anonymous</p>
                    <p class="text-gray-400 text-xs dark:text-gray-500 tracking-tighter font-medium">13 July 2003</p>
                </div>
            </div>
            <div class="user-curhat">
                <p class="text-gray-700 dark:text-gray-300 tracking-tighter font-medium text-sm">{{ $item->isi }}</p>
            </div>
        </div>
    @empty
        <div
            class="w-full h-full flex justify-center items-center text-gray-300 dark:text-gray-700 text-lg tracking-tighter">
            Masih kosong cuy, belum ada yang curhat.</div>
    @endforelse
</div>
