<div class="w-full relative h-full overflow-y-auto">
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
                <p class="text-gray-700 dark:text-gray-300 tracking-tight text-sm leading-snug">{{ $item->isi }}</p>
            </div>
        </div>
    @empty
        <div
            class="w-full h-full flex justify-center items-center text-gray-300 dark:text-gray-700 text-lg tracking-tighter">
            Masih kosong cuy, belum ada yang curhat.</div>
    @endforelse

    <div
        class="z-50 w-full fixed bottom-0 left-0 px-4 py-2 border-t border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 min-h-[7%]">
        <div class="flex justify-between items-center gap-4">
            <p class="text-gray-400 dark:text-gray-500 tracking-tighter font-medium text-xs max-w-[60%]">
                Catatan : Semua orang di sini dapat melihat cerita yang kamu kirim.
            </p>
            <button
                class="px-3 py-2 bg-indigo-600 dark:bg-indigo-500 text-gray-50 dark:text-gray-100 tracking-tighter text-sm font-semibold flex items-center gap-2 whitespace-nowrap rounded" id="tombol-tambah">
                <svg class="w-4 h-4 text-gray-50 dark:text-gray-100" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path
                        d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z" />
                    <path
                        d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z" />
                </svg>
                Buat ceritamu
            </button>
        </div>
    </div>
</div>
