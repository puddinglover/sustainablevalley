<?php require('header.php'); ?>

<?php require('nav.php'); ?>
<main>
    <section class="landing">
        <div class="landing__skies">
            <img src="images/sky.svg" alt="Cloud">
            <img src="images/sky.svg" alt="Another cloud">
            <img src="images/sky2.svg" alt="Yet another cloud">
            <img src="images/sky2.svg" alt="Guess what? It's a cloud!">
            <img src="images/sky.svg" alt="Is it a bird? Is it a plane? No, it's a cloud!">
        </div>
        <div class="landing__bird">
            <img class="landing__bird-logo" src="images/fuglelogo.svg" alt="Bird">
        </div>
        <!-- <div class="button">
            <a href="#">Explore</a>
        </div> -->
        <aside class="down">
          <a href="#ticket-section"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </aside>
    </section>
    <section id="ticket-section" class="tickets">
        <div class="wrapper">
            <div class="tickets__card">
                <h2>Partout ticket</h2>
                <img class="ticket__picture" src="images/partoutticket.jpg" alt="Partout Ticket">
                <article class="">
                    <p>5 days of innovation and sustainable thinking. Get access to all events and camping in the University Park.</p>
                </article>
                <div class="button button--cards">
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="tickets__card">
                <h2>One day ticket</h2>
                <img class="ticket__picture" src="images/1dayticket.jpg" alt="One Day Ticket">
                <article class="">
                    <p>Looking forward to a specific event? One day tickets are available for all 5 days. Camping is not included.</p>
                </article>
                <div class="button button--cards">
                    <a href="#">Buy</a>
                </div>
            </div>
            <div class="tickets__card">
                <h2>Support ticket</h2>
                <img class="ticket__picture" src="images/supportticket.jpg" alt="Support Ticket">
                <article class="">
                    <p>Can't make it to the festival? Buy a support ticket! This is your contribution to a sustainable future.</p>
                </article>
                <div class="button button--cards">
                    <a href="#">Buy</a>
                </div>
            </div>
        </div>
    </section>
    <section class="sustainability">
        <article class="sustainability__description">
            <div class="sustainability__description-center">
                <h1>sustainability</h1>
                <p>
                    Sustainability is all about caring.
                    Caring for the world we live in and the people that inhabit it.
                    We're all in this together so why not help each other, right?
                    This festival will gather the innovative minds of 1000 people from all over the globe to create new, sustainable solutions for our planet.<br><br>
                    Don't miss it.
                </p>
                <div class="button">
                    <a href="#">Explore</a>
                </div>
            </div>
        </article>
        <div class="sustainability__rainbow"></div>
    </section>
    <section class="partners">
        <div class="wrapper">
            <article class="partners__logo">
                <img src="http://www.globalcitizen.net/images/partners/aau.png" alt="Aarhus University">
                <img src="http://www.globalcitizen.net/images/partners/arla.png" alt="Arla">
                <img src="https://www.midttrafik.dk/its/gfx/logo.png" alt="Midttrafik">
                <img src="http://www.globalcitizen.net/images/partners/agro.png" alt="Agro Food Park">
                <img src="http://www.globalcitizen.net/images/partners/aarhus.png" alt="Aarhus 2017">
                <img src="http://www.globalcitizen.net/images/partners/go-green.png" alt="Go Green with Aarhus">
                <img src="http://www.globalcitizen.net/images/partners/sustainia.png" alt="Sustainia">
                <img src="http://www.globalcitizen.net/images/partners/wwf.png" alt="WWF">
                <img src="http://www.globalcitizen.net/images/partners/ki.png" alt="Det Danske Kulturinstitut">
            </article>
            <article class="partners__description">
                <h1>Partnership</h1>

                <p>
                  We value our partnerships. <br>
                  With their unique approaches to sustainability, every single partner has played a key role in making this festival happen.<br>
                  Being a partner for Smart Sustainable Valley gives access to a vast network of sustainability minded companies and organisations.
                  It is not only an investment for this festival. It is an investment in the future.
                </p>
                <h3>Interested?</h3>
                <div class="button">
                    <a href="#">Become partner</a>
                </div>
            </article>
        </div>
    </section>
    <section class="festival">
        <div class="festival__bottom">
            <article class="festival__description">
                <img class="bird-logo--bottom" src="images/fuglelogo.svg" alt="Bird">
                <img class="branch" src="images/branch.svg" alt="Branch">
                <div class="festival__description-center">
                    <h1>University park</h1>
                    <p>
                      In the heart of Aarhus lies the University Park. <br>
                      This unique University campus will give Smart Sustainable Valley the right setting for 5 days of innovation and sustainable thinking.
                    </p>
                    <div class="button">
                        <a href="#">Buy</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>
<?php require('footer.php'); ?>
