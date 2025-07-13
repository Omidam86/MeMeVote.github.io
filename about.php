<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./parts/heads.php');?>
    <title>MeMeVote - About Us & Rules</title>
    <link rel="stylesheet" href="styles/about.css">
</head>
<body>
    <header class="header">
        <div class="site-name">
            <h1>MeMeVote</h1>
        </div>
    </header>

    <main class="main-content">
        <section class="tab-section">
            <div class="tab-buttons">
                <button class="tab-button active" data-tab="about">About Us</button>
                <button class="tab-button" data-tab="rules">Rules</button>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane active" id="about-content">
                    <h2 class="section-title">About MeMeVote</h2>
                    <div class="content-container">
                        <div class="about-image-container">
                            <img src="./assets/images/icons/about.svg" alt="About MeMeVote" class="about-image">
                        </div>
                        <div class="about-text">
                            <p>MeMeVote is a fun and engaging platform for meme enthusiasts to showcase their creativity and humor.</p>
                            <p>Our mission is to bring together a community of meme creators and fans to share laughter and creativity through weekly challenges.</p>
                            <p>Founded in 2023, MeMeVote has quickly grown into a vibrant community where users can participate in meme challenges, vote for their favorites, and win exciting prizes.</p>
                            <h3>How It Works</h3>
                            <p>Each week, we post a new challenge image. Users can download this image, create their funniest meme, and upload it to participate in the challenge.</p>
                            <p>The community votes for their favorite memes, and the winners receive rewards and recognition for their creativity.</p>
                            <h3>Join Our Community</h3>
                            <p>Whether you're a meme creator or just enjoy good humor, MeMeVote offers a fun and interactive experience for everyone.</p>
                            <p>Sign up today to start participating in challenges, voting for your favorite memes, and becoming part of our growing community!</p>
                        </div>
                        
                        <div class="feedback-section">
                            <h3 class="feedback-title">Rate Our Website</h3>
                            <p class="feedback-description">We value your feedback! Please rate our website and share your thoughts with us.</p>
                            
                            <form id="feedbackForm" class="feedback-form">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Your username" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Rating</label>
                                    <div class="star-rating">
                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label for="star5" title="5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label for="star4" title="4 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label for="star3" title="3 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label for="star2" title="2 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label for="star1" title="1 star"></label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="message" placeholder="Your feedback" rows="4" required></textarea>
                                </div>
                                
                                <button type="submit" class="submit-button">Submit Feedback</button>
                            </form>
                            
                            <div id="feedbackSuccess" class="feedback-success">
                                <p>Thank you for your feedback! We appreciate your input.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane" id="rules-content">
                    <h2 class="section-title">MeMeVote Rules</h2>
                    <div class="content-container">
                        <div class="rules-list">
                            <div class="rule-item">
                                <h3>1. Participation Guidelines</h3>
                                <p>- All participants must register an account to submit memes.</p>
                                <p>- Each user may submit up to 3 memes per challenge.</p>
                                <p>- Submissions must use the provided challenge image.</p>
                                <p>- Submissions must be made before the challenge deadline.</p>
                            </div>
                            
                            <div class="rule-item">
                                <h3>2. Content Rules</h3>
                                <p>- No offensive, discriminatory, or hateful content.</p>
                                <p>- No explicit or adult content.</p>
                                <p>- No copyright infringement.</p>
                                <p>- No personal attacks or bullying.</p>
                                <p>- MeMeVote reserves the right to remove any content that violates these rules.</p>
                            </div>
                            
                            <div class="rule-item">
                                <h3>3. Voting Process</h3>
                                <p>- All registered users can vote for their favorite memes.</p>
                                <p>- Users cannot vote for their own submissions.</p>
                                <p>- Voting is open for the duration specified in each challenge.</p>
                                <p>- Vote manipulation is strictly prohibited and may result in disqualification.</p>
                            </div>
                            
                            <div class="rule-item">
                                <h3>4. Prizes and Winners</h3>
                                <p>- Winners are determined based on the number of votes received.</p>
                                <p>- Prize details will be specified for each challenge.</p>
                                <p>- Winners will be notified via email and announced on the platform.</p>
                                <p>- MeMeVote reserves the right to verify the eligibility of winners.</p>
                            </div>
                            
                            <div class="rule-item">
                                <h3>5. User Conduct</h3>
                                <p>- Be respectful to other community members.</p>
                                <p>- Do not engage in spamming or disruptive behavior.</p>
                                <p>- Report any violations or concerns to the MeMeVote team.</p>
                                <p>- Repeated violations may result in account suspension or termination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <?php include('./parts/menu-items.php');?>
    </footer>
    <script src="Template/Js/template.js"></script>
    <script src="Js/about.js"></script>
</body>
</html>
