function Scroll() {
    var top;
    if ( window.pageYOffset > 70 ) {     /* parametro de movimentação */
        top = document.querySelector( ".tutop" );
        top.setAttribute( "style", "animation-name:totop;animation-duration:0.5s" );
        setTimeout(function(){
            top.setAttribute( "class", "totop" );
        }  , 500);
    } else {
        top = document.querySelector( ".totop" );
        top.setAttribute( "style", "animation-name:tutop;animation-duration:0.5s" );
        setTimeout(function(){
            top.setAttribute( "class", "tutop" );
        }  , 500);
    }
}
function up() {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
    // alert('click');
}