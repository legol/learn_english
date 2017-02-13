if (!Utilities) {
  var Utilities = function () {
    this.data = new Object();

    this.data.position = new Object();

    var log = log4javascript.getDefaultLogger();
    log.info("Utilities loaded...");
  };

  Utilities.prototype = {
    init: function () {
      var log = log4javascript.getDefaultLogger();
      log.info("Utilities initialized.");
    },

    commit: function(_url, _data, _onSuccess, _onError){
      var log = log4javascript.getDefaultLogger();
      log.info("Utilities commit called.");
			
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
