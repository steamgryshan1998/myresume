let name = document.getElementById("name");
let email = document.getElementById("email");
let password = document.getElementById("password");
let gender = document.getElementsByClassName("gender_name");
let contact = document.getElementById("contacts");
let birthdate = document.getElementById("birth");
let photo = document.getElementById("photo");
let hobby = document.getElementById("hobby");
let words = document.getElementById("words");
let submit = document.getElementById("blue_button");
let reset = document.getElementById("reset");
let output = document.getElementById("print_block");


let data = {
    name:"",
    email:" ",
    password:" ",
    gender:" ",
    birthdate:" ",
    contact:" ",
    hobby:" ",
    words:" ",
};

reset.addEventListener('click', cleanInput);

function cleanInput(event) {
    event.preventDefault();
    name.value="";
    email.value=" ";
    password.value="";
    gender.value=" ";
    birthdate.value=" ";
    hobby.value=" ";
    words.value=" ";
}

submit.addEventListener('click', addToObject);
function addToObject(){

    data.name=name.value;
    data.email=email.value;

    console.log(data.email);
    data.password=password.value;
    if (document.getElementById('check1').checked) {
        data.gender = document.getElementById('check1').value;
    }
    if(document.getElementById('check2').checked) {
        data.gender = document.getElementById('check2').value;
    }
    data.birthdate=birthdate.value;
    data.contact=contact.value;
    data.photo = photo.value;
    data.hobby=hobby.value;
    data.words=words.value;
    output.innerText=+data.name+" "+data.email+"   "+data.password+"   "+data.gender+"    "+data.birthdate+"   "
        +data.contact+"  "+data.photo+"  "+data.hobby+"   "+ data.words;

}