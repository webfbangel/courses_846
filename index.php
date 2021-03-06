<?php
// Message vars
$msg = "";
$msgClass = "";

if (filter_has_var(INPUT_POST, "submit")) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);


  if (!empty($name) && !empty($email) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      $msg = "Please use a valid email";
      $msgClass = "error";
    } else {
      $toEmail = "julio@fbangel.com";
      $subject = "Contact request From " . $name;
      $body = "
          <h2>Contact request</h2>
          <h4>Name</h4><p>" . $name . "</p>
          <h4>Name</h4><p>" . $email . "</p>
          <h4>Name</h4><p>" . $message . "</p>
        ";

      // Email headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\r";

      // Aditional headers
      $headers .= "From " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        $msg = "Your email has been sent";
        $mesgClass = "success";
      } else {
        $msg = "Your email was not sent";
        $msgClass = "error";
      }
    }
  } else {
    $msg = "Please fill in all fields";
    $msgClass = "error";
  }
}
?>

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
  <link rel="stylesheet" href="./css/global.css" />
</head>

<body>
  <!-- Navbar section start -->
  <nav class="navbar">
    <div class="sectionWrapper">
      <div class="logo">
        <p>Learning</p>
        <p>Simpl</p>
      </div>
      <div class="hamburguerMenu" onclick="handleHamburgerMenu()">
        <i class="fas fa-bars menuOpen"></i>
        <i class="fas fa-times menuClose"></i>
      </div>
      <div class="navbarItems">
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./index.php#home" class="navbarLink">Home</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="#courses" class="navbarLink">Our courses</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="#whyUs" class="navbarLink">Why us</a>
        </div>
        <div class="navbarItem" onclick="handleHamburgerMenu()">
          <a href="./contact.php" class="navbarLink">Contact</a>
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
        Learn the best courses from the best teachers around the world for a
        affordable price
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
        <div class="course courseOne right photoshop">
          <div class="images">
            <div class="image imageOne"></div>
            <div class="image imageTwo"></div>
            <div class="image imageThree"></div>
            <div class="image imageFour"></div>
          </div>
          <div class="information">
            <div class="name">Photoshop Essentials</div>
            <div class="underline"></div>
            <div class="description">
              This Adobe Photoshop Essentials course will teach you Photoshop
              Retouching as well as Photoshop for graphic design. You will be
              able to start earning money from your Photoshop Skills. You will
              be able to add Photoshop to your CV You will have over 20 of
              your own projects to add to your portfolio.
            </div>
            <button class="getInTouch">
              <a href="#contact">Get in touch</a>
            </button>
          </div>
        </div>

        <div class="course courseTwo left photoshop">
          <div class="information">
            <div class="name">Master Illustrator CC</div>
            <div class="underline"></div>
            <div class="description">
              In this Advanced course we'll learn Advanced techniques for
              graphic design, logo design & illustration. You will be able to
              earn more using these new Illustrator skills.
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

        <div class="course courseThree right photoshop">
          <div class="images">
            <div class="image imageOne"></div>
            <div class="image imageTwo"></div>
            <div class="image imageThree"></div>
            <div class="image imageFour"></div>
          </div>
          <div class="information">
            <div class="name">Adobe XD</div>
            <div class="underline"></div>
            <div class="description">
              You will learn how to use Adobe XD professionally for my clients
              Create interfaces for responsive web and mobile and apply tips
              to focus my work on the user experience Work with developers and
              effectively share projects
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
            Create projects you???re proud to share. Classes include prompts and
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
            Unlock styles and strategies today???s creators need to know.
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
          Let's get in contact. We are here just to help you out.
        </p>
      </div>
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <div class="formItem">
          <label for="name">Your name</label>
          <input type="text" name="name" placeholder="What's you name?" required value="<?php echo isset($_POST["name"]) ? $name : "" ?>" />
        </div>

        <div class="formItem">
          <label for="email">Your email</label>
          <input type="text" name="email" required placeholder="What's your email?" value="<?php echo isset($_POST["email"]) ? $email : "" ?>" />
        </div>
        <div class="formItem">
          <label for="message">Your message</label>
          <textarea name="message" required placeholder="How can we help you?"><?php echo isset($_POST["message"]) ? $message : "" ?></textarea>
        </div>
        <?php if ($msg != "") : ?>
          <div class="submitMessage">
            <p class="<?php echo $msgClass; ?>">
              <?php echo $msg; ?>
            </p>
          </div>
        <?php endif; ?>
        <button type="submit" name="submit">Send</button>
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
          <a href="./index.php#home">Home</a>
          <a href="#about">About us</a>
          <a href="#whyUs">Why us</a>
          <a href="./contact.php">Contact</a>
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
          <p>info@learningsimpl.com</p>
        </div>
        <div class="infoItem">
          <p class="type">Phone</p>
          <p>303-241-0656</p>
        </div>
        <div class="infoItem">
          <p class="type">Address</p>
          <p>4543 Sweetwood Drive</p>
          <p>Denver</p>
          <p>Colorado</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section end -->

  <script src="./js/app.js"></script>
</body>

</html>