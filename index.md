<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="icon" href="images\fern.ico">

  <!-- importing fonts for css -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bilbo&display=swap" rel="stylesheet">

  <!-- importing swiper api -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

  <title>Home Page</title>
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <!-- Logo -->
    <div class="logo">
      <h4>Hello, friend</h4>
    </div>
    <!-- Navigation Links -->
    <ul class="nav-links">
      <li><a href="index.html">Home</a></li>
      <li><a href="About.html">About</a></li>

      <!-- Work Dropdown Menu -->
      <li class="work_dropdown"><a href="#">Work</a>

        <div class="dropdown-content">
          <a href="Photography.html">Photography</a>
          <a href="Programming.html">Programming Projects</a>
        </div>
      </li>

      <li><a href="Contact.html">Contact</a></li>
    </ul>

    <!-- Burger Menu -->
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>

  </nav>

  <script src='js/app.js'></script>

  <about>

    <!-- Name -->
    <div class="name">
      <p>Matt Rieser</p>
    </div>

    <!-- Desciption -->
    <p><em>Software Developer, Photographer, and aspiring Horticulturist</em></p>
    <p>Hello, feel free to have a look around the place.<br />
      This is my programming playground to try new designs, express my creativity, and just to experiment.<br />
      So couch surf for as long as you like.
    </p>

  </about>



</body>

</html>