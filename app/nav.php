<header class="nav-wrapper">
    <img class="bird-logo" src="images/fuglelogo.svg" alt="" title="Pip pip!">
    <nav>
        <div class="container">
            <ul>
                <li class="one active"><a href="index.php">Home</a></li>
                <li class="two"><a href="#">Festival</a></li>
                <li class="three"><a href="ideavault.php">Idea vault</a></li>
                <li class="four"><a href="contact.php">Contact</a></li>
                <li class="five"><a href="tickets.php">Tickets</a></li>
                <div class="underline"></div>
            </ul>
        </div>
         <section class="material-design-hamburger">
    <button class="material-design-hamburger__icon">
      <span class="material-design-hamburger__layer"></span>
    </button>
  </section>
   

  <section class="menu menu--off">
                <li class="one active"><a href="index.php">Home</a></li>
                <li class="two"><a href="#">Festival</a></li>
                <li class="three"><a href="ideavault.php">Idea vault</a></li>
                <li class="four"><a href="contact.php">Contact</a></li>
                <li class="five"><a href="tickets.php">Tickets</a></li>
  </section>
    </nav>
</header>
<section class="wrapper">


  
</section>

<script>
(function() {

  'use strict';

  document.querySelector('.material-design-hamburger__icon').addEventListener(
    'click',
    function() {      
      var child;
      
      document.body.classList.toggle('background--blur');
      this.parentNode.nextElementSibling.classList.toggle('menu--on');

      child = this.childNodes[1].classList;

      if (child.contains('material-design-hamburger__icon--to-arrow')) {
        child.remove('material-design-hamburger__icon--to-arrow');
        child.add('material-design-hamburger__icon--from-arrow');
      } else {
        child.remove('material-design-hamburger__icon--from-arrow');
        child.add('material-design-hamburger__icon--to-arrow');
      }

    });

})();
</script>