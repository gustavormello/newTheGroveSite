// Redirects user to the correct prices page according to location.

    $( "#prices" ).click(function() {
      $.get("http://ipinfo.io", function (response) {

        if (response.country = 'BR') {
          window.location.href = './planos.html';
        } else {
            window.location.href = './prices.html';
        }
    }, "jsonp");
    });

// ..................................
//          Contact form
// ..................................

$(document).ready(function(){
 $.validator.setDefaults({
submitHandler: function(form) {
    $.ajax({
		  type: "POST",
		  url: "email.php",
		  data: { 'val':$(".contactForm").serializeJSON() }
		}).done(function(data) {
		alert(data);
		   
		});
  }

});
$(".contactForm").validate(
{rules:
{name:"required",
email:{required:true,email:true},
website:{required:false,url:true},
cate:"required",
msg:{required:true, maxlength:300
}},
errorClass:"error",
highlight: function(label) {
    $(label).closest('.form-group').removeClass('has-success').addClass('has-error');
  },

success: function(label) {
    label
      .text('Seems Perfect!').addClass('valid')
	  .closest('.form-group').addClass('has-success');
      
  }
}
  
);

});

        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });