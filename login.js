const wrapper = document.querySelector('.form-wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopun = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

btnPopun.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});



var mousePosition;
var offset = [0,0];
var div;
var isDown = false;

div = document.querySelector('.form-wrapper');
document.body.appendChild(div);

div.addEventListener('mousedown', function(e) {
    isDown = true;
    offset = [
        div.offsetLeft - e.clientX,
        div.offsetTop - e.clientY
    ];
}, true);

document.addEventListener('mouseup', function() {
    isDown = false;
}, true);

document.addEventListener('mousemove', function(event) {
    event.preventDefault();
    if (isDown) {
        mousePosition = {
            x: event.clientX,
            y: event.clientY
        };
        
        var newX = mousePosition.x + offset[0];
        var newY = mousePosition.y + offset[1];
        
        newX = Math.max(0, Math.min(newX, window.innerWidth - div.offsetWidth));
        newY = Math.max(0, Math.min(newY, window.innerHeight - div.offsetHeight));
        
        div.style.left = newX + 'px';
        div.style.top = newY + 'px';
    }
}, true);