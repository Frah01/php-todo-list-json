const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            todoList: [],
            linguaggio: '',
        }
    },
    methods: {
        addLanguage() {
            const lang = {
                todoLang: this.language
            }

            axios.post(this.apiUrl, lang, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.language = '';
                this.todoList = response.data;
            })
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
            console.log(this.todoList)
        });
    }
}).mount('#app')