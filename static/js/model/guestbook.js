var GuestbookModel = Backbone.Model.extend({
	defaults: {
		id: null,
		created_at: null,
    date: null,
		name: '',
		message: ''
	}
});