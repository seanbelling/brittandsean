var GuestbookCollection = Backbone.Collection.extend({
	model: GuestbookModel,

  comparator: function(model) {
    return -model.get('id');
  }

});