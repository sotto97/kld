# 思いつく限りのやることをどんどん記載してく

**※まずはバックエンドを最優先として、実装していく**

## バックエンド

-   投稿機能のバリデーション実装
-   ~~投稿編集機能の実装~~【2022/02/15 済】
    -   ~~編集画面は完成。更新はまだ試してない~~
-   ~~カテゴリ機能のバリデーション実装~~
    -   エラ〜メッセージの日本語化
-   クライアントのバリデーション実装

## フロントエンド

### CSS

-   よく使うボタンをユーティリティ化

### JS

-   Vue js を使えるよ
-   Vue Markdown のインストール
-   カテゴリ・クライアント作成機能のコンポーネント化
-   Vuetify も入れたいね

## インフラ

-   完全 Docker
-   AWS にデプロイ
-   Teraform でインフラ環境をコード化

### その他

-   ~~Font Awesome のインストール~~(2022/02/13)
    -   参考リンク
        > -   https://qiita.com/Charry/items/95df07e171e469b68ea7
-   UI フローの作成
-   テーブル定義・ER 図の作成

# 開発補足メモ

-   Github での認証が切れた時、再認証をする方法(Mac で開発する場合のみ)

    -   参考リンク
        > -   https://docs.github.com/ja/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token
        >
        > -   https://qiita.com/shiro01/items/e886aa1e4beb404f9038
    -   上記の手順で行えば OK

-   Markdown の書き方

    > https://qiita.com/tbpgr/items/989c6badefff69377da7

-   Prettier が VScode で機能しない場合、、、

    -   Code formatter configured as formatter PHP ... 的な文が出た時

    ```bash
    ## 以下のコマンドを実行してから Prettier を再読み込みしたら可能になった。
    npm install --save-dev prettier @prettier/plugin-php
    ```

    ```json
    // package.jsonに以下のように書き込まれる
    "devDependencies": {
        "@prettier/plugin-php": "^0.18.2",
        "axios": "^0.19",
    },
    ```

    > 参考記事
    >
    > -   https://qiita.com/AkiraTameto/items/4cefe2608b03f396c7cd
    > -   https://qiita.com/allJokin/items/7f9d6f98be27449ab624
