const { createApp } = Vue

createApp({
	data() {
		return {
			tasks: [],
			newTask: '',
		}
	},
    methods : {
        consoleLog() {
            console.log(this.newTask)
        }
    },
    mounted(){
        console.log('ciao')
    }

}
).mount('#app')