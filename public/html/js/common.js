$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};


	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

	//slider
	var handle = $( "#custom-handle-bookings" );
	    $( "#sliderBookings" ).slider({
	    	range: true,
	      	value: 500,
	      	min: 500,
	      	max: 16093,
	      	values: [ 1250, 12000 ],
	      create: function() {
	        // handle.text( $( this ).slider( "value" ) );
	      },
	      slide: function( event, ui ) {
	        var val = $('#sliderBookings').slider("option", "value");
	        $( "#sliderBookings" ).find('input').val(val);
	      }
	    });

	// calendar slider
	$('.calendars').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: false,
	  fade: true,
	  touchMove: false,
	  swipe: false,
	  asNavFor: '.calendar-month'
	});
	$('.calendar-month').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  asNavFor: '.calendars',
	  dots: false,
	  centerMode: false,
	  focusOnSelect: true,
	  touchMove: false,
	  swipe: false,
	});


	$('.calendar__day').popover({
	    container: 'body',
	    html: true,
	    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
	})
	// hide on cancel
	$('body').on('click', '.popover .cancel', function(e) {
		e.preventDefault();
		$('.calendar__day').popover('hide');
	});
	// set hours add here
	$('body').on('click', '.popover .set', function(e) {
		e.preventDefault();
		console.log('set hours');
	});
	// set hours add here
	$('body').on('click', '.popover .contact', function(e) {
		e.preventDefault();
		console.log('contact');
	});

	// dropdown menu
	$('#dropdownMenu').parent().on('show.bs.dropdown', function (e) {
	  // do something…
	  // e.preventDefault();
	  console.log('test')
	})

	$('.modal .modal-body .btn.proceed').on('click', function(e){
		$('#bookModal').modal('hide');
	});

	$('.modal .modal-body .btn.continue').on('click', function(e){
		$('#proceedModal').modal('hide');
	});

});

// modal date pick
var availableDays = ["2019-1-2","2019-1-20","2019-1-4","2019-1-15"];
var disabledDays = ["2019-1-21","2019-1-24","2019-1-3","2019-1-28"];
var date = new Date();
jQuery(document).ready(function() { 
    $( "#datepicker").datepicker({ 
    	dayNamesMin: [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
        dateFormat: 'yy-mm-dd',
        beforeShowDay: function(date) {
            var m = date.getMonth(), d = date.getDate(), y = date.getFullYear();
            for (i = 0; i < disabledDays.length; i++) {
                if($.inArray(y + '-' + (m+1) + '-' + d,disabledDays) != -1) {
                    //return [false];
                    return [true, 'ui-state-disabled', ''];
                }
            }
            for (i = 0; i < availableDays.length; i++) {
                if($.inArray(y + '-' + (m+1) + '-' + d,availableDays) != -1) {
                    //return [false];
                    return [true, 'ui-state-active', ''];
                }
            }
            return [true];
        },
        onSelect: function(date) {
            // console.log($(this));
      		$('#datepicker').popover({
      			trigger:"manual",
      			viewport:"#datepicker",
            	// container: '#datepicker',
            	// selector: '.ui-state-default.ui-state-active',
            	// placement: 'auto',
            	html: true,
            	title: 'Choose Time',
            	content: `
            	<div class="date">from 
    	        	<select class="one">
    				  <option value="0">12:00 am</option>
    				  <option value="1">1:00 am</option>
    				  <option value="2">2:00 am</option>
    				  <option value="3">3:00 am</option>
    				  <option value="4">4:00 am</option>
    				  <option value="5">5:00 am</option>
    				  <option value="6">6:00 am</option>
    				  <option value="7">7:00 am</option>
    				  <option value="8">8:00 am</option>
    				  <option value="9">9:00 am</option>
    				  <option value="10">10:00 am</option>
    				  <option value="11">11:00 am</option>
    				  <option value="12">12:00 pm</option>
    				  <option value="13">1:00 pm</option>
    				  <option value="14">2:00 pm</option>
    				  <option value="15">3:00 pm</option>
    				  <option value="16">4:00 pm</option>
    				  <option value="17">5:00 pm</option>
    				  <option value="18">6:00 pm</option>
    				  <option value="19">7:00 pm</option>
    				  <option value="20">8:00 pm</option>
    				  <option value="21">9:00 pm</option>
    				  <option value="22">10:00 pm</option>
    				  <option value="23">11:00 pm</option>
    				</select> 
    				to 
    				<select class="two">
    				  <option value="0">12:00 am</option>
    				  <option value="1">1:00 am</option>
    				  <option value="2">2:00 am</option>
    				  <option value="3">3:00 am</option>
    				  <option value="4">4:00 am</option>
    				  <option value="5">5:00 am</option>
    				  <option value="6">6:00 am</option>
    				  <option value="7">7:00 am</option>
    				  <option value="8">8:00 am</option>
    				  <option value="9">9:00 am</option>
    				  <option value="10">10:00 am</option>
    				  <option value="11">11:00 am</option>
    				  <option value="12">12:00 pm</option>
    				  <option value="13">1:00 pm</option>
    				  <option value="14">2:00 pm</option>
    				  <option value="15">3:00 pm</option>
    				  <option value="16">4:00 pm</option>
    				  <option value="17">5:00 pm</option>
    				  <option value="18">6:00 pm</option>
    				  <option value="19">7:00 pm</option>
    				  <option value="20">8:00 pm</option>
    				  <option value="21">9:00 pm</option>
    				  <option value="22">10:00 pm</option>
    				  <option value="23">11:00 pm</option>
    				</select>
    			</div>
            	<p class="small">Your choose 2 hours session - <b>70£</b></p><div class="buttons"><a href="#" class="continue">Continue</a></div>`
            })
            $('#datepicker').popover('show');
        },
    });


// Custom upload
    function readURL(input) {
      if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
          $('.image-upload-wrap').hide();

          $('.file-upload-image').attr('src', e.target.result);
          $('.file-upload-content').show();

          $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

      } else {
        removeUpload();
      }
    }

    function removeUpload() {
      $('.file-upload-input').replaceWith($('.file-upload-input').clone());
      $('.file-upload-content').hide();
      $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });

// show tabs by click next
$('.register .modal-body #nav-step1 button.button').on('click', function(e){
    $('#nav-tab a[href="#nav-step2"]').tab('show')
});
$('.register .modal-body #nav-step2 button.button').on('click', function(e){
    $('#nav-tab a[href="#nav-step3"]').tab('show')
});
$('.register .modal-body #nav-step3 button.button').on('click', function(e){
    $('#nav-tab a[href="#nav-step4"]').tab('show')
});

});