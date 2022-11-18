
let hamburguerMenu;

document.addEventListener("DOMContentLoaded", function() {
    hamburguerMenu =  document.getElementById('checkbox');
    document.getElementById('click-tap').innerHTML = 'Click';
    document.getElementById('about-modal-text').innerHTML = document.getElementById('about-text').innerHTML.replace('surrounding areas. ', 'surrounding areas.<br><br>');
    responsiveResize();
});

const responsiveResize = () => {
    const widthOutput =  window.innerWidth;
    // breakpoints
    
    if(widthOutput < 991.9){
        document.getElementById('click-tap').innerHTML = 'Tap';
    }
    else if(widthOutput >= 992){
        document.getElementById('click-tap').innerHTML = 'Click';
    }

    if(widthOutput < 1199.9){
        document.getElementById('hero-cta').classList.add('bl-btn-outline-light')
        document.getElementById('main-menu').style.display = 'none';
        document.getElementById('hero-cta-container').style.display = 'flex';
    }
    else if(widthOutput >= 1200){
        document.getElementById('hero-cta').classList.remove('bl-btn-outline-light');
        document.getElementById('main-menu').style.display = 'flex';
        document.getElementById('hero-cta-container').style.display = 'flex';
        if(hamburguerMenu.checked)
            hamburguerMenu.click();
    }
    
}

window.onresize = responsiveResize;

const activeInput = (input) => {
    if(input.value == ''){
        input.classList.remove('active');
    }
    else{
        if(document.getElementById('error-message-'+input.id) != undefined){
            document.getElementById('error-message-'+input.id).classList.remove('active');
        }
        input.classList.remove('error');
        input.classList.add('active');
    }
}

const activeMenu = () => {
    if(hamburguerMenu.checked == true){
        document.getElementById('main-menu').style.display = 'none';
        document.getElementById('hero-cta-container').style.display = 'flex';
    }
    else{
        document.getElementById('main-menu').style.display = 'flex';
        document.getElementById('hero-cta-container').style.display = 'none';
    }
}

const openAboutModal = () => {
    document.getElementById('about-modal').classList.add('active');
}

const closeAboutModal = () => {
    document.getElementById('about-modal').classList.remove('active');
}

const sendEmail = () => {
    let name = document.getElementById('name');
    let nameErrorMessage = document.getElementById('error-message-name');
    let phone = document.getElementById('phone');
    let phoneErrorMessage = document.getElementById('error-message-phone');
    let error = false;
    let inputs = document.getElementsByClassName('bl-input');

    if(name.value == ''){
        name.classList.add('error');
        nameErrorMessage.classList.add('active') ;
        error = true;
    } 
    
    if(phone.value == ''){
        phone.classList.add('error');
        phoneErrorMessage.classList.add('active');
        error = true;
    } 

    if(error) {
        document.getElementById('validation-message').classList.add('error');
    }
    else{
        
        let info = {
            'name': document.getElementById('name').value,
            'phone': document.getElementById('phone').value
        }

        emailjs.send('service_w54p5o2', 'template_cwcf0vg', info, 'OUxPSKDUMbvF_Y2vS')
        .then((result) => {
            document.getElementById('validation-message').classList.add('success');
            Array.prototype.forEach.call(inputs, (i) => {
                i.value = '';
            })
            console.log(result.text);
        }, (error) => {
            console.log(error.text);
        });
    }
}

const closeValidationMessage = () => {
    document.getElementById('validation-message').setAttribute('class', 'validation-message');
    let inputs = document.getElementsByClassName('bl-input');
    Array.prototype.forEach.call(inputs, (i) => {
        i.setAttribute('class', 'bl-input');
        document.getElementById('error-message-'+i.name).classList.remove('active');
    })
}