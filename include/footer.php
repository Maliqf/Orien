<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/3/2018
 * Time: 9:09 PM
 */
?>






<!--Footer Start -->
<footer class="footer-distributed">

    <div class="footer-left">

        <img src="Logo4.png" height="80" width="150" style="border-radius: 8px;"/>

        <p class="footer-company-name">Orien Cinema &copy; 2018</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>36 De Kretser Pl, </span> Colombo 00400</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>0114 777 888</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:maliqf@outlook.com">maliqf@outlook.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the us</span>
            We are a cinema booking company
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>

<!--Footer End -->

</div>
<!--Body End -->

</body>
<!--Filter JQuery -->
<script type="text/javascript">
	$(document).ready(function(){
		$('.tick').click(function(){
			
			var chks = $( ".tick:checked" );
			var a = [];
			chks.each(function(){
				/*a.push('.movie-' + $(this).val());*/
				a.push('[data-language-filter="|' + $(this).val() + '"]');
			});
			var cls = a.join(',');
			if (cls == '')
			{
			$('.movie-card-container').fadeIn(300);
			}
			else
			{
			console.log(cls);
			$('.movie-card-container').fadeOut(300, function(){
				$(cls).fadeIn(300);
			});
			}
		});
	});
	
	$(document).ready(function(){
		$('.widget-title.ns-title-wid, .widget-title.ns-genre-title').click(function(){
			$(this).parent().toggleClass('slideDown');
			$(this).parent().toggleClass('slideUp');
			
		});
	});

	$(document).ready(function(){

		var userMenu = $('.header-col header-cal-3 .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		$(document).on('touchend', function(e){

			userMenu.removeClass('show');

		});

	});

	
	$(document).ready(function(){
		
	});
	
	
	
</script >

</html>
