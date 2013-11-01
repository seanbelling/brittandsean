var GuestbookView = Backbone.View.extend({

	initialize: function(options) {
    _.bindAll(this, 'newEntry');
		this.template = TEMPLATES.guestbook;
    this.options = options;
	},

  render: function() {
    this.$el.html(this.template({
      entries: this.options.collection
    }));
    var formView = new GuestbookFormView();
    formView.bind('newEntry', this.newEntry);
    this.$el.find('#form-target').html(formView.render().$el);
    return this;
  },

  newEntry: function(entry) {
    var newCollection = new GuestbookCollection();
    newCollection.add(entry);
    newCollection.add(this.options.collection.models);
    this.options.collection = newCollection;
    this.render();
  }

});