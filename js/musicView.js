(function () {
    var musicView = {
        init:function () {
            $(document).ready(function () {

                var trackInformationContainer = $("#trackInformationContainer");

                // Displaying song information and audio controls when the user click on the title in the menu.
                $("#trackMenu").find("li").click(function () {
                    var $i = $(this).index();
                    trackInformationContainer.load("../controller/musicViewController.php", {
                        musicId: $i
                    });
                });

                // Button play management.
                trackInformationContainer.on("click", "#buttonPlay", function () {
                    $(this).fadeOut();
                    $("#buttonPause").fadeIn();
                    var $i = $(this).attr("tabindex");
                    var song = document.getElementById($i);
                    song.play();

                    // Song management when the end of the song was detected.
                    song.addEventListener('ended', function () {
                        $("#buttonPause").fadeOut();
                        $("#buttonPlay").fadeIn();
                    })
                });

                // Button pause management.
                trackInformationContainer.on("click", "#buttonPause", function () {
                    $(this).fadeOut();
                    $("#buttonPlay").fadeIn();
                    var $i = $(this).attr("tabindex");
                    var song = document.getElementById($i);
                    song.pause();
                });

                // Button stop management.
                trackInformationContainer.on("click", "#buttonStop", function () {
                    $("#buttonPause").fadeOut();
                    $("#buttonPlay").fadeIn();
                    var $i = $(this).attr("tabindex");
                    var song = document.getElementById($i);
                    song.pause();
                    song.currentTime = 0;
                })

            })
        }
    };
    musicView.init()
})();
