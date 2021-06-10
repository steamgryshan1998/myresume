let form = document.getElementById('formElem');
let username = document.getElementById('name');
let email = document.getElementById('email');
let password = document.getElementById('password');
let birth = document.getElementById('birth');
let agreement = document.getElementById('agreement')
let today = new Date();


form.addEventListener('submit', (e) => {
    e.preventDefault();

    if(agreement.checked) {
        checkInputs();
    }   else {
        setErrorFor(agreement, 'Please, check');
    }

});

function checkInputs() {

    let name_value = username.value;
    let email_value = email.value.trim();
    let password_value = password.value.trim();

    if (name_value === '') {
        setErrorFor(username, 'Your name cannot be empty')
    }else if (!isLatin(name_value)) {
        setErrorFor(username, 'Your password must contain only Latins');
    }else {
        setSuccessFor(username);
    }


    if(email_value === '') {
        setErrorFor(email, 'Entered email cannot be empty');
    } else if (!isEmail(email_value)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }

    if(password_value === '') {
        setErrorFor(password, 'Entered password cannot be blank');
    }else if(password_value < 6) {
        setErrorFor(password, 'Entered password must be 6char at least');
    }else if(!isPassContains(password_value)) {
        setErrorFor(password, 'Must contains numbers and letters');
    }
    else {
        setSuccessFor(password);
    }

    let b = new Date(birth.value);
    console.log(today.getFullYear(), b.getFullYear())// дебаггинг
    if((today.getFullYear() - 150) > b.getFullYear())
    {
        setErrorFor(birth,"Invalid date of birth");
    } else if (today.getFullYear()<=(b.getFullYear())&&
        today.getMonth()<=(b.getMonth())&&
        today.getDate()<=(b.getDate()) ){
        setErrorFor(birth,"Wrong date of birth");
    }   else  {
        setSuccessFor(birth);
    }
}

function setErrorFor(input, message) {
    let formControl = input.parentElement;
    let small = formControl.querySelector('small')
    small.innerText = message;
    formControl.className = 'block_input error';
}

function setSuccessFor(input) {
    let formControl = input.parentElement;
    formControl.className = 'block_input success';
}

function isEmail(email) {
    return /^[^]+@[^ ]+\.[a-z]{2,3}$/.test(email);
}

function isLatin(username) {
    return /[a-zA-Z]/.test(username);
}
function isPassContains(password) {
    return /^[0-9a-zA-Z]+$/.test(password);
}