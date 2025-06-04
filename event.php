<html>
    <body>
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
          
          .login-btn {
            position: absolute;
            right: 30px;
            background: linear-gradient(90deg, #ff9900, #ff5500);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
          }
          
          .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 153, 0, 0.4);
          }
          
          .main-content {
            max-width: 1200px;
            margin: 40px auto;
            text-align: center;
            padding: 0 20px;
          }
          
          h1 {
            font-size: 2rem;
            margin: 30px 0;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
          }
          
          .subtitle-text {
            font-size: 1.8rem;
            margin-bottom: 50px;
            color: #f5f5f5;
            font-weight: bold;
          }
          
          .search-filter-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 40px;
            align-items: center;
          }
          
          .search-box {
            flex: 1;
            max-width: 500px;
            position: relative;
          }
          
          .search-box input {
            width: 100%;
            padding: 15px 20px;
            padding-left: 50px;
            border-radius: 50px;
            border: none;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
          }
          
          .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.5);
          }
          
          .search-box svg {
            position: absolute;
            left: 20px;
            top: 15px;
            color: rgba(255, 255, 255, 0.5);
          }
          
          .category-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
          }
          
          .filter-btn {
            padding: 10px 20px;
            border-radius: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
          }
          
          .filter-btn:hover, .filter-btn.active {
            background: linear-gradient(90deg, #ff9900, #ff5500);
          }
          
          .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 30px;
          }
          
          .event-card {
            background: linear-gradient(145deg, #2a0f4c 0%, #3d1a69 100%);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
          }
          
          .event-card:hover {
            transform: translateY(-10px);
          }
          
          .event-img {
            height: 200px;
            width: 100%;
            background-color: #2a0f4c;
            position: relative;
            overflow: hidden;
          }
          
          .event-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
          
          .event-category {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 15px;
            border-radius: 50px;
            background: linear-gradient(90deg, #ff9900, #ff5500);
            color: white;
            font-size: 0.8rem;
            font-weight: bold;
          }
          
          .event-details {
            padding: 20px;
          }
          
          .event-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: white;
          }
          
          .event-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
          }
          
          .event-info div {
            display: flex;
            align-items: center;
            color: #a78bda;
            font-size: 0.9rem;
          }
          
          .event-info svg {
            margin-right: 5px;
          }
          
          .event-location {
            color: #a78bda;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
          }
          
          .event-location svg {
            margin-right: 5px;
          }
          
          .event-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
          }
          
          .view-btn, .register-btn {
            padding: 10px 0;
            border-radius: 5px;
            flex: 1;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
          }
          
          .view-btn {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
          }
          
          .view-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
          }
          
          .register-btn {
            background: linear-gradient(90deg, #ff9900, #ff5500);
            color: white;
          }
          
          .register-btn:hover {
            box-shadow: 0 5px 15px rgba(255, 153, 0, 0.4);
          }
          
          footer {
            background-color: #1a072e;
            padding: 40px 20px;
            text-align: center;
          }
          
          .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
          }
          
          .footer-section {
            flex: 1;
            min-width: 300px;
            margin-bottom: 30px;
          }
          
          .footer-heading {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #ff9900;
          }
          
          .footer-contact p {
            margin-bottom: 10px;
            color: #a78bda;
          }
          
          .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
          }
          
          .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s;
          }
          
          .social-icons a:hover {
            background: linear-gradient(90deg, #ff9900, #ff5500);
            transform: translateY(-3px);
          }
          
          .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #a78bda;
            font-size: 0.9rem;
            text-align: center;
            width: 100%;
          }
          
          @media (max-width: 768px) {
            .search-filter-container {
              flex-direction: column;
              align-items: flex-start;
            }
            
            .search-box {
              width: 100%;
              max-width: 100%;
              margin-bottom: 20px;
            }
            
            .category-filters {
              width: 100%;
              justify-content: flex-start;
            }
            
            .events-grid {
              grid-template-columns: 1fr;
            }
            
            nav {
              flex-wrap: wrap;
              justify-content: center;
              padding-bottom: 60px;
            }
            
            .login-btn {
              position: absolute;
              bottom: 15px;
              right: 50%;
              transform: translateX(50%);
              
            }
          }
        </style>
        <header>
            <div style="display: flex; align-items: center; justify-content: space-between; padding: 0 20px;">
              <img src="images/sliate.jpg" alt="SLIATE Logo" style="height: 50px; position: absolute; top: 10px; left: 10px;">
              <div style="flex: 1; text-align: center;">
                <div class="subtitle">SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div>
              </div>
            </div>
          </header>

        <nav>
            <a href="login.php">
                <button class="login-btn">LOGIN</button>
              </a>
        </nav>
    
        <div class="main-content">
        <div class="subtitle-text">CHECK OUT THE</div>
         <h1>EVENTS</h1>
      
        <div class="search-filter-container">
        <div class="search-box">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" placeholder="Search for events...">
         </div>
        
        <div class="category-filters">
          <button class="filter-btn active">All</button>
          <button class="filter-btn">Workshops</button>
          <button class="filter-btn">Cultural</button>
          <button class="filter-btn">Sports</button>
          <button class="filter-btn">Tech Talks</button>
        </div>
      </div>
      
      <div class="events-grid">
        <!-- Event 1 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/AI-workshop.jpg" alt="AI Workshop">
            <div class="event-category">Tech Talks</div>
          </div>
          <div class="event-details">
            <h3 class="event-title">Advanced AI Workshop</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                May 5, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                2:00 PM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              Tech Building, Room 305
            </div>
            <div class="event-buttons">
              <a href="AI.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a>          
              <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
            </div>
          </div>
        </div>
        
        <!-- Event 2 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/cultural.jpg" alt="Cultural Dance">
            <div class="event-category">Cultural</div>
          </div>
          <div class="event-details">
            <h3 class="event-title">Annual Cultural Festival</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                May 12, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                6:00 PM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              University Auditorium
            </div>
            <div class="event-buttons">
              <a href="Cultural.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a> 
                <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
            </div>
          </div>
        </div>
        
        <!-- Event 3 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/volleyball.jpg" alt="Basketball Tournament">
            <div class="event-category">Sports</div>
          </div>
          <div class="event-details">
            <h3 class="event-title">Inter-College Volleyball</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                May 20, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                10:00 AM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              University Sports Complex
            </div>
            <div class="event-buttons">
              <a href="volley.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a> 
              <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
            </div>
          </div>
        </div>
        
        <!-- Event 4 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/resume.jpg" alt="Resume Workshop">
            <div class="event-category">Workshops</div>
          </div>
          <div class="event-details">
            <h3 class="event-title">Resume Building Workshop</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                May 25, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                1:00 PM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              Career Center, Room 102
            </div>
            <div class="event-buttons">
              <a href="resume.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a> 
              <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
            </div>
          </div>
        </div>
        
        <!-- Event 5 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/program.jpg" alt="Programming Contest">
            <div class="event-category">Tech Talks</div>
          </div>
          <div class="event-details">
            <h3 class="event-title">Programming Hackathon</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                June 2, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                9:00 AM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              Computer Science Building, Lab 4
            </div>
            <div class="event-buttons">
              <a href="program.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a> 
              <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
            </div>
          </div>
        </div>
        
        <!-- Event 6 -->
        <div class="event-card">
          <div class="event-img">
            <img src="images/concert.jpg" alt="Music Concert">
            <div class="event-category">Cultural</div>
          </div>
          <div class="event-details">
            <h3 class="event-title"> Music Concert</h3>
            <div class="event-info">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                  <line x1="16" y1="2" x2="16" y2="6"></line>
                  <line x1="8" y1="2" x2="8" y2="6"></line>
                  <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                June 10, 2025
              </div>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                7:00 PM
              </div>
            </div>
            <div class="event-location">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg>
              Outdoor Amphitheater
            </div>
            <div class="event-buttons">
              <a href="music.php" class="view-btn" style="text-align:center; display:inline-block; text-decoration:none;">View Details</a> 
               <a href="register.php" class="register-btn" style="text-align:center; display:inline-block; text-decoration:none;">Register</a>
  </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const searchInput = document.querySelector(".search-box input");
        const eventCards = document.querySelectorAll(".event-card");
    
        searchInput.addEventListener("input", () => {
          const searchText = searchInput.value.toLowerCase();
    
          eventCards.forEach((card) => {
            const title = card.querySelector(".event-title").textContent.toLowerCase();
            const category = card.querySelector(".event-category").textContent.toLowerCase();
    
            if (title.includes(searchText) || category.includes(searchText)) {
              card.style.display = "block";
            } else {
              card.style.display = "none";
            }
          });
        });
      });
    </script>
  </body>
  </html>