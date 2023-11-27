const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [],
			newTask: '',
			index : null, 
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
            if (!this.newTask) {
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
					console.log('salvato')
			})
        }, 
		deleteTask(index){
			
			const data= {
				ind: index
			}
			axios
                .post('delete.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
            .then((res) => {
                console.log('eliminato', index);
                this.tasks = res.data.tasks;
            })
        },
    },
    created(){
        console.log('ciao'),
        this.fetchData();
    }
}).mount('#app')