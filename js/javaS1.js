jQuery('document').ready(function($){

    var menuBtn= $('.menu-icon'),
        menu=$('.navigation ul');
        menu.removeClass('show');

    menuBtn.click(function(){
        if(menu.hasClass('show')){
            menu.removeClass('show');
        }else{
            menu.removeClass('show');
            menu.addClass('show');
        }

    });

});