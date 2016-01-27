function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah').attr('src', e.target.result).width(100).height(100);
		};

		reader.readAsDataURL(input.files[0]);
	}
}


// Switching Student subjects between science, business studies and Humanities Starts
$(document).ready(function(){
    $("#group").change(function(){
        $(this).find("option:selected").each(function(){
            $(".science").hide();
            $(".business").hide();
            $(".humanities").hide();
            if($(this).attr("value")=="Science"){
                $(".science").show();
                $(".science").removeAttr("disabled");
                $(".business").attr("disabled", "disabled");
                $(".humanities").attr("disabled", "disabled");
            }
            else if($(this).attr("value")=="Business Studies"){
                $(".business").show();
                $(".business").removeAttr("disabled");
                $(".science").attr("disabled", "disabled");
                $(".humanities").attr("disabled", "disabled");
            }
            else if($(this).attr("value")=="Humanities"){
                $(".humanities").show();
                $(".humanities").removeAttr("disabled");
                $(".science").attr("disabled", "disabled");
                $(".business").attr("disabled", "disabled");
            }
        });
    }).change();
});
// Switching Student subjects between science, business studies and Humanities Ends