import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                 'resources/js/app.js',
                'resources/css/layout.css',
                'resources/css/artikel.css',
                'resources/css/budaya.css',
                'resources/css/detail.css',
                'resources/css/explore.css',
                'resources/css/ragam.css',
                'resources/css/welcome.css',
                ],
            refresh: true,
        }),
    ],
});