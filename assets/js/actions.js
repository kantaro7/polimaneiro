$(document).ready(function(){
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });

    $('.soloLetra').bind('keyup blur',function(){
        var node = $(this);
        node.val(node.val().replace(/[^a-z]/g,'') ); }
    );

});
