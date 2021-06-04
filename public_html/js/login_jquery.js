jQuery.validator.addMethod("noSpace", function(value, element) {
    return value == '' || value.trim().length != 0;
}, "No space please and don't leave it empty");
let $LoginForm = $('#login');
if($LoginForm.length){
    $LoginForm.validate({
        rules:{
            username: {
                required: true,
                alphanumeric: true
            },
            password: {
                required: true
            },
        },
        messages:{
            username: {
                required: 'Please enter username!'
            },
            password: {
                required: 'Please enter password!'
            },
        },
        errorPlacement: function(error, element)
        {
            if (element.is(":radio"))
            {
                error.appendTo(element.parents('.gender'));
            }
            else if(element.is(":checkbox")){
                error.appendTo(element.parents('.hobbies'));
            }
            else
            {
                error.insertAfter( element );
            }

        }
    });
}