import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    theme:{
        extend: {
            colors: {
                primary: '#6366f1',
                secondary: '#8b5cf6',
                accent: '#06b6d4'
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif']
            }
        }
    },
    server: {
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
