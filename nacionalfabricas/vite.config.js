import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,       // Garante que o Vite gere o manifest.json
        outDir: 'public/build',  // Define a pasta onde os arquivos compilados serão colocados
        rollupOptions: {
            output: {
                chunkFileNames: 'js/[name]-[hash].js',  // Personalize os nomes dos arquivos JS
                entryFileNames: 'js/[name].js', // Personalize os nomes dos arquivos de entrada JS
                assetFileNames: 'assets/[name]-[hash][extname]'  // Personalize os nomes dos arquivos estáticos
            }
        }
    }
});
