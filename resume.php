<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Building Workshop - SLIATE</title>
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
        .speakers {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .speaker-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .speaker-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #3a1a5e;
            margin-bottom: 15px;
        }
        .materials {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .material-card {
            background-color: #2a1045;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        .material-icon {
            font-size: 2rem;
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
    </style>
</head>
<body>
    <header>
        <div>SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION</div>
    </header>

    <div class="container">
        <div class="event-header">
            <h2>Resume Building Workshop</h2>
            <img src="images/resume.jpg" alt="Resume Building Workshop" class="event-image">
            
            <div class="event-info">
                <div class="info-item">
                    <span>📅</span>
                    <span>May 25, 2025</span>
                </div>
                <div class="info-item">
                    <span>⏰</span>
                    <span>1:00 PM</span>
                </div>
                <div class="info-item">
                    <span>📍</span>
                    <span>Career Center, Room 102</span>
                </div>
                <div class="info-item">
                    <span>👥</span>
                    <span>Open to all students</span>
                </div>
            </div>
        </div>

        <div class="event-description">
            <p>Join us for a comprehensive Resume Building Workshop designed to help students create professional resumes that stand out to potential employers. This workshop is essential for students preparing to enter the job market or looking for internship opportunities.</p>
            <p>Our career experts will guide you through the process of crafting an effective resume, highlighting your skills and experiences in a way that captures employers' attention. You'll learn about modern resume formats, industry-specific expectations, and how to tailor your resume for different job applications.</p>
            <p>Participants will receive individualized feedback on their current resumes and will have the opportunity to revise and improve them during the workshop. Bring your laptop to work on your resume in real-time!</p>
        </div>

        <div class="action-buttons">
            <button class="register-btn">Register Now</button>
            <button class="share-btn">Share Event</button>
        </div>

        <div class="tabs">
            <div class="tab active">Workshop Schedule</div>
            <div class="tab">Speakers</div>
            <div class="tab">Materials</div>
            <div class="tab">Location</div>
        </div>

        <div class="schedule">
            <h2>Workshop Schedule</h2>
            <div class="schedule-item">
                <span class="time">1:00 PM - 1:15 PM</span>
                <strong>Welcome and Introduction</strong>
                <p>Overview of the workshop objectives and introduction to the career development team</p>
            </div>
            <div class="schedule-item">
                <span class="time">1:15 PM - 1:45 PM</span>
                <strong>Resume Fundamentals</strong>
                <p>Key components of an effective resume and common mistakes to avoid</p>
            </div>
            <div class="schedule-item">
                <span class="time">1:45 PM - 2:15 PM</span>
                <strong>Modern Resume Formats</strong>
                <p>Exploring different resume styles and formats suitable for various industries</p>
            </div>
            <div class="schedule-item">
                <span class="time">2:15 PM - 2:30 PM</span>
                <strong>Break</strong>
            </div>
            <div class="schedule-item">
                <span class="time">2:30 PM - 3:15 PM</span>
                <strong>Hands-on Resume Building</strong>
                <p>Guided session to work on your own resume with expert assistance</p>
            </div>
            <div class="schedule-item">
                <span class="time">3:15 PM - 3:45 PM</span>
                <strong>ATS Optimization</strong>
                <p>Tips for making your resume pass through Applicant Tracking Systems</p>
            </div>
            <div class="schedule-item">
                <span class="time">3:45 PM - 4:30 PM</span>
                <strong>Peer Review and Feedback</strong>
                <p>Exchange resumes with peers and receive feedback from career advisors</p>
            </div>
            <div class="schedule-item">
                <span class="time">4:30 PM - 5:00 PM</span>
                <strong>Q&A and Resources</strong>
                <p>Open session for questions and additional resources for continuous improvement</p>
            </div>
        </div>

        <div class="speakers" style="display: none;">
            <h2>Workshop Presenters</h2>
            <div class="speakers">
                <div class="speaker-card">
                    <div class="speaker-img"></div>
                    <h3>Samantha Perera</h3>
                    <p>Career Development Director</p>
                    <p>15+ years in HR and recruitment for tech companies</p>
                </div>
                <div class="speaker-card">
                    <div class="speaker-img"></div>
                    <h3>Rajiv Kumar</h3>
                    <p>Industry Liaison Officer</p>
                    <p>Former hiring manager at Microsoft with expertise in technical resumes</p>
                </div>
                <div class="speaker-card">
                    <div class="speaker-img"></div>
                    <h3>Aisha Farooq</h3>
                    <p>Alumni Relations Coordinator</p>
                    <p>Specialized in helping fresh graduates transition to employment</p>
                </div>
                <div class="speaker-card">
                    <div class="speaker-img"></div>
                    <h3>David Chen</h3>
                    <p>Guest Speaker - HR Manager</p>
                    <p>Currently working at Dialog Axiata with insight into corporate hiring practices</p>
                </div>
            </div>
        </div>

        <div class="materials" style="display: none;">
            <h2>Workshop Materials</h2>
            <p>The following materials will be provided to all participants. Digital copies will be available for download after registration.</p>
            
            <div class="materials">
                <div class="material-card">
                    <div class="material-icon">📄</div>
                    <h3>Resume Templates</h3>
                    <p>Industry-specific templates in Word and Google Docs formats</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">📝</div>
                    <h3>Action Verbs Guide</h3>
                    <p>Comprehensive list of powerful action verbs for different skill categories</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">📊</div>
                    <h3>Skills Assessment</h3>
                    <p>Self-assessment tool to identify your marketable skills</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">📋</div>
                    <h3>Resume Checklist</h3>
                    <p>Quality control checklist to ensure your resume is complete</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">🔍</div>
                    <h3>ATS Keywords</h3>
                    <p>Guide to industry-specific keywords for ATS optimization</p>
                </div>
                <div class="material-card">
                    <div class="material-icon">📚</div>
                    <h3>Reference Guide</h3>
                    <p>Complete workshop handbook with all presented information</p>
                </div>
            </div>
        </div>

        <div class="location" style="display: none;">
            <h2>Workshop Location</h2>
            <p>The Resume Building Workshop will be held at the Career Center, Room 102, located on the first floor of the Student Services Building.</p>
            <p>The room is equipped with computers and projectors, but participants are encouraged to bring their own laptops for hands-on activities.</p>
            <p>Free Wi-Fi will be available for all participants.</p>
            
            <div class="location-map">
                <p>Map placeholder - Career Center, Room 102 location</p>
            </div>
        </div>

        <h2>Event Sponsors</h2>
        <div class="sponsors">
            <img src="/api/placeholder/120/60" alt="Sponsor 1" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 2" class="sponsor-img">
            <img src="/api/placeholder/120/60" alt="Sponsor 3" class="sponsor-img">
        </div>
    </div>

    <script>
        // Tab functionality
        const tabs = document.querySelectorAll('.tab');
        const tabContents = document.querySelectorAll('.schedule, .speakers, .materials, .location');
        
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