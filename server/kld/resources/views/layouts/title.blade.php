{{-- 認証系 --}}
@if (Route::is('login'))
<p>ログイン</p>
@elseif (Route::is('register'))
<p>ユーザー新規登録</p>
{{-- ナレッジ系 --}}
@elseif (Route::is('article.index'))
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
@elseif (Route::is('category.edit'))
<p>カテゴリ編集</p>
{{-- クライアント系 --}}
@elseif (Route::is('client.index'))
<p>クライアント一覧</p>
@elseif (Route::is('client.create'))
<p>クライアント作成</p>
@elseif (Route::is('client.edit'))
<p>クライアント編集</p>
@endif