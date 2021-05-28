// Login ========================================================================================

$('#user').on('keyup', function(e){
    var text = $(this).val();
    var pageurl = 'verificar-user.php';

    jQuery.ajax({
        url: pageurl,
        data: 'u='+text,
        type: 'POST',
        success:function(data){            
            data == 1
            ? $('#uMsg').css('display', 'inline-block')
                : $('#uMsg').css('display', 'none')
        }
    });
});

$('#email').on('keyup', function(e){
    var text = $(this).val();
    var pageurl = 'verificar-user.php';

    jQuery.ajax({
        url: pageurl,
        data: 'e='+text,
        type: 'POST',
        success:function(data){            
            data == 2
            ? $('#eMsg').css('display', 'inline-block')
                : $('#eMsg').css('display', 'none')

        }
    });
});