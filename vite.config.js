import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/styles.css',
                'resources/fonts/LexendDeca-Regular.woff',
                'resources/fonts/LexendDeca-Medium.woff',
                'resources/fonts/LexendDeca-Bold.woff',
                'resources/fonts/Hilmar-Regular.woff',
                'resources/fonts/Hilmar-Bold.woff',

            ],
            refresh: true,
        }),
    ],
    output: 'public/assets',
});