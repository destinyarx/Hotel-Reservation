
jQuery(function ($) {

    $.Mustache.options.warnOnMissingTemplates = true;

    $.Mustache.load('../../../../../../project/tutorial/PHP Backend/small project/templates/app.html').done(function() {
        var canvas = $('#canvas');

        Path.map("#/main").to(() => {
            canvas.html("").append($.Mustache.render('mainPage'));
        } )
    
    
        Path.map("#/hotels").to(() => {
            canvas.html("").append($.Mustache.render('hotelPage'));
        } )
    
        Path.map("#/about").to(() => {
            canvas.html("").append($.Mustache.render('aboutUsPage'));
        } )
    
        Path.root("#/main")
    
        Path.listen()
    
    })
})

