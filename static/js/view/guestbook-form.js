var GuestbookFormView = Backbone.View.extend({

  events: {
    'focus textarea': 'onFocus',
    'blur textarea': 'onBlur',
    'click #guestbook-submit': 'formSubmit'
  },

	initialize: function(options) {
    this.template = TEMPLATES.guestbookForm;
    this.options = options;
    _.bindAll(this, 'formSubmit');
    this.defaultText = 'write your message here';
	},

  render: function() {
    this.$el.html(this.template());
    return this;
  },

  onFocus: function(e) {
    var $textArea = $(e.target);
    if ($textArea.val() == this.defaultText) {
      $textArea.val('').css('color', '#000');
    }
  },

  onBlur: function(e) {
    var $textArea = $(e.target);
    if (!$textArea.val()) {
      $textArea.val(this.defaultText).css('color', '#999');
    }
  },

  formSubmit: function(e) {
    var that = this;
    var $form = this.$el.find('form');
    var $inputs = $form.find('input[type="text"]');
    var isComplete = true;
    _.each($inputs, function(input) {
      var $input = $(input);
      if (!$input.val().trim()) {
        isComplete = false;
        return false; //break out of each loop
      }
    });
    if (!isComplete) {
      alert('Please fill in all fields.');
      return false;
    }
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: '/guestbook-submit',
      data: $form.serialize(),
      success: function(response) {
        var newEntry = new GuestbookModel(response);
        that.trigger('newEntry', newEntry);
      }
    })

  }

});