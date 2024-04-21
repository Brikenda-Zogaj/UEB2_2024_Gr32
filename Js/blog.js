
$(document).ready(function() {
    $('.read-more-btn').on('click', function() {  
        var $readMoreText = $(this).prev('.text').find('.read-more-text');
        $readMoreText.slideToggle(); 
        
        $(this).text(function(_, currentText) {  
            return currentText === 'Read More...' ? 'Read Less' : 'Read More...';
        });
        });
      });
      
    
      document.getElementById('navbar').addEventListener('scroll',scrollFunction);
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
  
  document.getElementById("ndryshoTekstin").onclick = function() {
    this.innerHTML = "Teksti është ndryshuar!";
  };
  
  
  
  function ndryshoNgjyren() {
    document.body.style.backgroundColor = " rgba(187, 187, 193,0.2)";
  }
  
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    card.classList.add('new-class'); //Add class
  });
  
  function HTMLContent(content) {
    this.content = content;
  
    this.getParagraph = function () {
      const matchResult = this.content.match(/<p>([\s\S]+)<\/p>/);
      return matchResult ? matchResult[1] : null;
    };
  
    this.modifyParagraph = function (find, replaceWith) {
      const paragraph = this.getParagraph();
      if (paragraph) {
        return paragraph.replace(new RegExp(find, 'g'), replaceWith);
      } else {
        return 'Paragraph not found or HTML structure differs.';
      }
    };
  }
  const htmlContent = `<div class="card tekst">
   
  <p>Houses, the sanctuary we return to after a long day, hold stories within their walls. They stand as more than just physical structures; they encapsulate memories, emotions, and a sense of belonging.
  Within these walls, we find comfort, safety, and the freedom to express our truest selves.</p>
  
  </div>`;
  
  const myHTMLContent = new HTMLContent(htmlContent);
  
  // Get the paragraph content
  const paragraph = myHTMLContent.getParagraph();
  console.log('Original paragraph:', paragraph);
  
  // Modify the paragraph content
  const modifiedParagraph = myHTMLContent.modifyParagraph('long', 'tiring');
  console.log('Modified paragraph:', modifiedParagraph);
  
  