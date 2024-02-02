const mix = require('laravel-mix');
const LaravelVitePlugin = require('laravel-vite-plugin');
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/styles.css', 'public/css', [require('postcss-import'),
        require('tailwindcss@latest'),
        require("tailwindcss-animated"),
        require("postcss "),
        require("autoprefixer")
    ])

.copyDirectory('resources/fonts', 'public/fonts')
    .webpackConfig({
        plugins: [
            new LaravelVitePlugin({
                dev: !mix.inProduction(),
            }),
        ],
    });

if (mix.inProduction()) {
    mix.version();
}