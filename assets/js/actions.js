$(document).ready(function(){
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });

    $('.soloLetra').bind('keyup blur',function(){
        var node = $(this);
        node.val(node.val().replace(/[^a-z]/g,''));
    });

    $('.formSimple').validate({
        highlight: function(element) {
            jQuery(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'label label-danger',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertBefore(element.parent());
            } else {
                error.insertBefore(element);
            }
        },

        ignore: ":disabled,:hidden"
    });

    $('form').submit(function(){
        var form = $(this);
        $('input').each(function(i){
            var self = $(this);
            try{
                var v = self.autoNumeric('get');
                self.autoNumeric('destroy');
                self.val(v);
            }catch(err){
                console.log("Not an autonumeric field: " + self.attr("name"));
            }
        });
        return true;
    });

    $("#subir").fileinput({
        language: 'es'
    });
});
