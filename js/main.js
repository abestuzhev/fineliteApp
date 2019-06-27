$( function() {
    $( "#slider-range-min" ).slider({
        range: "min",
        value: 500,
        min: 0,
        max: 2000,
        step:10,
        slide: function( event, ui ) {
            $( "#amount" ).val(ui.value + ' руб.' );
        }
    });
    $( "#amount" ).val(  $( "#slider-range-min" ).slider( "value" ) + " руб.");
} );