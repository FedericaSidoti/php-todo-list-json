const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [],
			newTask: '',
		}
	},
    methods : {
        fetchData() {
			axios.get('server.php').then((res) => {
				// console.log(res.data.results)
                this.tasks = res.data.results
                console.log(this.tasks)
			})
        },
        saveTasks() {
            const data = {
				task: {
                    text: this.newTask,
                    done: false
                }
			}
            console.log(data);
        }
    },
    created(){
        console.log('ciao'),
        this.fetchData()
    }

}
).mount('#app')