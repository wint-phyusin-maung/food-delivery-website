import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue'; 
import laravel from 'laravel-vite-plugin';
import { version } from 'vue';

export default defineConfig({
  plugins: [
    vue(3),
    version(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
});