



$(function(){
       
    var $mt = $('nav .menu_toggle');
    var $menu = $('nav ul');
    
    $mt.click(function(){
        $menu.slideToggle(500,function(){
            if($(this).css('display') === 'none'){
                $(this).removeAttr('style');
            }
        });
    });
    
});

