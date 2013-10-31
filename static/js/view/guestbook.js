var GuestbookView = Backbone.View.extend({

	initialize: function(options) {
		this.template = TEMPLATES.guestbook;
    this.formTemplate = TEMPLATES.guestbookForm;
    this.options = options;
	},

  render: function() {

    this.$el.html(this.template({
      entries: this.options.collection
    }));

    this.$el.find('#form-target').html(this.formTemplate);
    var $textarea = this.$el.find('textarea');
    $textarea.focus(function() {
      $(this).val('').css('color', '#000');
    });

    return this;

  }

});