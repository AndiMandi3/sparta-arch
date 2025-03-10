const frames = [];
for (let i = 1; i <= 7; i++) {
  frames[i] = document.getElementById(`showContent${i}`);
}

const buttons = [];
for (let i = 1; i <= 7; i++) {
  buttons[i] = document.getElementById(`content-${i}`);
  buttons[i].addEventListener('click', () => {
    // Удалите класс 'active' со всех кнопок
    buttons.forEach(button => button.classList.remove('active'));
    // Добавьте класс 'active' к текущей кнопке
    buttons[i].classList.add('active');
    // Плавное переключение контейнеров
    frames.forEach(frame => {
      frame.style.opacity = '0';
      frame.style.display = 'none';
    });
    frames[i].style.display = 'flex';
    setTimeout(() => {
      frames[i].style.opacity = '1';
    }, 100);
  });
}
jQuery.noConflict();
jQuery(document).ready(function($) {
    $('#nf-field-6').inputmask({
      mask: '+7 (999) 999-99-99'
    });
  });

  window.addEventListener('DOMContentLoaded', function() {
    var containers = document.querySelectorAll('.container-animated');
    if (containers.length > 0) {
        containers[0].style.opacity = '1';
    }

    var videoBackground = document.querySelector('.video-background video');
    if (videoBackground) {
        videoBackground.style.opacity = '1';
    }
});

window.addEventListener('scroll', function() {
    var containers = document.querySelectorAll('.container-animated');
    var windowHeight = window.innerHeight;
    containers.forEach(function(container, index) {
        var containerPosition = container.getBoundingClientRect();
    
        if (containerPosition.top < windowHeight) {
            container.style.opacity = '1';
        }
    });
});

document.getElementById('address-button').addEventListener('click', function() {
  if (this.innerText === 'Адрес успешно скопирован!') {
    this.innerText = "Вы уже скопировали адрес (─‿‿─)";
  } 
  else if (this.innerText !== "Вы уже скопировали адрес (─‿‿─)") {
    var text = this.innerText;
    var tempInput = document.createElement('input');
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);
    this.innerText = 'Адрес успешно скопирован!';
  }
});



  