(function () {
    var textViewAjaxManagement = {
        init: function () {
            $(document).ready(function () {

                $("#songTextMenu").find("li").click(function () {
                    var $i = $(this).index();
                    $("#songTextInformationContainer").load("../controller/textViewController.php",
                        {
                            textId: $i
                        })
                });

            });
        }
    };
    textViewAjaxManagement.init()
})();