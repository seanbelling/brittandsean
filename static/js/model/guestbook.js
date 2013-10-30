var GuestbookModel = Backbone.Model.extend({
	defaults: {
		id: null,
		created_at: null,
		name: '',
		message: ''
	}
});