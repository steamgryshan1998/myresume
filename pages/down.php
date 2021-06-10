
</div>
<script src="../js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $('.nav_button a').click(function(e){
                e.preventDefault();
                let urlPart = $(this).attr('href');
                console.log(urlPart)
                let url = 'index.php/' + urlPart;
                $.ajax({
                    type: "POST",
                    url: url,
                    cache: false,
                    success: function (msg) {
                        console.log(url)
                        $('#phpContent').html(msg);
                    }
                })
            })
        }
    )
</script>

</body>
</html>
