(function () {
    var homeView = {
        init: function () {
            $(document).ready(function () {

                // Button play management.
                $(".buttonPlay").click(function () {
                    var $i = $(this).parent().index();
                    $(this).fadeOut();
                    $(".buttonPause:eq(" + $i + ")").fadeIn();
                    var song = document.getElementById($i);
                    song.play();
                    song.addEventListener('ended', function () {
                        $(".buttonPause:eq(" + $i + ")").fadeOut();
                        $(".buttonPlay:eq(" + $i + ")").fadeIn();
                    })
                });

                // Button pause management.
                $(".buttonPause").click(function () {
                    var $i = $(this).parent().index();
                    $(this).fadeOut();
                    $(".buttonPlay:eq(" + $i + ")").fadeIn();
                    var song = document.getElementById($i);
                    song.pause();
                });

                // Button stop management.
                $(".buttonStop").click(function () {
                    var $i = $(this).parent().index();
                    $(".buttonPlay:eq(" + $i + ")").fadeIn();
                    $(".buttonPause:eq(" + $i + ")").fadeOut();
                    var song = document.getElementById($i);
                    song.pause();
                    song.currentTime = 0;
                })
            })
        }
    };
    homeView.init()
})();
