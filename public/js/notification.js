Vue.component('notification', {
	template: '#notification-template',
	props: ['type'],
	data: function() {
		return {
			show: true
		};
	},
	computed: {
		notificationClasses: function() {
			var type = this.type;
			return {
				'notification': true,
				'is-success': type == 'success',
				'is-danger': type == 'danger',
				'is-info': type == 'info'
			};
		}
	}
});

var appNotification = new Vue({
	el: '#notification-app'
});