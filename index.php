<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Event Management System - Upcoming Events</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }
    
    body {
      background-color: #1e0836;
      color: white;
    }
    
    header {
      background-color: #1e0836;
      padding: 20px 0;
      text-align: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .logo {
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      letter-spacing: 1px;
    }
    
    .subtitle {
      font-size: 1rem;
      letter-spacing: 5px;
      margin-top: 5px;
    }
    
    nav {
      display: flex;
      justify-content: center;
      background-color: #1e0836;
      padding: 15px 0;
      position: relative;
    }
    
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
      font-size: 1rem;
      transition: color 0.3s;
    }
    
    nav a:hover {
      color: #ff9900;
    }
    
    nav a.active {
      color: #ff9900;
    }
    
    .hero {
            height: 500px;
            background-image: url('https://placekitten.com/1200/500'); /* Placeholder image */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(26, 6, 51, 0.7);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 2rem;
        }

        .hero h2 {
            font-size: 5rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #ff8c00;
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #e67e00;
            transform: translateY(-3px);
        }

        .section-title {
            text-align: center;
            padding: 2rem 0;
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #ff8c00;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .about {
            padding: 3rem 10%;
            background-color: #2d0a4e;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #ff8c00;
        }

        .about-text p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .programs {
            padding: 3rem 10%;
        }

        .program-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .program-card {
            background-color: #2d0a4e;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: all 0.3s;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .program-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .program-details {
            padding: 1.5rem;
        }

        .program-details h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #ff8c00;
        }

        .program-details p {
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        .events {
            padding: 3rem 10%;
            background-color: #2d0a4e;
        }

        .event-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .event-item {
            background-color: #380d5e;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .event-date {
            background-color: #ff8c00;
            min-width: 100px;
            height: 100px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .event-date .day {
            font-size: 2rem;
        }

        .event-date .month {
            font-size: 1.2rem;
        }

        .event-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #ff8c00;
        }

        .event-info p {
            line-height: 1.5;
        }

        .contact {
            padding: 3rem 10%;
        }

        .contact-container {
            display: flex;
            gap: 3rem;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #ff8c00;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .contact-form {
            flex: 1;
            background-color: #2d0a4e;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-form h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #ff8c00;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input, 
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border-radius: 5px;
            border: none;
            background-color: #380d5e;
            color: white;
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .footer {
            background-color: #220838;
            padding: 2rem 0;
            text-align: center;
        }

        .footer p {
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: white;
            background-color: #380d5e;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: #ff8c00;
            transform: translateY(-3px);
        }

        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .contact-container {
                flex-direction: column;
            }
            
            .hero h2 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .hero h2 {
                font-size: 2.5rem;
            }
            
            .event-item {
                flex-direction: column;
                text-align: center;
            }
        }
  </style>
</head>
<body>
  <header>
    <div style="display: flex; align-items: center; justify-content: space-between; padding: 0 20px;">
      <img src="images/sliate.jpg" alt="SLIATE Logo" style="height: 50px; position: absolute; top: 10px; left: 10px;">
      <div style="flex: 1; text-align: center;">
        <div class="logo">UNIVERSITY EVENT MANAGEMENT</div>
        <div class="subtitle">SLIATE</div>
      </div>
    </div>
  </header>
  
  <nav>
  <a href="event.php">EVENTS</a>
  <a href="#" class="active">HOME</a>
  <a href="#">GALLERY</a>
  <a href="#">CONTACT</a>
</nav>
  
  


<section id="home" class="hero">
  <div class="hero-content">
      <h2>PROGRAM</h2>
      <p>Discover our innovative academic programs designed to prepare you for success in the rapidly evolving technological landscape of the 21st century.</p>
  </div>
    
</section>

<section id="about" class="about">
  <h2 class="section-title">ABOUT US</h2>
  <div class="about-content">
      <div class="about-text">
          <h3>Excellence in Technological Education</h3>
          <p>The Sri Lanka Institute of Advanced Technological Education (SLIATE) is a premier institution dedicated to providing advanced technological education to meet the growing demands of the industry and business sectors.</p>
          <p>Established under the Sri Lanka Institute of Advanced Technological Education Act No. 29 of 1995, we have been at the forefront of technological education in Sri Lanka for over two decades, offering Higher National Diplomas and other advanced technological courses.</p>
          <p>Our mission is to produce globally competitive, technically proficient professionals equipped with both theoretical knowledge and practical skills necessary to excel in their chosen fields.</p>
          
      </div>
      <div class="about-image">
          <img src="images/atipic.jpg" alt="University Campus">
      </div>
  </div>
</section>

<section id="programs" class="programs">
  <h2 class="section-title">OUR COURSES</h2>
  <div class="program-cards">
      <div class="program-card">
          <img src="images/Eng.jpg" alt="English">
          <div class="program-details">
              <h3>Higher National Diploma in English</h3>
              <p>A comprehensive program designed to enhance proficiency in English language and literature, focusing on communication skills, linguistics, and critical analysis. This program prepares students for careers in teaching, media, and other professional fields requiring advanced English skills.</p>
          </div>
      </div>
      <div class="program-card">
          <img src="images/It.jpg" alt="Information Technology">
          <div class="program-details">
              <h3>Higher National Diploma in IT</h3>
              <p>This program equips students with advanced knowledge in software development, networking, database management, and cybersecurity. It focuses on practical skills and theoretical foundations to prepare students for careers in IT-related fields such as software engineering, system administration, and IT consultancy.</p>
          </div>
      </div>
      <div class="program-card">
          <img src="images/Acc.jpg" alt="Accountancy">
          <div class="program-details">
              <h3>Higher National Diploma in Accountancy</h3>
              <p>This program provides a strong foundation in financial accounting, management accounting, taxation, and auditing. It prepares students for careers in accounting, finance, and business management, with a focus on analytical and problem-solving skills essential for the corporate world.</p>
          </div>
      </div>
  </div>
</section>



<section id="students" class="programs">
  <h2 class="section-title">STUDENT LIFE</h2>
  <div class="program-cards">
      <div class="program-card">
          <div class="program-details">
              <h3>Student Clubs & Societies</h3>
              <p>Explore our diverse range of student clubs focused on technology, culture, sports, and community service.</p>
          </div>
      </div>
      <div class="program-card">
          <div class="program-details">
              <h3>Campus Facilities</h3>
              <p>State-of-the-art laboratories, library resources, sports facilities, and recreational areas.</p>
          </div>
      </div>
      <div class="program-card">
          <div class="program-details">
              <h3>Career Development</h3>
              <p>Career guidance, internship opportunities, job placement assistance, and industry connections.</p>
          </div>
      </div>
  </div>
</section>

<section id="contact" class="contact">
  <h2 class="section-title">CONTACT US</h2>
  <div class="contact-container">
      <div class="contact-info">
          <h3>Get in Touch</h3>
          <div class="contact-item">
              <strong>Address:</strong>&nbsp;
              <div>Akkara 111,Anula MW,Pandulagama,Anuradhapura, Sri Lanka</div>
          </div>
          <div class="contact-item">
              <strong>Phone:</strong>&nbsp;
              <div>025-2234417</div>
          </div>
          
          <div class="contact-item">
              <strong>Office Hours:</strong>&nbsp;
              <div>Monday - Friday: 8:30 AM - 4:30 PM</div>
          </div>
         <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.257692477762!2d80.3652263!3d8.3253079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf5d50f19537d%3A0x3d135827470d27bc!2sATI%20Anuradhapura!5e0!3m2!1sen!2slk!4v1680000000000!5m2!1sen!2slk" 
            width="100%" 
            height="300" 
            style="border:0; border-radius: 10px; margin-top: 20px;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
      </div>
      <div class="contact-form">
          <h3>Send us a Message</h3>
          <form>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" id="subject" name="subject" required>
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" required></textarea>
              </div>
              <button type="submit" class="btn">Send Message</button>
          </form>
      </div>
  </div>
</section>

<footer class="footer">
  <p>&copy; 2025 Sri Lanka Institute of Advanced Technological Education. All Rights Reserved.</p>
  <p>Akkara 111,Anula MW,Pandulagama,Anuradhapura, Sri Lanka</p>
  <div class="social-links">
      <a href="https://www.facebook.com/share/1BfCjEYSdK/" target="_blank" aria-label="Facebook">
          <img src="images/fb.jpg" alt="Facebook" style="width: 24px; height: 24px;">
      </a>
      <a href="https://youtube.com/@atianuradhapura?si=FaXm5PbIKHmXVxMr" target="_blank" aria-label="YouTube">
          <img src="images/yt.jpg" alt="YouTube" style="width: 24px; height: 24px;">
      </a>
  </div>
</footer>

<script>
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
          e.preventDefault();
          
          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
          });
          
          // Update active nav link
          document.querySelectorAll('.nav a').forEach(link => {
              link.classList.remove('active');
          });
          this.classList.add('active');
      });
  });

  // Update active nav link on scroll
  window.addEventListener('scroll', function() {
      let scrollPosition = window.scrollY;
      
      document.querySelectorAll('section').forEach(section => {
          const sectionTop = section.offsetTop - 100;
          const sectionBottom = sectionTop + section.offsetHeight;
          
          if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
              document.querySelectorAll('.nav a').forEach(link => {
                  link.classList.remove('active');
                  if (link.getAttribute('href') === '#' + section.getAttribute('id')) {
                      link.classList.add('active');
                  }
              });
          }
      });
  });
</script>
</body>
</html>