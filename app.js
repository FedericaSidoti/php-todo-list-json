const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [],
			newTask: '',
		}
	},
    methods : {
        deleteTask(index){
			const data= {
				deleteindex: index
			}
            console.log('eliminato', index)
			// axios
			// .post('store.php', data,{
			// 	headers: {
			// 		'Content-Type': 'multipart/form-data',
			// 	},
			// })
			
			
        },
        fetchData() {
			axios.get('server.php').then((res) => {
				// console.log(res.data.results)
                this.tasks = res.data.results
                // console.log(this.tasks)
			})
        },
        saveTasks() {
            if (!this.newTodo) {
				return
			}

            const data = {
				task: this.newTask
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
                    console.log(res.data)
					this.newTask = ''
			})
        }, 
    },
    created(){
        console.log('ciao'),
        this.fetchData();
    }
}).mount('#app')