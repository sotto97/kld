/**
 * vue / js ファイルのコーディンク規約を明示している
 * ---------------------------------------------------
 * 20220324 新規作成
 */
module.exports = {
    root: true,
    parserOptions: {
        parser: "babel-eslint",
    },
    env: {
        browser: true,
    },
    extends: ["standard", "plugin:vue/recommended", "plugin:prettier/recommended", "prettier/vue"],
    plugins: [
        "vue",
        "prettier", // prettierをESLintと併用します
    ],
    rules: {
        // ESLintの整形ルールのうち、自分がoffにしたいルールなどを指定する
        "vue/no-v-html": "off", // v-htmlの使用について
        "vue/prop-name-casing": "off", // Propsの変数の命名規則について
        "no-console": "off", // console.log()の使用について
        "no-unused-vars": "off", // 使われていない変数について
        camelcase: "on", // キャメルケースについて

        // この先はPrettierのルール
        "prettier/prettier": [
            "error",
            {
                printWidth: 120,
                wordWrap: true,
                tabWidth: 2,
                useTabs: false,
                singleQuote: true,
                trailingComma: "all",
                bracketSpacing: true,
                arrowParens: "avoid",
                semi: false,
            },
        ],
    },
};
