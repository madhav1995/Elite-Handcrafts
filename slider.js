
    var images = ['images/slide1.jpg', 'images/slide2.jpg', 'images/BG.jpg'];

    var x = 0;

    var imgs = document.getElementById('img');

    setInterval(slider, 10000);


    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";


    }