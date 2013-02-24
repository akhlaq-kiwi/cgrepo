$(document).ready(function(){
	$('.edit').live('click', function(){
		var width = $(document).width();
		var left = width/2-200;;
		var url1 = this.href;
		if($("#popup").length == 0){
			$('body').append('<div class="popup" id="popup"><h2>Loading...</h2></div>');
			$('#popup').css('opacity','0.1');
			$('#popup').css('left',left+'px');
			$('#main').animate({opacity:0.5}, 300);
			$('#popup').animate({opacity:1}, 300);
			$.ajax({
			  url: url1,
			  success: function(data) {
				$('#popup').html(data);
			  }
			});
		}
		return false;
	});

	$('.cancel').live('click', function(){
		$('#main').animate({opacity:1.0}, 300);
		$('#popup').animate({opacity:0.1}, 300, function(){$('#popup').remove()});
		return false;
	});

	$('.date').live('focus', function(){
		$( ".date" ).datepicker();
	});

	$('#state').live('change', function(){
		var state_id = this.value;
		$.ajax({
		  url: './ajax/state_city.php?state_id='+state_id,
		  success: function( data ) {
			$('#city_container').html(data);
		  }
		});
	});

	$('.submit').live('click', function(){
		var frm = $('#'+this.id).parents('form');
		var url1 = frm.attr('action');
		
		if(url1.lastIndexOf('?')<=0){
			url1 += '?ajax=1';
		}else{
			url1 += '&ajax=1'; 
		}
		
		$inputs = frm.find("input, select, button, textarea"),
        // serialize the data in the form
        serializedData = frm.serialize();

		// let's disable the inputs for the duration of the ajax request
		$inputs.attr("disabled", "disabled");

		// fire off the request to /form.php
		$.ajax({
			url: url1,
			type: "POST",
			data: serializedData,
			// callback handler that will be called on success
			success: function(response, textStatus, jqXHR){
				// log a message to the console
				url1 = url1.replace('.php', '_view.php');
				$('#profile_content_inner').load(url1+'?ajax=1');
				$('#main').animate({opacity:1.0}, 300);
				$('#popup').animate({opacity:0.0}, 300, function(){$('#popup').remove()});
			},
			// callback handler that will be called on error
			error: function(jqXHR, textStatus, errorThrown){
				// log the error to the console
				console.log(
					"The following error occured: "+
					textStatus, errorThrown
				);
			},
			// callback handler that will be called on completion
			// which means, either on success or error
			complete: function(){
				// enable the inputs
				$inputs.removeAttr("disabled");
			}
		});

		return false;
	});

	$('.thumb_image').live('mouseover mouseout', function(event){
		if(event.type=='mouseover'){
			$('#'+this.id).css('cursor','pointer');
			$('#'+this.id).append('<div id="tool_tip" class="tool_tip">Clicke to Make Profile Pic</div>');
		}else{
			$('#'+this.id+' .tool_tip').remove();
		}
	});

	$('.thumb_image').live('click', function(event){
		var src = $('#'+this.id).find("img:first").attr('src');
		var id1 = $('#'+this.id).find("img:first").attr('id');
		$("#preview").html('<div style="text-align:center"><img src="../images/loader.gif" alt="Please Wait.."/></div>'+$("#preview").html());
		$.ajax({
		  url: './ajax/upload_photo.php?image_id='+id1+'&action=change_image&ajax=1',
		  success: function(data) {
				$("#preview").html(data);
		  }
		});
		$('.profile_image').find("img:first").attr('src', src+'&width=180');
	});
});

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 
