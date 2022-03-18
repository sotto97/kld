<section id='nav' class="flex w-full py-4">
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('article.index') }}" class="hover:no-underline hover:text-white">
            <button class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                ナレッジ登録
            </button>
        </a>
    </div>
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('category.index') }}" class="hover:no-underline hover:text-white">
            <button class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                カテゴリ登録
            </button>
        </a>
    </div>
    <div class="flex1 w-1/3 text-center text-indigo-500">
        <a href="{{ route('client.index') }}" class="hover:no-underline hover:text-white">
            <button class="w-2/3 py-2 mx-auto border-2 border-indigo-500 hover:text-white hover:bg-indigo-500 transition rounded-full">
                クライアント登録
            </button>
        </a>
    </div>
</section>