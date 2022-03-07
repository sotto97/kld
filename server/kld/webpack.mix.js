const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss"); // 追加

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// ESLintに関する設定（この部分を丸ごと追記するイメージです）
if (!mix.inProduction()) {
    // 本番環境ではESLintは使用しない
    mix.webpackConfig({
        module: {
            rules: [
                {
                    enforce: "pre",
                    exclude: /node_modules/,
                    loader: "eslint-loader",
                    test: /\.(js|vue)?$/,
                },
            ],
        },
    });
}

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .options({
        // 追加
        processCssUrls: false, // 追加
        postCss: [tailwindcss("./tailwind.config.js")], // 追加
    }); // 追加
