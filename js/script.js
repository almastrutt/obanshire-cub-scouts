$(document).ready(function(){


//=======Search Badge======    
    $('#searchbadge').keyup(function(){
        var search=$('#searchbadge').val();
        var badgegroup=$('#badgegroup').val();
        
        $.post('../config/searchbadge.php', {badge:search, group:badgegroup}, function(data){
            $('#displaybadge').html(data);
        });
    });
//=========================

//=======Badge Group=======
    $('#badgegroup').change(function(){
        $('#searchbadge').val("");
        var badgegroup=$('#badgegroup').val();
        $.post('../config/searchgroup.php', {badgegroup:badgegroup}, function(groupdata){
            $('#displaybadge').html(groupdata);
        });
     });
//==========================

//==========Print Badges=====     
     $('#printbadges').click(function(){
         window.print();
     });
//===========================

//=======accordion======     
    $('body').removeClass('jsOff').addClass('jsOn');
    var accordion = $('.accordion');
     
    accordion.find('dd').hide();
     
    accordion.find('dt').on('click', function() {
         $(this).toggleClass('open').next('dd').slideToggle().siblings('dd').slideUp().prev('dt').removeClass('open'); 
    });

//==============================     

//=====Sidenav Accordion
    $('#sidenav a').on("click", function(){
        var $Selected = $(this).attr('href');
    
        if($Selected == "list_user"){
        
            $.post('includes/list_user.php', function (data){
                $('.tophalf').html(data);
            });
        }
        
        if($Selected == "new_user"){
        
            $.post('includes/new_user.php', function (data){
                $('.tophalf').html(data);
            });
        }

        if($Selected == "reset_password"){
            $.post('includes/reset_password.php', function (data){
                $('.tophalf').html(data);
             });
        }
 
        if($Selected == "new_gallery"){
            $.post('includes/new_gallery.php', function(data){
                $('.tophalf').html(data);
        
        
                $('#choosefile').change(function(e) {
            
                if ($('#displayChoose img').length) {
                    $('#displayChoose img').remove();
                }
            
                var file = e.originalEvent.srcElement.files[0];
                var img = document.createElement("img");
                var reader = new FileReader();
                reader.onloadend = function() {
                    img.src = reader.result;
                };
                reader.readAsDataURL(file);
                $('#displayChoose').append(img);
            
            });
        
        });    
    }
    
    return false;
});

//=====================================

     
}); //===== This is the last line, all functions are included above

   