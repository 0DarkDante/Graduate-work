window.addEventListener('load', function() {
  var miniPhotos = document.querySelectorAll('.NikeTiempoMiniFhoto');
  var bigPhoto = document.querySelector('.NikeTiempoBigFhoto');

  miniPhotos.forEach(function(photo) {
    photo.addEventListener('click', function(event) {
      event.preventDefault(); // Заборонити перехід по посиланню

      var newSrc = this.getAttribute('src');
      bigPhoto.setAttribute('src', newSrc);
    });
  });
});