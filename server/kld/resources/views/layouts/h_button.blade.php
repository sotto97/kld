<section id='nav' class="flex w-full py-4">
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('article.create') }}" class="hover:no-underline hover:text-white">
            <button
                class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                今日のナレッジを登録する
            </button>
        </a>
    </div>
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('category.create') }}" class="hover:no-underline hover:text-white">
            <button
                class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                カテゴリを登録する
            </button>
        </a>
    </div>
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('client.create') }}" class="hover:no-underline hover:text-white">
            <button
                class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                クライアントを登録する
            </button>
        </a>
    </div>
</section>