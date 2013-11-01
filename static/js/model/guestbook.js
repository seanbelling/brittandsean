var GuestbookModel = Backbone.Model.extend({

	defaults: {
		id: null,
		created_at: null,
    date: null,
		name: '',
		message: ''
	},

  getFormattedDate: function() {
    var t = this.get('created_at').split(/[- :]/);
    var d = new Date(t[0], t[1]-1, t[2], t[3], t[4], t[5]);
    return d;
  }

});