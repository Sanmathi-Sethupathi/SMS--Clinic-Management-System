<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Clinic</title>
    <link href="./css/home.css" rel="stylesheet">
    <script src="C:\xampp\htdocs\Clinic_Mgmt\js\swiper.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->

</head>
<body>
<!-- Start header -->
<header class="header">
  <!-- Logo -->
  <a href="#" class="logo">
    <i class="fas fa-tooth"></i>
    DentistCare
  </a>

  <!-- Navbar -->
  <nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#services">Services</a>
    <a href="#team">Our Team</a>
    <a href="patient/mybookings.php">My Bookings</a>
    <a href="#blog">Blog</a>
  </nav>

  <!-- Appointment button -->
  <a href="index.php" class="btn">Log out</a>
  <div id="menu-btn" class="fas fa-bars"></div>
</header>
<!-- End header -->

<!-- Start home section -->
<section id="home" class="home">
  <div class="content">
    <h3>Let Your Smile Shine Brighter</h3>
    <p>Your dental health is our priority. We offer top-notch care to keep your teeth healthy and bright.</p>
    <a href="patient/form.php" class="btn">Make an Appointment</a>
  </div>
</section>
<!-- End home section -->

<!-- Start about section -->
<section id="about" class="about">
  <h1 class="heading"> About Us </h1>
  <div class="row">
    <div class="image">
      <img src="https://images.pexels.com/photos/3845810/pexels-photo-3845810.jpeg" alt="medical equipment">
    </div>
    <div class="content">
      <h3>Your Smile, Our Priority</h3>
      <p>At DentistCare, we provide high-quality services tailored to your needs. We ensure that you leave with a brighter smile and a happy heart.</p>
      <a href="#" class="btn">Read More</a>
    </div>
  </div>
</section>
<!-- End about section -->

<!-- Start services section -->
<section id="services" class="services">
  <h1 class="heading"> Our Services </h1>
  <div class="box-container">
    <div class="box">
      <img src="https://us.123rf.com/450wm/paladjai/paladjai2003/paladjai200300008/141737198-dental-cartoon-of-a-tooth-doctor-and-calendar-illustration.jpg" alt="Online schedule">
      <h3>Online Appointments</h3>
      <p>Book your appointment easily and save time by scheduling your dental visits online.</p>
    </div>
    <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSRWBIbmYsAjgU4MAqw7obVGB5T8GhSUuKKg&s" alt="Cosmetic Dentistry">
      <h3>Cosmetic Dentistry</h3>
      <p>Enhance your smile with our top-of-the-line cosmetic treatments for that perfect look.</p>
    </div>
    <div class="box">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRfOoFKt4mVRUvZlYOF1Lp3hbFLeKbSEryobn54WC-Rtd4s1DTkDeaLvr6C0YTz4xltKU&usqp=CAU" alt="Oral Hygiene">
      <h3>Oral Hygiene Experts</h3>
      <p>Keep your teeth healthy with expert hygiene tips and regular check-ups from our specialists.</p>
    </div>
  </div>
</section>
<!-- End services section -->

<!-- Start team section -->
<section id="team" class="team">
    <h1 class="heading"> Meet Our Team </h1>
    <div class="swiper team-slider">
        <div class="swiper-wrapper" style="display: flex;">
            <div class="swiper-slide slide" style="margin-right: 40px;">
                <div class="image">
                    <img src="./images/sanmathi.jpg" alt="Sanmathi">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Sanmathi</h3>
                    <span>General Surgeon</span>
                </div>
            </div>

            <div class="swiper-slide slide" style="margin-right: 40px;">
                <div class="image">
                    <img src="./images/anas.jpg" alt="Anas">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Mohammed Shahul Anas</h3>
                    <span>General Surgeon</span>
                </div>
            </div>

            <div class="swiper-slide slide" style="margin-right: 40px;">
                <div class="image">
                    <img src="./images/shandeep.jpg" alt="Shandeep">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Shandeep</h3>
                    <span>General Surgeon</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End team section -->

<!-- Start pricing section -->
<section id="pricing" class="pricing">
  <h1 class="heading"> Pricing Plans </h1>
  <div class="box-container">
    <div class="box">
      <h3 class="title">Basic</h3>
      <div class="price">
        <span class="currency">$</span>
        <span class="amount">18</span>
        <span class="duration"> /year</span>
      </div>
      <ul>
        <li><i class="fas fa-check"></i> Alignment Specialist</li>
        <li><i class="fas fa-check"></i> Cavity Inspection</li>
        <li><i class="fas fa-check"></i> Cosmetic Dentistry</li>
        <li><i class="fas fa-check"></i> Oral Hygiene Experts</li>
      </ul>
      <a href="#" class="btn">Read More</a>
    </div>

    <div class="col-md-4">
            <div class="box">
                <h3 class="title">Standard</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">30</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li><i class="fas fa-check"></i> Everything in Basic</li>
                    <li><i class="fas fa-check"></i> X-ray Examination</li>
                    <li><i class="fas fa-check"></i> Teeth Whitening</li>
                    <li><i class="fas fa-check"></i> Periodontal Therapy</li>
                </ul>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="box">
                <h3 class="title">Premium</h3>
                <div class="price">
                    <span class="currency">$</span>
                    <span class="amount">45</span>
                    <span class="duration"> /year</span>
                </div>
                <ul>
                    <li><i class="fas fa-check"></i> Everything in Standard</li>
                    <li><i class="fas fa-check"></i> Free Emergency Visits</li>
                    <li><i class="fas fa-check"></i> Oral Cancer Screening</li>
                    <li><i class="fas fa-check"></i> Custom Mouthguards</li>
                </ul>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    
  </div>
</section>
<!-- End pricing section -->

<!-- Start blog section -->
<section id="blog" class="blog">
  <h1 class="heading"> Our Blog </h1>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="https://honesttoothdental.com.au/wp-content/uploads/2024/08/senior-man-having-dental-checkup-2023-11-27-05-30-06-utc-scaled.jpg" alt="Dental Blog">
      </div>
      <div class="content">
        <a href="#" class="link">Oral Health</a>
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 01<sup>st</sup> October, 2022</a>
          <a href="#"><i class="fas fa-user"></i>by Admin</a>
        </div>
        <h3>Common Dental Issues and How to Prevent Them</h3>
        <p>Learn about the most common dental problems and tips on maintaining your oral health.</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="https://images.pexels.com/photos/3845625/pexels-photo-3845625.jpeg" alt="Dental Blog">
      </div>
      <div class="content">
        <a href="#" class="link">Oral Health</a>
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 01<sup>st</sup> October, 2022</a>
          <a href="#"><i class="fas fa-user"></i>by Admin</a>
        </div>
        <h3>Common Dental Issues and How to Prevent Them</h3>
        <p>Learn about the most common dental problems and tips on maintaining your oral health.</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="https://thedentalcareblog.com/wp-content/uploads/2024/05/about-us-6657513adc53d.webp" alt="Dental Blog">
      </div>
      <div class="content">
        <a href="#" class="link">Oral Health</a>
        <div class="icons">
          <a href="#"> <i class="fas fa-calendar"></i> 01<sup>st</sup> October, 2022</a>
          <a href="#"><i class="fas fa-user"></i>by Admin</a>
        </div>
        <h3>Common Dental Issues and How to Prevent Them</h3>
        <p>Learn about the most common dental problems and tips on maintaining your oral health.</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </div>

    <!-- Repeat blog post structure for more posts -->
  </div>
</section>
<!-- End blog section -->

</body>
</html>
