<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Design courses</title>

    <!--Fontawesome -->
    <script src="https://kit.fontawesome.com/86a91fcfba.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/global.css" />
  </head>
  <body>
    <!-- Navbar section start -->
    <nav class="navbar">
      <div class="sectionWrapper">
        <div class="logo">
          <p>Learn</p>
          <p>by doing</p>
        </div>
        <div class="hamburguerMenu" onclick="handleHamburgerMenu()">
          <i class="fas fa-bars menuOpen"></i>
          <i class="fas fa-times menuClose"></i>
        </div>
        <div class="navbarItems">
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="#home" class="navbarLink">Home</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="#courses" class="navbarLink">Our courses</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="#whyUs" class="navbarLink">Why us</a>
          </div>
          <div class="navbarItem" onclick="handleHamburgerMenu()">
            <a href="#contact" class="navbarLink">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar section end -->

    <!-- Hero section end -->
    <section id="home" class="hero">
      <div class="overlay"></div>
      <div class="sectionWrapper">
        <div class="headline">Learn Illustration</div>
        <div class="subHeadline">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste
          blanditiis delectus quidem libero autem dolores quod sunt veniam?
        </div>
        <button class="callToActions">
          <a href="#contact"> Get in touch </a>
        </button>
      </div>
    </section>
    <!-- Hero section end -->

    <!-- Courses section start -->
    <section id="courses">
      <div class="sectionWrapper">
        <div class="coursesWrapper">
          <div class="course right photoshop">
            <div class="images">
              <div class="image imageOne"></div>
              <div class="image imageTwo"></div>
              <div class="image imageThree"></div>
              <div class="image imageFour"></div>
            </div>
            <div class="information">
              <div class="name">Classes to Spark Your Creativity</div>
              <div class="underline"></div>
              <div class="description">
                Unlock a passion, side hustle, or new professional skill with
                thousands of classes in design, business, and more.
              </div>
              <button class="getInTouch">
                <a href="#contact">Get in touch</a>
              </button>
            </div>
          </div>

          <div class="course left photoshop">
            <div class="information">
              <div class="name">Classes to Spark Your Creativity</div>
              <div class="underline"></div>
              <div class="description">
                Unlock a passion, side hustle, or new professional skill with
                thousands of classes in design, business, and more.
              </div>

              <button class="getInTouch">
                <a href="#contact">Get in touch</a>
              </button>
            </div>
            <div class="images">
              <div class="image imageOne"></div>
              <div class="image imageTwo"></div>
              <div class="image imageThree"></div>
              <div class="image imageFour"></div>
            </div>
          </div>

          <div class="course right photoshop">
            <div class="images">
              <div class="image imageOne"></div>
              <div class="image imageTwo"></div>
              <div class="image imageThree"></div>
              <div class="image imageFour"></div>
            </div>
            <div class="information">
              <div class="name">Classes to Spark Your Creativity</div>
              <div class="underline"></div>
              <div class="description">
                Unlock a passion, side hustle, or new professional skill with
                thousands of classes in design, business, and more.
              </div>
              <button class="getInTouch">
                <a href="#contact">Get in touch</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses section end -->

    <!-- Why us section start -->
    <section id="whyUs">
      <div class="sectionWrapper">
        <p class="title">Why Join Us?</p>
        <div class="whyCards">
          <div class="whyCard">
            <div class="icon">
              <i class="fas fa-dolly"></i>
            </div>
            <div class="reason">LEARN BY DOING</div>
            <div class="description">
              Create projects you’re proud to share. Classes include prompts and
              resources.
            </div>
          </div>

          <div class="whyCard">
            <div class="icon">
              <i class="fas fa-people-carry"></i>
            </div>
            <div class="reason">LEARN WITH OTHERS</div>
            <div class="description">
              Share and collaborate with a growing community of over 8 million
              creators.
            </div>
          </div>

          <div class="whyCard">
            <div class="icon">
              <i class="fas fa-stopwatch"></i>
            </div>
            <div class="reason">LEARN FOR THE FUTURE</div>
            <div class="description">
              Unlock styles and strategies today’s creators need to know.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Why us section end -->

    <!-- Contact section start -->
    <section id="contact">
      <div class="sectionWrapper">
        <div class="contactHeadline">
          <p class="headline">Let us help you</p>
          <p class="subHeadline">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Necessitatibus ut laudantium nostrum nihil aperiam.
          </p>
        </div>
        <form action="" onsubmit="return handleSubmit(event)">
          <div class="formItem">
            <label for="name">Your name</label>
            <input
              type="text"
              name="name"
              required
              placeholder="What's you name?"
            />
          </div>
          <div class="formItem">
            <label for="email">Your email</label>
            <input
              type="text"
              name="email"
              required
              placeholder="What's your email?"
            />
          </div>
          <div class="formItem">
            <label for="message">Your message</label>
            <textarea
              name="message"
              required
              placeholder="How can we help you?"
            ></textarea>
          </div>
          <div class="submitMessage">
            <p class="errors"></p>
            <p class="success"></p>
          </div>
          <button type="submit">Send</button>
        </form>
      </div>
    </section>

    <!-- Contact section end -->

    <!-- Footer section end -->
    <footer>
      <div class="sectionWrapper">
        <div class="pages">
          <p class="title">Pages</p>
          <div class="contentPages">
            <a href="#home">Home</a>
            <a href="#about">About us</a>
            <a href="#whyUs">Why us</a>
            <a href="#contact">Contact</a>
          </div>
          <div class="extraPages">
            <a href="/terms_conditions.php">Terms of Service</a>
            <a href="/privacy_policy.php">Privacy policy</a>
          </div>
        </div>
        <div class="socialMedia">
          <p class="title">Social links</p>
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-instagram-square"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="contactInformation">
          <p class="title">Contact information</p>

          <div class="infoItem">
            <p class="type">Email</p>
            <p>email@company.com</p>
          </div>
          <div class="infoItem">
            <p class="type">Phone</p>
            <p>(934)-234-2342</p>
          </div>
          <div class="infoItem">
            <p class="type">Address</p>
            <p>Av Saint Park 342</p>
            <p>City Ground</p>
            <p>State</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->

    <script src="/js/app.js"></script>
  </body>
</html>
