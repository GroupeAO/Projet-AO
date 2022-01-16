(function( $ ) {
var deleteLink = $('.deleteButton')

    $(document).ready(function() {
        $(".alert-primary").hide();
        deleteLink.on('click', function alertDelete() {
            
            if (confirm('êtes-vous sur de vouloir supprimer ceci')) {
                $(".alert-primary").fadeTo(2000, 500).slideUp(500, function(){
                    $(".alert-primary").slideUp(500);
                });
            }
        });
    });
    /*****home after registration****/ 
    $(".registrationSuccess").fadeTo(5000, 500).slideUp(500, function(){
        $(".registrationSuccess").slideUp(500);
    });

/***form** */
    $(document).ready(function () { 
        $('#zipCode').selectize({ sortField: 'text' }); 
    });
/***app flash error ****/
$(".appFlashError").fadeTo(12000, 500).slideUp(500, function(){
    $(".appFlashError").slideUp(500);
});
/***app flash success ****/
$(".appFlashSuccess").fadeTo(3000, 500).slideUp(500, function(){
    $(".appFlashSuccess").slideUp(500);
})

/**** ******/


/****** autologin*/
window.onload = function(){
    document.forms['login_registration'].submit();
}
})( jQuery );