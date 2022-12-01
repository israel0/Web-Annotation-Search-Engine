(function() {
  "use strict";

  /* variables */
  const annotationBtn = document.querySelectorAll('.annotation-btn');
  const annotationWrapper = document.querySelector('.annotation-wrapper');
  const annotationCloseBtn = document.querySelector('.annotation-close-btn');
  const annotationParagraph = document.querySelector('.annotation-text');

  /* put here your annotations texts */
  const annotationTexts = {
    text1: "<h3>WHAT IS DATA</h3><br><hr>Data noun a plural of datum. (used with a plural verb) individual facts, statistics, or items of information: <br> These data represent the results of our analyses. (usually used with a singular verb)Digital Technology. information in digital format, as encoded text or numbers, or multimedia images, audio, or video: <br> The data was corrupted and can't be retrieved. <br><br>Data are entered by terminal for immediate processing by the computer. (used with a singular verb) a body of facts; information: <br> Additional data is available from the president of the firm.",
    text2: "<h3>WHAT IS DESIGN</h3><br><hr> To execute a plan <br>2: to draw, lay out, or prepare a design. <br> the arrangement of elements or details in a product or work of art… his sense of structure, both in the general design of Paradise Lost and Samson, and in his sx … T. S. Eliot <br>7: a decorative patterna floral design<br>8: the creative art of executing aeshetic or functional designsstudied design in college",
    text3: "<h3>WHAT IS JAVASCRIPT</h3><br><hr>JavaScript is also a fun and rewarding language, which is especially important when you're just getting started in software development. The community support is very good, so if you get stuck, there's a good chance that the problem and its solution already exist on the web",
    text4: "<h3>WHAT IS SYSTEM</h3><br><hr>What is a system in simple definition? A system is a collection of elements or components that are organized for a common purpose. The word sometimes describes the organization or plan itself (and is similar in meaning to method, as in 'I have my own little system') and sometimes describes the parts in the system (as in 'omputer system')."
  }

  /* .annotation-btn events */
  annotationBtn.forEach(function(button) {
    button.addEventListener('click', function() {

      // check if this button was used to open the annotation-wrapper
      if (this.classList.contains('annotation-btn--active')) {
        annotationWrapper.classList.remove('show-annotation');
        setTimeout(function() {
          annotationParagraph.innerHTML = '';
        }, 300);
        this.classList.remove('annotation-btn--active');
        this.setAttribute('aria-describedby', '');

      } else {
        const text = annotationTexts[this.dataset.text];
        annotationBtn.forEach(function(btn) {
          btn.classList.remove('annotation-btn--active');
          btn.setAttribute('aria-describedby', '');
        })
        annotationParagraph.innerHTML = text;
        annotationWrapper.classList.add('show-annotation');
        this.classList.add('annotation-btn--active');
        this.setAttribute('aria-describedby', 'annotation-text');
      }
    })
  })

  /* .annotation-close-btn events */
  annotationCloseBtn.addEventListener('click', function() {
    annotationWrapper.classList.remove('show-annotation');
    setTimeout(function() {
      annotationParagraph.innerHTML = '';
    }, 300);
    annotationBtn.forEach(function(btn) {
      btn.classList.remove('annotation-btn--active');
      btn.setAttribute('aria-describedby', '');
    });
  });

})();
