$(document).ready(function ()
{
    var els = document.getElementsByTagName('input');
    var elsLen = els.length;
    var i = 0;
    for ( i=0;i<elsLen;i++ )
    {
        if ( els[i].getAttribute('type') )
        {
            els[i].className = els[i].getAttribute('type');
        }
    }
});

var hvms = hvms || {};

hvms.resetForm = function (formID) {
    $(':input','#' + formID)
    .not(':button, :submit, :reset, :hidden')
    .val('')
    .removeAttr('checked')
    .removeAttr('selected')
    .attr('selectedIndex', '-1');
    
    $('#' + formID).submit();
}

hvms.syncFields = function (field1, field2) {
    $("#" + field1).change ( function () {
    $("#" + field2).val($("#" + field1).val());
});
}    
