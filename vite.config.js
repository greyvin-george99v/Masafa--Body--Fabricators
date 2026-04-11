import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        // Adding the host and hmr settings helps Laravel find the Vite server
        host: '127.0.0.1', 
        hmr: {
            host: '127.0.0.1',
        },
        watch: {
            usePolling: true, // Crucial for Windows to detect file changes
            ignored: ['**/storage/framework/views/**'],
        },
    },
});