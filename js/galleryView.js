(function () {
    var galleryView = {
        init: function () {
            window.addEventListener('load', function () {

                var picturesArray = ['../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0001.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0002.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0003.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0004.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0005.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0006.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0007.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0008.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0009.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0010.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0011.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0012.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0013.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0014.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0015.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0016.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0017.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0018.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0019.png',
                    '../files/pictures/gallery pictures/Espace Confluences - 26 septembre 2015/Espace Confluences - 26 septembre 2015-0020.png'];

                var leftControl = document.getElementById('picturesLeftControl');
                leftControl.style.display = 'none';

                var rightControl = document.getElementById('picturesRightControl');

                var pictureId = 0;

                var picture = document.getElementById('slideShow');

                rightControl.addEventListener('click', function () {
                    leftControl.style.display = 'block';
                    pictureId++;
                    if (pictureId == picturesArray.length - 1) {
                        rightControl.style.display = 'none';
                    }
                    picture.src = picturesArray[pictureId];
                });

                leftControl.addEventListener('click', function () {
                    pictureId--;
                    if (pictureId == 0) {
                        leftControl.style.display = 'none';
                    }
                    if (rightControl.style.display == 'none') {
                        rightControl.style.display = 'block';
                    }
                    picture.src = picturesArray[pictureId];
                })
            })
        }
    };
    galleryView.init();
})();
