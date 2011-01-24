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
    
    /* fix indexOf for IE */
    if(!Object.prototype.indexOf){
                Object.prototype.indexOf = function(obj){
                    for(var i=0; i<this.length; i++){
                        if(this[i]==obj){
                            return i;
                        }
                    }
                    return -1;
                }
    }
    
    /* fix indexOf for IE */
    if(!String.prototype.indexOf){
                String.prototype.indexOf = function(obj){
                    for(var i=0; i<this.length; i++){
                        if(this[i]==obj){
                            return i;
                        }
                    }
                    return -1;
                }
    }   
});

    
