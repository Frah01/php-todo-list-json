const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            language: '',
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    },
    methods: {
        addLanguage() {
            const data = {
                todoLang: this.language
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.language = '';
                this.todoList = response.data;
            });
        },
        remove(index) {
            const data = {
                delete: index
            }
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoList = response.data;
            });
        },
    },

}).mount('#app')