import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    build:{
        rollupOptions : {
            output : {
                assetFileNames : (assertInfo) =>{
                    return `axsadev-[hash][extname]`;
                }
            }
        }
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    
});
