{{-- ナレッジ系 --}}
@if (Route::is('article.index'))
<p>ナレッジ一覧</p>
@elseif (Route::is('article.create'))
<p>ナレッジ作成</p>
@elseif (Route::is('article.edit'))
<p>ナレッジ編集</p>

{{-- カテゴリ系 --}}
@elseif (Route::is('category.index'))
<p>カテゴリ一覧</p>
@elseif (Route::is('category.create'))
<p>カテゴリ作成</p>
@endif