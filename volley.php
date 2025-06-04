<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter-College Volleyball - SLIATE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1e0836;
            color: white;
        }
        header {
            background-color: #1e0836;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-bottom: 1px solid #3a1a5e;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .event-header {
            text-align: left;
            margin-bottom: 30px;
        }
        .event-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .event-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .event-description {
            background-color: #2a1045;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-bottom: 30px;
        }
        .register-btn {
            background-color: #ff6b00;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
        }
        .share-btn {
            background-color: #3a1a5e;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
        }
        .tabs {
            display: flex;
            border-bottom: 2px solid #3a1a5e;
            margin-bottom: 30px;
        }
        .tab {
            padding: 10px 20px;
            cursor: pointer;
            position: relative;
        }
        .tab.active {
            color: #ff6b00;
        }
        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ff6b00;
        }
        .schedule-item {
            margin-bottom: 20px;
        }
        .time {
            color: #ff6b00;
            font-weight: bold;
            margin-right: 10px;
        }
        .sponsors {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        .sponsor-img {
            height: 60px;
            background-color: #2a1045;
            border-radius: 8px;
            padding: 10px;
        }
        .team-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .team-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
        }
        .location-map {
            width: 100%;
            height: 300px;
            background-color: #2a1045;
            border-radius: 8px;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
       <div class="subtitle">SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div>
    </header>

    <div class="container">
        <div class="event-header">
            <h2>Inter-College Volleyball</h2>
            <img src="images/volleyball.jpg" alt="Inter-College Volleyball Tournament" class="event-image">
            
            <div class="event-info">
                <div class="info-item">
                    <span>📅</span>
                    <span>May 20, 2025</span>
                </div>
                <div class="info-item">
                    <span>⏰</span>
                    <span>10:00 AM</span>
                </div>
                <div class="info-item">
                    <span>📍</span>
                    <span>University Sports Complex</span>
                </div>
                <div class="info-item">
                    <span>👥</span>
                    <span>Open to all students and faculty</span>
                </div>
            </div>
        </div>

        <div class="event-description">
            <p>The annual Inter-College Volleyball Tournament brings together teams from colleges across Sri Lanka to compete in this exciting sporting event. This tournament is one of the most anticipated events at SLIATE, showcasing athletic excellence and promoting sportsmanship among students.</p>
            <p>This year's tournament will feature men's and women's divisions with teams representing various colleges competing for the championship title. The event aims to foster healthy competition and build relationships between educational institutions across the country.</p>
            <p>Spectators are welcome to attend and cheer for their favorite teams. Refreshments will be available throughout the day.</p>
        </div>

        <div class="action-buttons">
            <button class="register-btn">Register Now</button>
            <button class="share-btn">Share Event</button>
        </div>

        <div class="tabs">
            <div class="tab active">Schedule</div>
            <div class="tab">Teams</div>
            <div class="tab">Location</div>
        </div>

        <div class="schedule">
            <h2>Tournament Schedule</h2>
            <div class="schedule-item">
                <span class="time">10:00 AM - 10:30 AM</span>
                <strong>Opening Ceremony</strong>
                <p>Welcome speech by the Sports Director and introduction of teams</p>
            </div>
            <div class="schedule-item">
                <span class="time">10:30 AM - 12:30 PM</span>
                <strong>Preliminary Rounds - Men's Division</strong>
                <p>Group stage matches between participating colleges</p>
            </div>
            <div class="schedule-item">
                <span class="time">12:30 PM - 1:30 PM</span>
                <strong>Lunch Break</strong>
            </div>
            <div class="schedule-item">
                <span class="time">1:30 PM - 3:30 PM</span>
                <strong>Preliminary Rounds - Women's Division</strong>
                <p>Group stage matches between participating colleges</p>
            </div>
            <div class="schedule-item">
                <span class="time">3:30 PM - 4:00 PM</span>
                <strong>Refreshment Break</strong>
            </div>
            <div class="schedule-item">
                <span class="time">4:00 PM - 5:00 PM</span>
                <strong>Semi-Finals - Both Divisions</strong>
                <p>Top teams from group stages compete for finals spots</p>
            </div>
            <div class="schedule-item">
                <span class="time">5:00 PM - 6:00 PM</span>
                <strong>Finals Matches</strong>
                <p>Championship matches for both men's and women's divisions</p>
            </div>
            <div class="schedule-item">
                <span class="time">6:00 PM - 6:30 PM</span>
                <strong>Award Ceremony</strong>
                <p>Presentation of trophies and individual awards</p>
            </div>
        </div>

        <div class="teams" style="display: none;">
            <h2>Participating Teams</h2>
            <div class="team-info">
                <div class="team-card">
                    <h3>SLIATE Colombo</h3>
                    <p>Previous year's champions (Men's Division)</p>
                    <p>Coach: Ajith Fernando</p>
                </div>
                <div class="team-card">
                    <h3>SLIATE Kandy</h3>
                    <p>Previous year's champions (Women's Division)</p>
                    <p>Coach: Nirmala Perera</p>
                </div>
                <div class="team-card">
                    <h3>SLIATE Galle</h3>
                    <p>Runner-up (Men's Division)</p>
                    <p>Coach: Sampath Jayawardena</p>
                </div>
                <div class="team-card">
                    <h3>SLIATE Jaffna</h3>
                    <p>Runner-up (Women's Division)</p>
                    <p>Coach: Rajini Chandran</p>
                </div>
                <div class="team-card">
                    <h3>SLIATE Batticaloa</h3>
                    <p>Third place (Men's Division)</p>
                    <p>Coach: Mohammed Farook</p>
                </div>
                <div class="team-card">
                    <h3>SLIATE Kurunegala</h3>
                    <p>Third place (Women's Division)</p>
                    <p>Coach: Lalith Dissanayake</p>
                </div>
            </div>
        </div>

        <div class="location" style="display: none;">
            <h2>Event Location</h2>
            <p>The tournament will be held at the University Sports Complex, which features state-of-the-art volleyball courts and spectator seating.</p>
            <p>Address: University Sports Complex, SLIATE Main Campus</p>
            <p>Parking is available on site. Shuttle services will be provided from other SLIATE campuses.</p>
            
            <div class="location-map">
                <p>Map placeholder - University Sports Complex location</p>
            </div>
        </div>

        <h2>Event Sponsors</h2>
        <div class="sponsors">
            <img src="/api/placeholder/120/60" alt="Sponsor 1" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 2" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 3" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 4" class="sponsor-img">
        </div>
    </div>

    <script>
        // Simple tab functionality
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.schedule, .teams, .location');
        
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Hide all tab contents
                tabContents.forEach(content => {
                    content.style.display = 'none';
                });
                
                // Show content related to clicked tab
                tabContents[index].style.display = 'block';
            });
        });
    </script>
</body>
</html>