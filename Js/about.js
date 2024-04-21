
window.onscroll = function() { scrollFunction() };
function scrollFunction() {
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}
     
     

     




function toggleImagePosition() {
       var image = document.querySelector('.content .image');
   
       if (image.classList.contains('align-left')) {
           image.classList.remove('align-left');
           image.classList.add('align-right');
       } else {
           image.classList.remove('align-right');
           image.classList.add('align-left');
       }
   }
   
   // Ndërrimi i pozicionit çdo 5 sekonda
   setInterval(toggleImagePosition, 5000);


   $(document).ready(function() {
       // Fade effect
       $('.agent-image').on('mouseenter', function() {
           $(this).fadeTo('slow', 0.5);
       }).on('mouseleave', function() {
           $(this).fadeTo('slow', 1);
       });
   
       // Slide effect
       $('.team-info').on('mouseenter', function() {
           $(this).slideUp(200).slideDown(200);
       });
   
       // Animate effect
       $('.social-links').on('mouseenter', function() {
           $(this).animate({
               opacity: 0.7,
               fontSize: "18px"
           }, 300);
       }).on('mouseleave', function() {
           $(this).animate({
               opacity: 1,
               fontSize: "16px"
           }, 300);
       });
   });
  
   
   