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

    
