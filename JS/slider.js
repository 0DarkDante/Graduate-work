const prev = document.getElementById('btn-prev'),
      next = document.getElementById('btn-next'),
      slides = document.querySelectorAll('.slide');

let index = 0;

const activeSlide = n => {
    for(slide of slides) {
        slide.classList.remove('active');
    }
    slides[n].classList.add('active');
}

const prepareCurrentSlide = ind => {
  activeSlide(index);    
}

const nextSlide = () => {
    if(index == slides.length - 1) {
      index = 0;
      prepareCurrentSlide(index);
    } else {
      index ++;
      prepareCurrentSlide(index);
    }
}

const prevSlide = () => {
  if(index == 0) {
     index = slides.length - 1;
     prepareCurrentSlide(index);
  } else {
    index--;
    prepareCurrentSlide(index);
  }
}

next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);

document.createElement('figure');
document.createElement('figcaption');



document.addEventListener('click', function(event) {
  var userMenu = document.querySelector('.user-menu');
  var userDropdown = document.querySelector('.user-dropdown');

  if (event.target.closest('.user-menu')) {
    userDropdown.style.display = 'block';
  } else {
    userDropdown.style.display = 'none';
  }
});





// Перегляд попереднього зображення фото профілю
const profileImageInput = document.getElementById('profile-image');
const previewImage = document.getElementById('preview-image');

profileImageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function(event) {
    previewImage.src = event.target.result;
  };

  reader.readAsDataURL(file);
});

// Показати або приховати пароль
const showPasswordButton = document.getElementById('show-password-button');
const passwordInputs = document.querySelectorAll('input[type="password"]');

showPasswordButton.addEventListener('click', function() {
  passwordInputs.forEach(function(input) {
    if (input.type === 'password') {
      input.type = 'text';
      showPasswordButton.textContent = 'Приховати пароль';
    } else {
      input.type = 'password';
      showPasswordButton.textContent = 'Показати пароль';
    }
  });
});

// Відображення інформації про користувача
const userFullName = document.getElementById('user-fullname');
const userEmail = document.getElementById('user-email');
const userPhone = document.getElementById('user-phone');
const userInfoSection = document.getElementById('user-info');

// Отримання даних про користувача з сервера (PHP)
// Застосуйте власну логіку для отримання даних про користувача

// Приклад даних про користувача (замість отримання з сервера)
const userData = {
  fullName: 'Іванов Іван',
  email: 'ivanov@example.com',
  phone: '+380123456789'
};

userFullName.textContent = userData.fullName;
userEmail.textContent = userData.email;
userPhone.textContent = userData.phone;

userInfoSection.style.display = 'block';


// для сторінки NikeTiempo

window.addEventListener('load', function() {
  var miniPhotos = document.querySelectorAll('.NikeTiempoMiniFhoto');
  var bigPhoto = document.querySelector('.NikeTiempoBigFhoto');

  miniPhotos.forEach(function(photo) {
    photo.addEventListener('click', function() {
      var newSrc = this.getAttribute('src');
      bigPhoto.setAttribute('src', newSrc);
    });
  });
});