
$(function(){
    $("input[data-field='minicolors']").each(function(){
    	$(this).minicolors('settings',{
	        format: $(this).attr('data-format'),
	        opacity: $(this).attr('data-opacity'),
	        control: $(this).attr('data-control'),
	        swatches: $(this).attr('data-swatches') ? $(this).attr('data-swatches').split('|') : []
        });
    });
});