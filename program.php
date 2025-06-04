<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Hackathon - SLIATE</title>
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
        .challenges {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .challenge-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
        }
        .judges {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .judge-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .judge-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #3a1a5e;
            margin-bottom: 15px;
        }
        .prizes {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .prize-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .prize-icon {
            font-size: 2.5rem;
            margin-bottom: 10px;
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
        .resource-list {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .resource-list ul {
            padding-left: 20px;
        }
        .resource-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div>
    </header>

    <div class="container">
        <div class="event-header">
            <h2>Programming Hackathon</h2><br>
            <img src="images/program.jpg" alt="Programming Hackathon" class="event-image">
            
            <div class="event-info">
                <div class="info-item">
                    <span>📅</span>
                    <span>June 2, 2025</span>
                </div>
                <div class="info-item">
                    <span>⏰</span>
                    <span>9:00 AM</span>
                </div>
                <div class="info-item">
                    <span>📍</span>
                    <span>Computer Science Building, Lab 4</span>
                </div>
                <div class="info-item">
                    <span>👥</span>
                    <span>Open to all SLIATE students</span>
                </div>
            </div>
        </div>

        <div class="event-description">
            <p>Join us for an exciting 12-hour Programming Hackathon where creativity meets technology! This event brings together passionate coders to collaborate, innovate, and develop solutions to real-world problems.</p>
            <p>Participants will form teams of 3-4 members and will have 12 hours to develop a working prototype that addresses one of our challenge categories. Industry professionals will judge the projects based on innovation, technical complexity, user experience, and potential impact.</p>
            <p>Whether you're a coding expert or just starting your programming journey, this hackathon offers a supportive environment to enhance your skills, network with industry professionals, and potentially win exciting prizes.</p>
            <p>All programming languages and technologies are welcome. Food, drinks, and snacks will be provided throughout the event to keep your energy levels high!</p>
        </div>

        <div class="action-buttons">
            <button class="register-btn">Register Now</button>
            <button class="share-btn">Share Event</button>
        </div>

        <div class="tabs">
            <div class="tab active">Schedule</div>
            <div class="tab">Challenges</div>
            <div class="tab">Prizes</div>
            <div class="tab">Judges</div>
            <div class="tab">Resources</div>
        </div>

        <div class="schedule">
            <h2>Event Schedule</h2>
            <div class="schedule-item">
                <span class="time">9:00 AM - 9:30 AM</span>
                <strong>Registration and Team Formation</strong>
                <p>Check-in, collect swag bags, and form teams if you haven't already</p>
            </div>
            <div class="schedule-item">
                <span class="time">9:30 AM - 10:00 AM</span>
                <strong>Opening Ceremony</strong>
                <p>Welcome speech, introduction to challenges, and rules explanation</p>
            </div>
            <div class="schedule-item">
                <span class="time">10:00 AM - 10:30 AM</span>
                <strong>Sponsor Presentations</strong>
                <p>Brief introductions from our industry sponsors and their technologies</p>
            </div>
            <div class="schedule-item">
                <span class="time">10:30 AM - 10:00 PM</span>
                <strong>Coding Time!</strong>
                <p>Teams work on their projects with occasional mini-workshops available</p>
            </div>
            <div class="schedule-item">
                <span class="time">1:00 PM</span>
                <strong>Lunch Break</strong>
                <p>Buffet lunch provided (coding continues)</p>
            </div>
            <div class="schedule-item">
                <span class="time">6:00 PM</span>
                <strong>Dinner Break</strong>
                <p>Dinner provided (coding continues)</p>
            </div>
            <div class="schedule-item">
                <span class="time">9:00 PM</span>
                <strong>Final Hour Announcement</strong>
                <p>One hour left to finalize projects</p>
            </div>
            <div class="schedule-item">
                <span class="time">10:00 PM</span>
                <strong>Coding Ends</strong>
                <p>All teams must submit their projects</p>
            </div>
            <div class="schedule-item">
                <span class="time">10:00 PM - 11:00 PM</span>
                <strong>Project Presentations</strong>
                <p>Each team gets 3 minutes to present their solution</p>
            </div>
            <div class="schedule-item">
                <span class="time">11:00 PM - 11:30 PM</span>
                <strong>Judging and Deliberation</strong>
                <p>Judges evaluate projects while participants network</p>
            </div>
            <div class="schedule-item">
                <span class="time">11:30 PM</span>
                <strong>Awards Ceremony</strong>
                <p>Announcement of winners and prize distribution</p>
            </div>
        </div>

        <div class="challenges" style="display: none;">
            <h2>Hackathon Challenges</h2>
            <p>Teams will choose one of the following challenge categories:</p>
            
            <div class="challenges">
                <div class="challenge-card">
                    <h3>🌱 Sustainability Solutions</h3>
                    <p>Develop an application that addresses environmental challenges or promotes sustainable practices in everyday life.</p>
                    <p><strong>Example ideas:</strong> Carbon footprint trackers, smart recycling assistants, sustainable shopping guides</p>
                </div>
                <div class="challenge-card">
                    <h3>🏥 Healthcare Innovation</h3>
                    <p>Create solutions that improve healthcare delivery, patient management, or wellness monitoring.</p>
                    <p><strong>Example ideas:</strong> Appointment scheduling systems, medication reminders, telehealth platforms</p>
                </div>
                <div class="challenge-card">
                    <h3>🎓 Education Technology</h3>
                    <p>Design applications that enhance learning experiences, improve access to education, or assist with educational management.</p>
                    <p><strong>Example ideas:</strong> Study planners, interactive learning tools, resource sharing platforms</p>
                </div>
                <div class="challenge-card">
                    <h3>🚌 Smart City</h3>
                    <p>Develop solutions for urban challenges related to transportation, public services, or community engagement.</p>
                    <p><strong>Example ideas:</strong> Public transport trackers, community service finders, smart parking solutions</p>
                </div>
                <div class="challenge-card">
                    <h3>🔒 Cybersecurity</h3>
                    <p>Create tools or applications that address digital security challenges or promote better security practices.</p>
                    <p><strong>Example ideas:</strong> Password managers, security education tools, secure communication platforms</p>
                </div>
                <div class="challenge-card">
                    <h3>🌐 Open Innovation</h3>
                    <p>Have your own idea? Choose this category to work on any problem that you're passionate about solving!</p>
                </div>
            </div>
        </div>

        <div class="prizes" style="display: none;">
            <h2>Prizes and Awards</h2>
            <p>The hackathon features exciting prizes for the top-performing teams:</p>
            
            <div class="prizes">
                <div class="prize-card">
                    <div class="prize-icon">🏆</div>
                    <h3>Grand Prize</h3>
                    <p>LKR 100,000 cash prize</p>
                    <p>Internship opportunities with sponsor companies</p>
                    <p>Latest MacBook Pro for each team member</p>
                </div>
                <div class="prize-card">
                    <div class="prize-icon">🥈</div>
                    <h3>Second Place</h3>
                    <p>LKR 50,000 cash prize</p>
                    <p>Latest iPad Pro for each team member</p>
                </div>
                <div class="prize-card">
                    <div class="prize-icon">🥉</div>
                    <h3>Third Place</h3>
                    <p>LKR 25,000 cash prize</p>
                    <p>Wireless headphones for each team member</p>
                </div>
                <div class="prize-card">
                    <div class="prize-icon">💡</div>
                    <h3>Most Innovative Solution</h3>
                    <p>LKR 15,000 cash prize</p>
                    <p>Innovation workshop access</p>
                </div>
                <div class="prize-card">
                    <div class="prize-icon">🎨</div>
                    <h3>Best UI/UX Design</h3>
                    <p>LKR 15,000 cash prize</p>
                    <p>Design software subscriptions</p>
                </div>
                <div class="prize-card">
                    <div class="prize-icon">🚀</div>
                    <h3>Best Technical Implementation</h3>
                    <p>LKR 15,000 cash prize</p>
                    <p>Cloud service credits</p>
                </div>
            </div>
            
            <p style="margin-top: 20px; text-align: center;">Additionally, all participants will receive certificates, t-shirts, and swag bags from our sponsors!</p>
        </div>

        <div class="judges" style="display: none;">
            <h2>Our Judges</h2>
            <p>Projects will be evaluated by a panel of industry experts and technology leaders:</p>
            
            <div class="judges">
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Dr. Pradeep Kumar</h3>
                    <p>CTO, Dialog Axiata</p>
                    <p>Expert in telecommunications and mobile solutions</p>
                </div>
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Sarah Perera</h3>
                    <p>Senior Software Engineer, Google</p>
                    <p>Specialist in machine learning and AI applications</p>
                </div>
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Michael Fernando</h3>
                    <p>Founder, TechLanka Innovations</p>
                    <p>Serial entrepreneur and startup advisor</p>
                </div>
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Dr. Amal Jayasuriya</h3>
                    <p>Professor of Computer Science, University of Colombo</p>
                    <p>Researcher in cybersecurity and data science</p>
                </div>
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Lakshmi Rajaratnam</h3>
                    <p>Product Manager, Microsoft</p>
                    <p>Expert in product development and UX design</p>
                </div>
                <div class="judge-card">
                    <div class="judge-img"></div>
                    <h3>Tharaka Wijethilake</h3>
                    <p>Lead Developer, hSenid Mobile</p>
                    <p>Specialist in mobile application development</p>
                </div>
            </div>
        </div>

        <div class="resources" style="display: none;">
            <h2>Resources and Support</h2>
            <p>To help you succeed during the hackathon, we've arranged the following resources:</p>
            
            <div class="resource-list">
                <h3>Technical Resources</h3>
                <ul>
                    <li><strong>High-speed internet</strong> - Dedicated connection for participants</li>
                    <li><strong>Cloud services credits</strong> - AWS, Azure, and Google Cloud credits available</li>
                    <li><strong>Technical mentors</strong> - Industry professionals will be available throughout the event</li>
                    <li><strong>APIs and SDKs</strong> - Access to premium APIs from our sponsors</li>
                </ul>
            </div>
            
            <div class="resource-list">
                <h3>Physical Setup</h3>
                <ul>
                    <li><strong>Workstations</strong> - Each team will have a dedicated workspace</li>
                    <li><strong>Power supply</strong> - Ample power strips and charging stations</li>
                    <li><strong>Whiteboards</strong> - For brainstorming and planning</li>
                    <li><strong>Printing facilities</strong> - For any documentation needs</li>
                </ul>
            </div>
            
            <div class="resource-list">
                <h3>Refreshments</h3>
                <ul>
                    <li><strong>Meals</strong> - Breakfast, lunch, dinner, and midnight snacks</li>
                    <li><strong>Beverages</strong> - Coffee, tea, water, and energy drinks available 24/7</li>
                    <li><strong>Snacks</strong> - Continuous supply of brain food</li>
                </ul>
            </div>
            
            <div class="resource-list">
                <h3>Team Support</h3>
                <ul>
                    <li><strong>Team formation assistance</strong> - Help finding team members if you're participating solo</li>
                    <li><strong>Skill matching</strong> - Support in finding teammates with complementary skills</li>
                    <li><strong>Mini-workshops</strong> - Optional sessions on specific technologies during the hackathon</li>
                </ul>
            </div>
        </div>

        <h2>Event Sponsors</h2>
        <div class="sponsors">
            <img src="/api/placeholder/120/60" alt="Sponsor 1" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 2" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 3" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 4" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 5" class="sponsor-img">
        </div>
    </div>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.schedule, .challenges, .prizes, .judges, .resources');
        
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