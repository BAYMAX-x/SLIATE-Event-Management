<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Concert - SLIATE</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #1e0b33;
            color: white;
        }
        header {
            padding: 15px 20px;
            background-color: #1e0b33;
            border-bottom: 1px solid #3a1e63;
            text-align: center;
        }
        .event-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        .event-header {
            text-align: left;
            margin-bottom: 30px;
        }
        .event-header h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .event-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .event-details {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            gap: 30px;
        }
        .event-detail {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .event-detail-icon {
            color: #ff7b00;
        }
        .event-description {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .event-description p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }
        .primary-btn {
            background-color: #ff7b00;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .secondary-btn {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
        }
        .tabs {
            display: flex;
            border-bottom: 2px solid #3a1e63;
            margin-bottom: 25px;
        }
        .tab {
            padding: 12px 20px;
            cursor: pointer;
            position: relative;
        }
        .tab.active {
            color: #ff7b00;
        }
        .tab.active::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ff7b00;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
        .location-map {
            width: 100%;
            height: 400px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .location-info {
            margin-bottom: 30px;
        }
        .location-info h3 {
            margin-bottom: 10px;
        }
        .location-info p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .schedule-item {
            margin-bottom: 15px;
            padding-left: 20px;
        }
        .schedule-time {
            color: #ff7b00;
            font-weight: bold;
            margin-right: 10px;
        }
        .sponsors {
            margin-top: 40px;
        }
        .sponsors h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        .sponsor-logos {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
        }
        .sponsor-logo {
            width: 120px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <script>
        function switchTab(tabId) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Deactivate all tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Activate the selected tab and content
            document.getElementById(tabId).classList.add('active');
            
            // Find the index of the tab and activate it
            const tabs = document.querySelectorAll('.tab');
            if (tabId === 'performances') {
                tabs[0].classList.add('active');
            } else if (tabId === 'gallery') {
                tabs[1].classList.add('active');
            } else if (tabId === 'location') {
                tabs[2].classList.add('active');
            }
        }
    </script>
    <header>
       <div>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div> 
    </header>

    <div class="event-container">
        <div class="event-header">
            <h2>Music Concert</h2><br>
            <img src="images/concert.jpg" alt="Music Concert" class="event-image">
        </div>

        <div class="event-details">
            <div class="event-detail">
                <span class="event-detail-icon">📅</span>
                <span>June 10, 2025</span>
            </div>
            <div class="event-detail">
                <span class="event-detail-icon">🕖</span>
                <span>7:00 PM</span>
            </div>
            <div class="event-detail">
                <span class="event-detail-icon">📍</span>
                <span>Outdoor Amphitheater</span>
            </div>
            <div class="event-detail">
                <span class="event-detail-icon">👥</span>
                <span>Open to all students and faculty</span>
            </div>
        </div>

        <div class="event-description">
            <p>Experience an unforgettable night of music under the stars at SLIATE's annual Music Concert. This event brings together talented musicians and performers from our campus community and beyond for an evening of diverse musical styles.</p>
            <p>This year's concert will feature performances from the Campus Music Ensemble, student bands, solo artists, and special guest performers. The event aims to showcase musical talent, foster creativity, and provide an enjoyable experience for the entire SLIATE community.</p>
            <p>From classical compositions to contemporary hits, traditional Sri Lankan music to global genres, the concert offers something for every musical taste. Come join us for an evening of melodies, rhythms, and musical camaraderie!</p>
        </div>

        <div class="action-buttons">
            <button class="primary-btn">Register Now</button>
            <button class="secondary-btn">Share Event</button>
        </div>

        <div class="tabs">
            <div class="tab active" onclick="switchTab('performances')">Performances</div>
            <div class="tab" onclick="switchTab('gallery')">Gallery</div>
            <div class="tab" onclick="switchTab('location')">Location</div>
        </div>

        <div id="performances" class="tab-content active">
            <h2>Performance Schedule</h2>
            <div class="schedule-item">
                <span class="schedule-time">7:00 - 7:15 PM</span>
                <span>Opening Remarks by Faculty Advisor</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">7:15 - 7:45 PM</span>
                <span>Campus Music Ensemble - Classical Arrangements</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">7:45 - 8:15 PM</span>
                <span>Student Bands Showcase</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">8:15 - 8:30 PM</span>
                <span>Intermission</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">8:30 - 9:00 PM</span>
                <span>Traditional Sri Lankan Music Performance</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">9:00 - 9:30 PM</span>
                <span>Solo Artist Performances</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">9:30 - 10:00 PM</span>
                <span>Special Guest Performance</span>
            </div>
            <div class="schedule-item">
                <span class="schedule-time">10:00 - 10:15 PM</span>
                <span>Closing Ensemble - All Performers</span>
            </div>
        </div>
        
        <div id="gallery" class="tab-content">
            <h2>Event Gallery</h2>
            <p>Photos from previous Music Concert events</p>
            <div class="gallery">
                <img src="/api/placeholder/400/300" alt="Concert Image 1" class="gallery-image">
                <img src="/api/placeholder/400/300" alt="Concert Image 2" class="gallery-image">
                <img src="/api/placeholder/400/300" alt="Concert Image 3" class="gallery-image">
                <img src="/api/placeholder/400/300" alt="Concert Image 4" class="gallery-image">
                <img src="/api/placeholder/400/300" alt="Concert Image 5" class="gallery-image">
                <img src="/api/placeholder/400/300" alt="Concert Image 6" class="gallery-image">
            </div>
        </div>
        
        <div id="location" class="tab-content">
            <h2>Event Location</h2>
            <div class="location-map">
                <!-- Map placeholder -->
            </div>
            <div class="location-info">
                <h3>Outdoor Amphitheater</h3>
                <p>The SLIATE Outdoor Amphitheater is located on the east side of the campus, adjacent to the main academic buildings. This open-air venue offers a beautiful setting for performances with natural acoustics and seating for up to 500 attendees.</p>
                <p><strong>Directions:</strong> Enter through the main campus entrance and follow signs to the Outdoor Amphitheater. Parking is available in Lots C and D, which are a short walk from the venue.</p>
                <p><strong>Facilities:</strong> Restrooms and refreshment stands are available near the amphitheater entrance. The venue is wheelchair accessible with designated seating areas.</p>
            </div>
        </div>

        <div class="sponsors">
            <h2>Event Sponsors</h2>
            <div class="sponsor-logos">
                <div class="sponsor-logo"></div>
                <div class="sponsor-logo"></div>
                <div class="sponsor-logo"></div>
                <div class="sponsor-logo"></div>
            </div>
        </div>
    </div>
</body>
</html>