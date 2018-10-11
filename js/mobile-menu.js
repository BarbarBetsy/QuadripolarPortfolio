$(document).ready(function() {
  $(".fa-bars").on("click", function() {
    $(".menu").toggleClass("open");
  });

  $(".menu").on("click", function() {
    $(".menu").toggleClass("open");
  });  
});
