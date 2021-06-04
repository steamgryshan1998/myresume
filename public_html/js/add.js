let output = document.getElementById('contact');
function addItems() {

    let select  = document.createElement('select');
    select.setAttribute('id', 'select');

    let option1 = document.createElement('option')
    option1.value = 'Instagram';
    option1.textContent = 'Instagram';
    let option2 = document.createElement('option')
    option2.value = 'Facebook';
    option2.textContent = 'Facebook';
    let option3 = document.createElement('option')
    option3.value = 'Telegram';
    option3.textContent = 'Telegram';
    let option4 = document.createElement('option')
    option4.value = 'LinkedIn';
    option4.textContent = 'LinkedIn';
    let option5 = document.createElement('option')
    option5.value = 'Other';
    option5.textContent = 'Other';

    select.appendChild(option1);
    select.appendChild(option2);
    select.appendChild(option3);
    select.appendChild(option4);
    select.appendChild(option5);

    let input1 = document.createElement('input');
    input1.name = 'dynamicInput';
    input1.style.visibility = 'hidden';
    let input2 = document.createElement('input');
    input2.name = 'staticInput';
    let br = document.createElement('br');


    output.insertBefore(br, output.firstChild);
    output.insertBefore(input1, output.firstChild);
    output.insertBefore(input2, output.firstChild);
    output.insertBefore(select, output.firstChild);

    let reset = document.getElementById('Reset')

    reset.onclick = removeItems;
    function removeItems(){
        let removeSelect = document.getElementById('select');
        removeSelect.remove();
        let removeInput1 = document.getElementById('input1');
        removeInput1.remove();
        let removeInput2 = document.getElementById('input2');
        removeInput2.remove();
        let removeBr = document.getElementById('br');
        removeBr.remove();

    }

    select.addEventListener('change', function (event) {

        if (select.value === 'Other'){
            input1.style.visibility = 'visible';
        }   else {
            input1.style.visibility = 'hidden';
        }

    })



}


/*function add(){
    let element = document.getElementById('contact');
    let select = document.createElement('select');
    let input = document.createElement('input');
    let delete_button = document.createElement('input');
    let br = document.createElement('br');
    let child = document.getElementById('save');


    select.setAttribute('id','socials_2');
    select.setAttribute('onchange','check(this);');
    input.setAttribute('id','contact_input');
    delete_button.setAttribute('type','button');
    delete_button.setAttribute('value','Delete');
    delete_button.setAttribute('id','delete');
    delete_button.setAttribute('onclick','d();');

    element.insertBefore(select, child);
    element.insertBefore(input, child);
    element.insertBefore(delete_button, child);
    element.insertBefore(br, child);

/*    element.appendChild(select);
    element.appendChild(input);
    element.appendChild(delete_button);
    element.appendChild(br);
*/

/*    let inst = document.createElement('option');
    inst.value = "Instagram";
    inst.innerHTML = "Instagram";
    select.appendChild(inst);

    let tg = document.createElement('option');
    tg.value = "Telegram";
    tg.innerHTML = "Telegram";
    select.appendChild(tg);

    let tw = document.createElement('option');
    tw.value = "Twitter";
    tw.innerHTML = "Twitter";
    select.appendChild(tw);

    let link = document.createElement('option');
    link.value = "LinkedIn";
    link.innerHTML = "LinkedIn";
    select.appendChild(link);

    let other = document.createElement('option');
    other.value = "Other";
    other.innerHTML = "Other";
    other.setAttribute('id','other');
    select.appendChild(other);

    // if (document.getElementById('other').selected) {
    //
    //     let input_2 = document.createElement('input');
    //     let child_2 = document.getElementById('contact_input');
    //     element.insertBefore(input_2, child_2);
    // }

}
function check(elem) {
        // use one of possible conditions
        // if (elem.value == 'Other')
        if (elem.value == 'Other') {
            document.getElementById("other-div").style.display = 'block';
        } else {
            document.getElementById("other-div").style.display = 'none';
        }
    }

function d() {
    if(document.getElementById('socials_2').value === "Other"){
        document.getElementById('socials_2').remove();
        document.getElementById('contact_input').remove();
        document.getElementById('delete').remove();
        document.getElementById('input_other').remove();
    }  else {
        document.getElementById('socials_2').remove();
        document.getElementById('contact_input').remove();
        document.getElementById('delete').remove();
    }
}

/*function other(){
    let element = document.getElementById('contact');
    let other = document.getElementById("socials_2").value;
    if(other === "Other"){
        let input_2 = document.createElement('input');
        input_2.setAttribute('id','input_other');
        let child_2 = document.getElementById('contact_input');
        element.insertBefore(input_2, child_2);

    }
*/
/*    other = "";
  //  select.removeAttribute('onchange');
}
*/
