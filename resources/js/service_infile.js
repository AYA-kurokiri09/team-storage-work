$(function() {
    $('#department').click(function(){
        if ($('#logout').is(':hidden')) {
            $('#logout').slideDown();
        } else {
            $('#logout').slideUp();
          }
    })

    

    $('#file_menu').click(function(){
        if ($('#file_menu_hidden').is(':hidden') && $('#arrow_right').is(':hidden')) {
            $.when(
                $('#arrow_right').fadeIn()
    
            ).done(function(){ 
                $('#file_menu_hidden').fadeIn();
            });  
        }
    })
    
    
});