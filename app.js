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
    created(){}

}
).mount('#app')