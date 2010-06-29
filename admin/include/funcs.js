function ccount(id, dest, max) {
    $('#' + id).bind('change keyup', function() {
        var left = max - $('#' + id).val().length;
        $('#' + dest).html(left + '/' + max);
    });
    
    $('#' + id).focus(function() {
       $('#' + dest).addClass('highlight');
    });
    
    $('#' + id).blur(function() {
       $('#' + dest).removeClass('highlight');
    });
    
    $('#' + id).attr("maxlength",max);
}