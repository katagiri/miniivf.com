// JavaScript Document

$(function() {

    var $el, leftPos, newWidth;
    
    /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
    $("#main-nav").append("<li id='magic-line'></li>");
    
    /* Cache it */
    var $magicLine = $("#magic-line");
    
    $magicLine
        .width($(".current_page_item").width())
        .css("left", $(".current_page_item a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());
        
    $("#main-nav li").find("a").hover(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.parent().width();
        
        $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
        });
    }, function() {
        $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
        });    
    });
});


function sendEmail() {
	
	if ($("#contactForm").valid()) {
		first = $('#first').val();
		last = $('#last').val();
		email = $('#email').val();
		phone = $('#phone').val();
		preferred = $('#preferred').val();
		comments = $('#comments').val();
		
		$.ajax({
			url:'../functions/sendEmail.php',
			type: "POST",
			//success: function(){$('#notification').load('forms/payperiod-details-pending-admin.php?reloadvar_inner=yes');},
			//success: function(){$('#sendSuccess'+id).fadeIn(); },
			success: function(){
			//window.location.reload();
			//clear_form_elements('#contactForm');
			$('#success').fadeIn();
			$('#contactForm').fadeOut();
			},
			data: {first : first, last : last, email : email, phone : phone, preferred : preferred, comments : comments}
		});
	}
	
}

function clear_form_elements(ele) {
    $(ele).find(':input').each(function() {
        switch(this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });
 
}

jQuery(function($){
   $("#first").Watermark("First");
   $("#last").Watermark("Last");
   $("#phone").Watermark("Phone");
   $("#email").Watermark("Email");
   $("#comments").Watermark("Comments");
});