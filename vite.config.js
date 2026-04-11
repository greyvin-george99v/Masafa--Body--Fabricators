import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/css/app.css',  // ← your actual path
                'public/js/app.js',    // ← your actual path
            ],
            refresh: true,
        }),
    ],
});