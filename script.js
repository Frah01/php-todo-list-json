const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            message: 'ciao',
        }
    }
}).mount('#app')