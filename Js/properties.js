document.addEventListener('DOMContentLoaded', function() {

    // Sticky Navbar
    window.onscroll = function() { scrollFunction() };
    function scrollFunction() {
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
      } else {
        navbar.classList.remove("sticky");
      }
    }
   
   
          const searchInput = document.getElementById('searchInput');
          const propertyCards = document.querySelectorAll('.card');
        
          searchInput.addEventListener('keyup', function() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            
            propertyCards.forEach(card => {
              const cardText = card.textContent.toLowerCase();
              const cardParent = card.parentElement;
              
              if (cardText.includes(searchTerm)) {
                $(cardParent).fadeIn();
              } else {
                $(cardParent).fadeOut();
              }
            });
   
            
        
            const matchingCards = Array.from(propertyCards).filter(card => {
              const cardText = card.textContent.toLowerCase();
              return cardText.includes(searchTerm);
            });
        
            const nCards = matchingCards.length;
            const nResults = document.getElementById('no-results');
        
            if (nCards === 0) {
              $(nResults).text('No results found');
            } else if (nCards > 1) {
              nResults.innerText = nCards.toString() + ' results found';
            }
        
            if (nCards < 1) {
              console.log("There is no lucky card");
            } else if (nCards >= 1) {
              const potentialLuckyCardsTitles = matchingCards.map(card => {
                return card.querySelector('.card-title').textContent;
              });
              console.log("Lucky card is " + potentialLuckyCardsTitles[Math.floor(Math.random() * potentialLuckyCardsTitles.length)]);
            }
          });
  });
  
  
  
  function validate() {
  const searchTerm = searchInput.value.trim();
  
  if (searchTerm === '') {
    const errorMessage = document.createElement('p');
    errorMessage.textContent = 'You need to enter a search term to proceed';
    errorMessage.classList.add('error-message');
  
    const formGroup = searchInput.parentElement;
    formGroup.appendChild(errorMessage);
  
    setTimeout(function() {
      errorMessage.remove();
    }, 3000); 
  } else {
    console.log('Kërkesa juaj është: ', searchTerm);
    
  }
  }
  
  
  const searchForm = document.querySelector('.form-inline');
     
  searchForm.addEventListener('submit', function(event) {
  event.preventDefault(); 
  
  validate(); // Thirrja e funksionit të validimit
  });
  
  
  $(document).ready(function(){
  $("#toggleButton").click(function(){
    var $hiddenCards = $(".hidden");
    if ($hiddenCards.is(":hidden")) {
      $hiddenCards.slideDown(); // shfaqi hidden cards
      $(this).text('Hide');
    } else {
      $hiddenCards.slideUp(); // mshefi shown cards
      $(this).text('Show more');
    }
    
  });
  
  
  $(".view-details").click(function(event){
    event.preventDefault(); 
    var targetID = $(this).attr('id').replace("p", "pp"); 
    $("#" + targetID).slideToggle(); 
    
  });
  });