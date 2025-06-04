<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE - Event Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #1a0933;
            color: white;
        }
        
        header {
            background-color: #1a0933;
            padding: 1rem 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        
        .login-btn {
            background-color: #ff7900;
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            color: #ff7900;
            text-decoration: none;
            margin-bottom: 1.5rem;
        }
        
        .event-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .event-badge {
            background-color: #ff7900;
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 50px;
            margin-left: 1rem;
        }
        
        .event-details-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        .event-image {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }
        
        .event-info {
            padding: 2rem;
        }
        
        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .meta-icon {
            color: #ff7900;
        }
        
        .meta-text {
            color: rgba(255, 255, 255, 0.8);
        }
        
        .event-description {
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .action-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .register-btn {
            background-color: #ff7900;
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .share-btn {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .section-heading {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        .schedule-list {
            list-style: none;
        }
        
        .schedule-item {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
        }
        
        .time-slot {
            color: #ff7900;
            font-weight: bold;
            width: 120px;
        }
        
        .activity-info {
            flex: 1;
        }
        
        .activity-title {
            margin-bottom: 0.5rem;
        }
        
        .activity-speaker {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        .map-container {
            height: 300px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            margin-bottom: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .tab-nav {
            display: flex;
            margin-bottom: 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .tab-btn {
            padding: 1rem 2rem;
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.7);
            font-size: 1rem;
            cursor: pointer;
            position: relative;
        }
        
        .tab-btn.active {
            color: white;
        }
        
        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #ff7900;
        }
        
        .sponsor-section {
            margin-top: 3rem;
        }
        
        .sponsor-logos {
            display: flex;
            gap: 2rem;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .sponsor-logo {
            height: 60px;
            filter: grayscale(1) brightness(2);
            opacity: 0.7;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .event-meta {
                flex-direction: column;
                gap: 1rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }

        /* Additional styling for event-specific content */
        .speaker-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .speaker-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
        }
        
        .speaker-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 1.5rem auto;
            object-fit: cover;
        }
        
        .speaker-info {
            padding: 0 1.5rem 1.5rem;
        }
        
        .speaker-name {
            margin-bottom: 0.3rem;
        }
        
        .speaker-title {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        /* Styles for other event types */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            height: 180px;
        }
        
        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .teams-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        
        .team-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 1.5rem;
        }
        
        .team-name {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        
        .team-icon {
            width: 30px;
            height: 30px;
            background-color: #ff7900;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .team-members {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
         <div class="subtitle">SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div>
    </header>
    
    <div class="container">
        <div class="event-header">
            <h2>Annual Cultural Festival</h2>
        </div>
        
        <div class="event-details-card">
            <img src="images/Cultural.jpg" alt="Cultural Festival" class="event-image" id="event-image">
            
            <div class="event-info">
                <div class="event-meta">
                    <div class="meta-item">
                        <span class="meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </span>
                        <span class="meta-text" id="event-date">May 12, 2025</span>
                    </div>
                    
                    <div class="meta-item">
                        <span class="meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </span>
                        <span class="meta-text" id="event-time">6:00 PM</span>
                    </div>
                    
                    <div class="meta-item">
                        <span class="meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </span>
                        <span class="meta-text" id="event-location">University Auditorium</span>
                    </div>
                    
                    <div class="meta-item">
                        <span class="meta-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </span>
                        <span class="meta-text" id="event-capacity">Open to all students and Departments</span>
                    </div>
                </div>
                
                <div class="highlight-box">
                    <p>Celebrating the rich cultural heritage of Sri Lanka with traditional performances, music, and dance.</p>
                </div>
                
                <div class="event-description" id="event-description">
                    <p>The Annual Cultural Festival is one of the most anticipated events at SLIATE, bringing together students, faculty, and community members to celebrate the rich cultural diversity of Sri Lanka.</p>
                    <p>This year's festival will feature traditional dance performances, music concerts, cultural exhibitions, food stalls offering regional delicacies, and various cultural competitions. The event aims to promote cultural exchange and foster appreciation for Sri Lanka's vibrant heritage.</p>
                </div>
                
                <div class="action-buttons">
                    <button class="register-btn">Register Now</button>
                    <button class="share-btn">Share Event</button>
                </div>
            </div>
        </div>
        
        <div class="tab-nav">
            <button class="tab-btn active" data-tab="performances">Performances</button>
            <button class="tab-btn" data-tab="gallery">Gallery</button>
        </div>
        
        <div id="performances" class="tab-content active">
            <h3 class="section-heading">Performance Schedule</h3>
            
            <ul class="performances-list">
                <li class="performance-item">
                    <div class="time-slot">6:00 - 6:30 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Opening Ceremony & Traditional Lamp Lighting</h4>
                        <p class="performance-group">Chief Guest & Student Representatives</p>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">6:30 - 7:15 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Kandyan Dance Performance</h4>
                        <p class="performance-group">SLIATE Cultural Dance Team</p>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">7:15 - 7:45 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Musical Performance</h4>
                        <p class="performance-group">Campus Music Ensemble</p>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">7:45 - 8:00 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Break & Refreshments</h4>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">8:00 - 8:45 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Traditional Folk Dance Medley</h4>
                        <p class="performance-group">Regional Dance Groups</p>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">8:45 - 9:30 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Cultural Fusion Performance</h4>
                        <p class="performance-group">SLIATE Performing Arts Society</p>
                    </div>
                </li>
                
                <li class="performance-item">
                    <div class="time-slot">9:30 - 10:00 PM</div>
                    <div class="performance-info">
                        <h4 class="performance-title">Grand Finale & Closing Ceremony</h4>
                        <p class="performance-group">All Performers</p>
                    </div>
                </li>
            </ul>
        </div>
        
        <div id="gallery" class="tab-content">
            <h3 class="section-heading">Previous Festival Highlights</h3>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
                <div class="gallery-item">
                    <img src="/api/placeholder/250/180" alt="Festival Photo" class="gallery-image">
                </div>
            </div>
        </div>
        
        
        <div class="sponsor-section">
            <h3 class="section-heading">Event Sponsors</h3>
            
            <div class="sponsor-logos">
                <img src="/api/placeholder/100/60" alt="Sponsor Logo" class="sponsor-logo">
                <img src="/api/placeholder/100/60" alt="Sponsor Logo" class="sponsor-logo">
            </div>
        </div>
    </div>
    
    <script>
        // Tab navigation functionality
        document.querySelectorAll('.tab-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all tabs
                document.querySelectorAll('.tab-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.remove('active');
                });
                
                // Add active class to clicked tab and corresponding content
                button.classList.add('active');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });
        
        // Function to update event details based on event data
        function updateEventDetails(eventData) {
            document.getElementById('event-title').textContent = eventData.title;
            document.getElementById('event-category').textContent = eventData.category;
            document.getElementById('event-date').textContent = eventData.date;
            document.getElementById('event-time').textContent = eventData.time;
            document.getElementById('event-location').textContent = eventData.location;
            document.getElementById('event-capacity').textContent = 'Capacity: ' + eventData.capacity;
            document.getElementById('event-description').innerHTML = eventData.description;
            // Other updates as needed
        }
        
        // Sample event data - would be fetched from API in a real application
        const eventData = {
            title: "Advanced AI Workshop",
            category: "Tech Talks",
            date: "May 5, 2025",
            time: "2:00 PM",
            location: "Tech Building, Room 365",
            capacity: "40 people",
            description: "<p>Join us for an immersive workshop on the latest advances in Artificial Intelligence. This workshop is designed for students and faculty interested in understanding the practical applications of AI technologies in various industries.</p><p>The workshop will cover fundamental concepts of machine learning, neural networks, and practical implementation of AI solutions. Participants will get hands-on experience with popular AI frameworks and tools.</p>"
        };
        
        // Update event details on page load
        document.addEventListener('DOMContentLoaded', () => {
            updateEventDetails(eventData);
        });
    </script>
</body>
</html>