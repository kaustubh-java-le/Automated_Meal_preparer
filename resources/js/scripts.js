 $(document).ready(function(){
    $('.js--features-section').waypoint(function(direction) {
        if (direction = 'down'){
            $('nav').addClass('sticky');
        }
        else{
            $('nav').removeClass('sticky');
        }
    }); 
});





/*$('#handler-first').waypoint(function(direction) {
  notify(this.element.id + ' hit 25% from top of window') 
}, {
  offset: '25%'
})
https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js
*/