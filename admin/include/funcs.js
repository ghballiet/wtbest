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

function del(id) {
    if(confirm("Are you sure you want to delete this item? This action cannot be undone.")) {
        $.post('delete/index.php', {id: id}, function(data) {
            $('#r' + id + ' td').fadeOut('fast');
            $('#alert').fadeIn(200).html(data).delay(3000).fadeOut(200);
        });
    }
}

function add() {
    var form_data = $('#new').serialize();
    var tab = $('#list > tbody:last');
    $.post("add/index.php",form_data,function(data) {
        location.reload(true);
         // tab.append(data);
         // $.post('get/index.php','',function(d) {
         //    $('#list').html(d);
         // });
    });
    // $('#new')[0].reset();
    // $('#alert').fadeIn(200).html("Added succesfully.").delay(3000).fadeOut(200);
    // var str = "<tr>";
    // jQuery.each(data, function(i,field) {
    //     str += '<td>' + field.value + '</td>';
    // });
    // str += '<td><input type="button" value="Edit"/></td><td><input type="button" value="Delete"/></td></tr>';
    // tab.append(str);
}