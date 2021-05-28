// Home======================================================================================
$(document).ready(function(){
    $('.deck-search').css("display", "none");

    $('#busca',).on('keyup', function(){
        text = $(this).val();  

        $.ajax({
            type: 'GET',
            url: 'search.php',
            data: 'query='+text,
            success: function(data){
               $('.card-deck').html(data);
            }
        });

    });
});

// Contribuição==============================================================================

jQuery('form').on('submit', function(e){
    e.preventDefault();
});

jQuery('#enviar').click(function(){
    var dados = {
        'termo':jQuery('#termo').val(),
        'desc':jQuery('#desc').val()};
    var pageurl = 'cadastrar-termo.php';

    jQuery.ajax({
        url: pageurl,
        data: dados,
        type: 'POST',
        success:function(html){
            jQuery('.msg').css("display","block");
            jQuery('#termo').val('');
            jQuery('#desc').val('');
            setTimeout(function(){
                location.href="colaborar.php";
            },4100);
        }
    });
});

// Painel do ADM ============================================================================

jQuery('.aceitar').click(function(){
    var element = $(this);
    var id = element.attr("id");
    var r = element.data("r");
    var info = 'id=' + id+"&r="+r;

    if(confirm("Aceitar termo para exibi-lo no site?")){
        $.ajax({
            type: "GET",
            url: "./bencao.php",
            data:info,
            success:function(html){
                location.href="adm.php";
            }
        });
    }
});

jQuery('.recusar').click(function(){
    var element = $(this);
    var id = element.attr("id");
    var r = element.data("r");
    var info = 'id=' + id+"&r="+r;

    if(confirm("Recusar termo?")){
        $.ajax({
            type: "GET",
            url: "./bencao.php",
            data:info,
            success:function(html){
                location.href="adm.php";
            }
        });
    }
});