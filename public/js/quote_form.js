$(document).ready(function() {
   $(".btn-submit").click(function(e){

        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var number = $('#number').val();
        var subject = $('#subject').val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
          url: getsiteurl() +"/quote/insertdata",
          type:"POST",
          data:{
            _token:CSRF_TOKEN,
            name:name,
            email:email,
            number:number,
            subject:subject,
            
          },
          success:function(data){

                if($.isEmptyObject(data.error)){
                   $(".print-error-msg").css('display','none');
                    window.location.reload();
                             swal(data.success,"", "success");
                }else{
                    printErrorMsg(data.error);
                }
            },
        });
    });

  function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }

});