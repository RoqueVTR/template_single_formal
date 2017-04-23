<script>
	/* Carousel */
	var carousel = $('#home').carousel({
	    interval: 5000
	},'cycle');

	/* Top Button */
	$(window).scroll(function(){
	    if($(this).scrollTop() >= 90) {
	        $('#topBtn,#app-brand').css({'display':'block'});
	    }
	    else {
	        $('#topBtn,#app-brand').fadeOut('fast');
	    }
	});

	$('#topBtn,#app-brand').click(function() {
	    $('body,html').animate({ scrollTop:0 });
	});

    function openModal(name, description, imageUrl) {
    	console.log(imageUrl);
        $( '#product-name' ).html(name);
        $( '#product-image' ).attr("src",imageUrl);
        $( '#product-description' ).html(description);

        $( '#productModal' ).modal('show');
    }

    $('.client-image').tooltip({
    	placement: 'bottom',
    	trigger: 'hover focus'
    });
</script>