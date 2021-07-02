
	<?php wp_footer(); ?>

</body>
</html>


<script type="text/javascript">

$(function() {

	// efeito de transição no menu ao scrolar a pagina
    var header = $("nav.navbar");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
        	console.log('oi')
            header.addClass("bg-light");
            header.removeClass("bg-transparent");
        } else {
            header.addClass("bg-transparent");
            header.removeClass("bg-light");
        }
    });
});
</script>