_S=0;

function tabMe(t,e){
    var kc = e.keyCode || e.which;
    
    if( kc == 9 ){
        if( e.ctrlKey )
            return;
        e.preventDefault();
        var sels = t.selectionStart,
            sele = t.selectionEnd,
            tval = t.value;
        t.value = tval.substring(0,sels) + "    " + tval.substring(sele);
        t.selectionStart=t.selectionEnd=sels+4;
        
    }else if( kc == 13 ){
        _S++;
        if( _S==2 || e.ctrlKey ){
            var xhr  = new XMLHttpRequest(),
                form = new FormData();
            form.append( "translate", t.value );
            xhr.open( "post", "translate.php", false );
            xhr.onload=function(e){
                if( this.status == 200 ){
                    var ifrm = document.getElementById( "viewer" );
                    ifrm = (ifrm.contentWindow) ? ifrm.contentWindow : (ifrm.contentDocument.document) ? ifrm.contentDocument.document : ifrm.contentDocument;
                    ifrm.document.open();
                    ifrm.document.write( this.responseText );
                    ifrm.document.close();
                }
            }
            xhr.send(form);
        }
        
    }else
        _S=0;
}