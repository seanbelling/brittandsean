var GuestbookView = Backbone.View.extend({

	initialize: function(options) {
		this.template = TEMPLATES.guestbook;
    this.options = options;
	},

  render: function() {

    this.$el.html(this.template({
      entries: this.options.collection
    }));
    return this;

  }

});