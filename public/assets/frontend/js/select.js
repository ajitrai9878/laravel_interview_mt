// ----floatin input label in input and select

$('.form-group').find('.floating-control').each(function (index, ele) {
	var $ele = $(ele);
	if($ele.val() != '' || $ele.is(':selected') === true){
		$ele.parents('.floating-group').addClass('focused');
	}
})


$('.floating-control').on('focus', function (e) {
	$(this).parents('.floating-group').addClass('focused');	
}).on('blur', function(){
	if($(this).val().length > 0){
		$(this).parents('.floating-group').addClass('focused');		
	}else{
		$(this).parents('.floating-group').removeClass('focused');
	}
});
$('.floating-control').on('change', function (e) {
	if($(this).is('select')){
		if($(this).val() === $("option:first", $(this)).val()) {
			$(this).parents('.floating-group').removeClass('focused');
		}
		else{
			$(this).parents('.floating-group').addClass('focused');
		}
	}
})


// --------select2-------
$(document).ready(function() {
	//---- select2 single----
	$('.customSelect').each(function() {
		var dropdownParents = $(this).parents('.select2Part')
		$(this).select2({
			dropdownParent: dropdownParents,
			minimumResultsForSearch: -1
		}).on("select2:open", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:close", function (e) {
			if($(this).find(':selected').val() === ''){
				$(this).parents('.floating-group').removeClass('focused');
			}
		});
	});

	//---- select2 multiple----
	$('.customSelectMultiple').each(function() {
		var dropdownParents = $(this).parents('.select2Part');
		// var placehldrget = $(this).attr("data-placeholder");
		$(this).select2({
			dropdownParent: dropdownParents,
			// placeholder: placehldrget,
			// tags: true,
			// closeOnSelect: false,
		}).on("select2:open", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:close", function (e) {
			if($(this).val() != ''){
				$(this).parents('.floating-group').addClass('focused');
			}else{
				$(this).parents('.floating-group').removeClass('focused');
			}
		}).on("select2:select", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:unselect", function (e) {
			$(this).parents('.floating-group').addClass('focused');
		})
	});
});