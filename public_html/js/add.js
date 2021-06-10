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
        select.remove();
        input1.remove();
        input2.remove();
        br.remove();
        /*        let removeBr = document.getElementById('br');
        removeBr.remove();
        let removeInput2 = document.getElementById('input2');
        removeInput2.remove();
        let removeInput1 = document.getElementById('input1');
        removeInput1.remove();
        let removeSelect = document.getElementById('select');
        removeSelect.remove();
*/
    }

    select.addEventListener('change', function (event) {

        if (select.value === 'Other'){
            input1.style.visibility = 'visible';
        }   else {
            input1.style.visibility = 'hidden';
        }

    })



}


