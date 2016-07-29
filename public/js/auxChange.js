$(document).ready(function() {
	$('div').removeAttr("contenteditable")
	$('.col-md-1').remove()
})

function eliminardatos() {
	$('div').removeAttr("contenteditable")
	$('.col-md-1').remove()	
	$('.col-md-11').addClass("col-md-12")
	$('div').removeClass('col-md-11')
}