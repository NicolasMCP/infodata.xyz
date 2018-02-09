function Scroll() {
    var top;
    if ( window.pageYOffset > 50 ) {     /* parametro de movimentação */
        top = document.querySelector( ".tutop" );
        top.setAttribute( "style", "animation-name:totop;animation-duration:0.5s" );
        setTimeout(function(){
            top.setAttribute( "class", "totop" );
        }  , 500);
    }else {
        top = document.querySelector( ".totop" );
        top.setAttribute( "style", "animation-name:tutop;animation-duration:0.5s" );
        setTimeout(function(){
            top.setAttribute( "class", "tutop" );
        }  , 500);
    }
}