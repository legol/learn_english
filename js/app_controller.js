if (!AppController) {
  var AppController = function () {
    this.data = new Object();
    console.log("AppController loaded...");
  };

  AppController.prototype = {
    init: function (data) {
      console.log("AppController initialized.");
    },

    setReactComponent: function (react_component: React.Component) {
      console.log("AppController initialized.");
      console.log('haha');
      this.data.react_component = react_component;
    },

    loadData: function() {
      // trigger async network operation
      $.ajax({
        url: 'http://192.168.1.240:10001/index.php?c=sentences&m=getSentences',
        dataType: 'json',
        async: true,
        type: 'POST',
        timeout: 30000, // milliseconds
        context:this,
      })
        .done(function(data, textStatus, jqXHR) {
          if (data.error_code === 0 && data.sentences instanceof Array) {
            this.data.react_component.showSentences(data.sentences);
          }
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
          alert( "error" );
          // this.data.react_component.showError();
          this.data.react_component.showSentences(new Array("Saab", "Volvo", "BMW"));
        })
        .always(function() {
          alert( "complete" );
        });
    }
  };

  window.appController = new AppController();
}
