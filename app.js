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
                // console.log(this.tasks)
			})
        },
        saveTasks() {
            const data = {
				task: {
                    text: this.newTask,
                    done: false
                }
			}
            // console.log(data);
            axios
				.post('store.php', data, {
					headers: {
						'Content-Type': 'multipart/form-data',
					},
				})
				.then((res) => {
					this.tasks = res.data.tasks
                    console.log(res.data.tasks)
					this.newTask = ''
				})
        }
    },
    created(){
        console.log('ciao'),
        this.fetchData()
    }

}
).mount('#app')