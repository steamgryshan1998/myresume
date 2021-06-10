$(document).ready( function (e) {
    $('#button_reg').on("click",function(event) {
        event.preventDefault();
        let name = $('#formName').val();
        let surname = $('#formSurname').val();
        let email = $('#formEmail').val();
        let password = $('#formPassword').val();
        let confirmPass = $('#formConfPassword').val();
        if((name === "")||(surname === "") || (email === "") || (password === "") || (confirmPass === "")) {
            $("#error").text('all fields must be filled');
            return false;
        } else if (password !== confirmPass) {
            $("#error").text("passwords do not match")
            return false;
        }else {
            $("error").text("You are registered");

        }

        let data = JSON.stringify({'firstName': name, 'lastName': surname, 'email': email, 'password': password, 'conf_password': confirmPass});
        $.ajax({
            url: '/?action=input',
            type: 'POST',
            data: data,
            contentType: "application/json;",
            dataType: 'json',
            success: function(data) {
                setTimeout(function(){
                    window.location.href = '../index.php';
                }, 2000);
                console.log(data)
                $('#error').text('You are registered');

            },
            error: function() {
                console.error(data)
                $('#error').text('None');
            }

        })


    })

})