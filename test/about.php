<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About | Skating Polly</title>
    <link rel="stylesheet" href="/test/styles/base.css">
    <link rel="stylesheet" href="/test/styles/typography.css">
    <link rel="stylesheet" href="/test/styles/layout.css">
    <link rel="stylesheet" href="/test/styles/components.css">
    <link rel="stylesheet" href="/test/styles/modals.css">
    <link rel="stylesheet" href="/test/styles/about.css" />
  </head>
 <body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/modals.php"); ?>
    <div class="about-section">
      <!--Profile Buttons-->
      <div class="profile-buttons-container">
        <button class="skating-polly-profile-button">Skating Polly</button>
        <button class="kelli-profile-button">Kelli</button>
        <button class="peyton-profile-button">Peyton</button>
        <button class="kurtis-profile-button">Kurtis</button>
      </div> <!--Buttons div-->
      <!--SP Profile-->
      <div class="sp profile-container hidden" id="sp-profile-container">
        <div class="profile-left">
          <img  src="assets/Images/sp-profile-pic.jpg" alt="Skating Polly" class="sp-icon" />
        </div>
        <!--About SP-->
        <div class="profile-right">
          <div class="about-me-container">
            <h4 class="profile-section-head-element">About Skating Polly</h4>
            <p class="profile-field">Skating Polly is an Ugly Pop trio from Oklahoma City, Oklahoma,
            founded in 2009 by step-sisters Kelli Mayo and Peyton Bighorse. What
            started with a shared love of raw, unpredictable music quickly turned
            into a full-blown force. In 2017, Kelli's brother Kurtis Mayo joined
            on drums, adding a new layer of intensity. They've released 6 albums,
            countless EPs and singles, and built a reputation for explosive live
            shows. They've toured across the US, Canada, the UK, and Europe with
            no plans to stop anytime soon.</p>
          </div>
        </div>
      </div>
      <!--Kelli Profile -->
      <div class="kelli profile-container hidden" id="kelli-profile-container">
      </div> <!--End Kelli Profile-Container-->
      <!--Peyton Profile -->
      <div class="peyton profile-container" id="peyton-profile-container">
        <div class="profile-left">
          <img
            src="assets/Images/pmb-portrait.png"
            alt="drawing of peyton with her dog"
            class="profile-icon"
          />
        <!--Tour Playlist-->
          <div class="tour-playlist-container">
            <h4 class="profile-section-head-element"><a href="https://bandcamp.com/stupidho420" target="_blank">Tour Playlist</a></h4>
            <ul class="tour-playlist-field-container profile-field-container">
              <li class="profile-field">Tibetan Pop Stars - Hop Along</li>
              <li class="profile-field">Trap Door - Samantha Crain</li>
              <li class="profile-field">Soup - Bugsy</li>
              <li class="profile-field">Drug Dealin Pagans - Kneecap</li>
              <li class="profile-field">Floe - Philip Glass</li>
              <li class="profile-field">Glide - Lily Chou-Chou</li>
              <li class="profile-field">Between The Bars - Elliott Smith</li>
              <li class="profile-field">I bhFiacha Linne - Kneecap</li>
              <li class="profile-field">Change - Kate Nash</li>
              <li class="profile-field">Diamond Mine - Hop Along</li>
            </ul>
          </div>
        <!--Quizzes-->
          <div class="quiz-container">
            <h4 class="profile-section-head-element">Quizzes</h4>
            <ul class="quiz-field-container profile-field-container">
              <li class="profile-field">Which Skating Polly member are you?</li>
              <li class="profile-field">Find out your chaos level</li>
              <li class="profile-field">
              Build your perfect day in the van to reveal your tour persona
              </li>
            </ul>
          </div>
        </div> <!--End Profile-Left-->

        <div class="profile-right">
          <div class="profile-right-heading">
            <div class="heading-left">
              <span class="profile-name">Peyton</span>
            </div>
            <div class="heading-right">
              <div class="quiz-result" id="chaos-level">Chaos Level: 4</div>
              <div class="quiz-result" id="member-class">Class: Peyton</div>
              <div class="quiz-result" id="tour-persona">
              Tour Persona: The Napper
              </div>
            </div>
          </div>
          <!--Favorites-->
          <div class="about-me-container">
            <h4 class="profile-section-head-element">About Me</h4>
            <div class="about-me-fields-container">
              <div class="about-me-left">
                <ul class="profile-field-container">
                  <li class="profile-field">
                  Favorite SP Song:
                  <span>Flatwound Strings</span>
                  </li>
                  <li class="profile-field">
                  Favorite SP Video:
                  <span>Tiger at the Drugstore</span>
                  </li>
                  <li class="profile-field">
                  Favorite (non-SP) Album:
                  <span>Get Disowned - Hop Along</span>
                  </li>
                  <li class="profile-field">
                  Favorite Color:
                  <span class="peyton-fav-color">fav-color</span>
                  </li>
                </ul>
              </div>
              <div class="about-me-right">
                <ul class="profile-field-container">
                  <li class="profile-field">
                  Pet you'd bring on tour:
                  <span>Georgie!!!</span>
                  </li>
                  <li class="profile-field">
                  First album you ever bought:
                  <span>Dookie - Green Day</span>
                  </li>
                  <li class="profile-field">
                  Favorite game:
                  <span>Hades</span>
                  </li>
                  <li class="profile-field">
                  Favorite movie:
                  <span>The Banshees of Inishirin</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--Collections-->
          <div class="collections-container">
            <div class="about-me-fields-container">
              <div class="about-me-left">
                <h4 class="profile-section-head-element">Bookshelf</h4>
                <ul class="profile-field-container">
                  <li class="profile-field">
                  'A Little Life' - Hanya Yanagihara
                  </li>
                  <li class="profile-field">
                  'A Secret History' - Donna Tart
                  </li>
                  <li class="profile-field">
                  'Circe' - Madeline Miller
                  </li>
                  <li class="profile-field">
                  'Educated' - Tara Westover
                  </li>
                  <li class="profile-field">
                  'Horse' - Geraldine Brooks
                  </li>
                  <li class="profile-field">
                  'Irena's Children' - Tilar J. Mazzeo
                  </li>
                  <li class="profile-field">
                  'The Family Fang' - Kevin Wilson
                  </li>
                  <li class="profile-field">
                  'The Heaven & Earth Grocery Store' - James McBride
                  </li>
                  <li class="profile-field">
                  'Tomorrow, Tomorrow, and Tomorrow' - Gabrielle Zevin
                  </li>
                  <li class="profile-field">
                  'Wild' - Cheryl Strayed
                  </li>
                  <li class="profile-field">
                  'You Shall Know Our Velocity' - Dave Eggers
                  </li>
                </ul>
              </div>
              <div class="about-me-right">
                <h4 class="profile-section-head-element">Pics</h4>
                <div class="carousel profile-field-container"> 
                  <div class="carousel-track-container">
                    <div class="carousel-track">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-00.jpeg" alt="Georgie">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-01.jpeg" alt="Photo 1">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-02.jpeg" alt="Photo 2">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-03.jpeg" alt="Photo 3">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-04.jpeg" alt="Photo 4">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-05.jpeg" alt="Photo 5">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-06.jpeg" alt="Photo 6">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-07.jpeg" alt="Photo 7">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-08.jpeg" alt="Photo 8">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-09.jpeg" alt="Photo 9">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-10.jpeg" alt="Photo 10">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-11.jpeg" alt="Photo 11">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-12.jpeg" alt="Photo 12">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-13.jpeg" alt="Photo 13">
                      <img class="carousel-slide" src="assets/Images/georgie/georgie-14.jpeg" alt="Photo 14">
                    </div>
                  </div>
                  <div class="carousel-buttons-container">
                    <button class="carousel-button prev">‹</button>
                    <button class="carousel-button next">›</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Favorites-->
          <div class="my-life-list-container">
            <h4 class="profile-section-head-element">My Life List (Top 10)</h4>
            <div class="my-life-list-fields-container">
              <div class="my-life-list-left">
                <ul class="profile-field-container">
                  <li class="profile-field">
                  Steller's Jay
                  </li>
                  <li class="profile-field">
                  Cooper's Hawk
                  </li>
                  <li class="profile-field">
                  Wood Stork
                  </li>
                  <li class="profile-field">
                  Osprey
                  </li>
                  <li class="profile-field">
                  Brown Headed Cowbird
                  </li>
                </ul>
              </div>
              <div class="my-life-list-right">
                <ul class="profile-field-container">
                  <li class="profile-field">
                  Great Blue Heron
                  </li>
                  <li class="profile-field">
                  Great Egret
                  </li>
                  <li class="profile-field">
                  Red Tailed Hawk
                  </li>
                  <li class="profile-field">
                  Bald Eagle
                  </li>
                  <li class="profile-field">
                  Northern Flicker
                  </li>
                </ul>
              </div>
            </div>
          </div> <!--end life list-->
        </div> <!--End Profile-Right-->
        
      </div> <!--End Peyton Profile-Container-->
      <!--Kurtis Profile -->
      <div class="kurtis profile-container hidden" id="kurtis-profile-container">
     
      
        
      </div> <!--End Kurtis Profile-Container-->
    </div> <!--End About-Section-->


      
    

    <!--JS Here-->
    <script src="javascript/modals.js"></script>
    <script src="javascript/about-page-buttons.js"></script>
    <script src="javascript/image-gallery-buttons.js"></script>

  </body>
</html>
