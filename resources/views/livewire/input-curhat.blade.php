<div class="z-[100] fixed inset-0 p-4 bg-gray-50 dark:bg-gray-900" id="tambah-wrapper" data-status="inactive">
    <form wire:submit.prevent='proses'>
        <div>
            <button type="button" class="float-right" id="tombol-tutup-tambah-wrapper">
                <svg class="w-5 h-5 text-gray-200 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        {{-- <div class="h-full w-full grid gap-1" style="grid-template-columns: 5fr 1fr">
            <div class="input-wrapper h-full">
                <textarea wire:model='isi' name="curhat" id="curhat"
                    class="bg-gray-100 border border-gray-300 placeholder-gray-400 text-gray-800 text-sm rounded focus:ring-indigo-600 focus:border-indigo-600 block w-full dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-600 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500 resize-none"
                    placeholder="Tulis ceritamu hari ini!"></textarea>
            </div>
            <button type="submit" class="rounded flex justify-center items-center bg-indigo-600 dark:bg-indigo-500">
                <svg class="rotate-90 w-5 h-5 text-gray-50 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path
                        d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z" />
                </svg>
            </button>
        </div> --}}
    </form>
</div>
