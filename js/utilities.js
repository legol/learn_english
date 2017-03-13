if (!Utilities) {
  var Utilities = function () {
    this.data = new Object();

    this.data.position = new Object();
    console.log("Utilities loaded...");
  };

  Utilities.prototype = {
    init: function () {
      console.log("Utilities initialized.");
    },

    post: function(_url, _data, _onSuccess, _onError){
      console.log("Utilities commit called.");

			$.ajax({
			  url : _url,
			  type: "POST",
			  contentType: "application/json; charset=utf-8",
				dataType: "json",
				data : _data,
			  success: function(data, textStatus, jqXHR)
			  {
					if (_onSuccess) {
						_onSuccess(data);
					}
			  },
			  error: function (jqXHR, textStatus, errorThrown)
			  {
					if (_onError) {
						_onError(errorThrow);
					}
			  }
			});
    },

  };
}
