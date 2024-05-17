<script src="assets/js/jquery1-3.4.1.min.js"></script>

<script>

    $(function () {
        $bol = false;
        $('.pass').click(function () {
            if ($bol == false) {
                $(this).removeClass('fa-eye-slash').addClass('fa-eye');
                $(this).css('opacity', '1');
                $('.password').attr('type', 'text');
                $bol = true;
            } else {
                $(this).removeClass('fa-eye').addClass('fa-eye-slash');
                $(this).css('opacity', '.15');
                $('.password').attr('type', 'password');
                $bol = false;
            }
            // $('.password').attr('type') == 'password' ? $(this).next('input').attr('type', 'text') : $(this).next('input').attr('type', 'password');
            
        });
    });

</script>
</body>
</html>