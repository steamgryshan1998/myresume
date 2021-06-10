$(document).ready( function (e) {
    $('#login').on("click",function(event) {
        event.preventDefault();
        let name = $('#username').val();
        let password = $('#formPassword').val();
        if((name === "") || (password === "")) {
            $("#error").text('all fields must be filled');
            return false;
        } else {
            $("error").text("You are logged in");

        }
        let data = JSON.stringify({'username': name, 'password': password});
        $.ajax({
            url: '/?action=input_login',
            type: 'POST',
            data: data,
            contentType: "application/json;",
            dataType: 'json',
            success: function(data) {
                setTimeout(function(){
                    window.location.href = '../index.php';
                }, 2000);
                console.log(data)
                $('#error').text('You are logged in');

            },
            error: function() {
                console.error(data)
                $('#error').text('None');
            }

        })


    })

})