(function( $ ) {
var deleteLink = document.querySelector('.deleteLink')

    $(document).ready(function() {
        $(".alert-primary").hide();
        deleteLink.addEventListener('click', function alertDelete() {
            
            if (confirm('êtes-vous sur de vouloir supprimer ceci')) {
                $(".alert-primary").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert-primary").slideUp(500);
                });
            }
        });
    });
    /*****home after registration****/ 
    $(".registrationSuccess").fadeTo(3000, 500).slideUp(500, function(){
        $(".registrationSuccess").slideUp(500);
    });
/***form** */
    $(document).ready(function () { 
        $('#zipCode').selectize({ sortField: 'text' }); 
    });
/***app flash error ****/
$(".appFlashError").fadeTo(8000, 500).slideUp(500, function(){
    $(".appFlashError").slideUp(500);
});
/***app flash success ****/
$(".appFlashSuccess").fadeTo(3000, 500).slideUp(500, function(){
    $(".appFlashSuccess").slideUp(500);
})

/**** ******/
$(".flip-card").on('click', function rotate() { 
    $($this).toggleClass('.active');
    
})


/****** autologin*/
window.onload = function(){
    document.forms['login_registration'].submit();
  }
})( jQuery );