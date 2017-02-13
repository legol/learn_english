/**
 * Created by ChenJie3 on 2016/2/18.
 */

if (!TestController) {
    var TestController = function () {
        this.data = new Object();
        var log = log4javascript.getDefaultLogger();
        log.info("TestController loaded...");
    };

    TestController.prototype = {
        main: {
            init: function (data) {
                var log = log4javascript.getDefaultLogger();
                log.info("TestController initialized.");

                var r = new Render();
                r.render($("#test_container"), "resources/templates/test.html", data);
            },
        },
    };

    window.testController = new TestController();
}
