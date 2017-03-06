/*Vue.component('tasks', {
	template: '#tasks-template',
	props: ['list'],
});

var taskApp = new Vue({
	el: '#task-app',
});*/

////  AJAX
var taskComponent = Vue.component('tasks', {
	template: '#tasks-template',
	data: function() {
		return {
			list: []
		};
	},
	created: function() {
		this.fetchTaskList();
	},
	methods: {
		fetchTaskList: function() {
			$.getJSON('api/tasks', function(tasks) {
				this.list = tasks;
			}.bind(this));
		},
		
		deleteTask: function(task) {
			this.list.$remove(task);
		}
	}
});

var taskApp = new Vue({
	el: '#task-app'
});