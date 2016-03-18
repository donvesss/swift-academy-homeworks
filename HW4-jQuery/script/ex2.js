$(document).ready(function(){
    
    $('#right').click(function(){
        $('#box').animate({
            left: '+=40px'
            
        });
    });
    
    
    $('#left').click(function(){
        $('#box').animate({
            left: '-=40px'
            
        });
    });
    
    
    $('#up').click(function(){
        $('#box').animate({
            top: '-=40px'
            
        });
    });
    
    
    $('#down').click(function(){
        $('#box').animate({
            top: '+=40px'
            
        });
    });
    
});
       