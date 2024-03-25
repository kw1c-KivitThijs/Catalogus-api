// Import Vue and Vue Router if you're using it
import { createApp } from 'vue';
import router from './router/router.js'; // Import your Vue Router configuration
import App from './App.vue'; // Import the main App component

// Create a new Vue application instance
const app = createApp(App);

// Mount the Vue application onto the DOM element with id 'app'
app.use(router).mount('#app');
