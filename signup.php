<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./parts/heads.php');?>
    <title>MeMeVote - Sign Up</title>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <div class="splash-screen">
        <div class="logo-container">
            <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336 336"><path d="M264.073 219.96c-17.935 31.09-44.447 48.767-79.629 53.503-55.172 7.428-108.332-29.354-117.594-85.96-8.86-54.158 28.02-106.748 82.737-116.665 43.172-7.825 79.801 4.903 106.474 40.133 22.79 30.1 26.394 63.832 12.583 99.16-1.269 3.245-2.917 6.342-4.571 9.83m-72.42 41.087c24.168-5.334 43.294-18.276 57.76-38.264 1.737-2.402 2.855-4.663 1.123-7.732-4.022-7.128-8.202-14.117-13.916-20.053-7.366-7.652-15.967-10.23-26.301-6.797-8.966 2.978-16.845 7.921-24.714 12.917-14.333 9.099-27.726 19.646-42.7 27.755-1.893 1.025-3.904 1.842-5.892 2.678-15.372 6.461-25.05.636-27.442-16.014-1.314-9.148-.563-18.281-.955-27.413-.071-1.65.871-3.662-1.495-5.22-7.859 7.967-14.21 17.08-20.566 26.191-1.08 1.548-.214 2.789.484 4.143 8.743 16.976 21.78 29.776 38.492 38.726 20.57 11.016 42.454 13.836 66.121 9.083m-77.655-145.783c1.534-.646 3.036-1.389 4.609-1.92 9.938-3.357 17.27.013 21.297 9.688 1.805 4.336 2.646 8.909 3.426 13.495 1.586 9.323 2.266 18.803 4.619 27.988 1.443 5.632 2.891 6.043 7.428 2.628 6.561-4.937 11.97-11.084 17.693-16.9 9.578-9.732 18.682-19.993 30.01-27.816 15.68-10.829 27.942-10.407 42.88 1.229 3.753 2.923 6.958 6.41 10.618 10.5-11.702-30.008-49.723-59.249-97.034-53.877-36.263 4.117-67.493 30.997-75.874 58.416 10.02-8.568 18.686-17.357 30.328-23.431z"/><path d="M203.644 231.65c2.865-3.057 5.252-6.03 7.311-9.284.877-1.385 2.016-2.651 3.223-3.77 2.133-1.974 4.686-2.863 7.229-.974 2.77 2.057 2.558 5.061 1.047 7.64-9.021 15.391-21.107 26.525-39.924 28.02-2.652.21-5.304.778-7.942.698-3.087-.093-6.127-.93-6.768-4.634-.665-3.847 1.84-5.506 5.073-6.094 4.07-.741 8.222-1.033 12.3-1.742 7.081-1.23 13.29-4.228 18.45-9.86z"/></svg>
        </div>
    </div>

    <header class="header">
        <div class="site-name">
            <h1>MeMeVote</h1>
        </div>
    </header>

    <main class="main-content">
        <section class="signup-container">
            <div class="form-logo-container">
                <svg class="form-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 336 336"><path d="M264.073 219.96c-17.935 31.09-44.447 48.767-79.629 53.503-55.172 7.428-108.332-29.354-117.594-85.96-8.86-54.158 28.02-106.748 82.737-116.665 43.172-7.825 79.801 4.903 106.474 40.133 22.79 30.1 26.394 63.832 12.583 99.16-1.269 3.245-2.917 6.342-4.571 9.83m-72.42 41.087c24.168-5.334 43.294-18.276 57.76-38.264 1.737-2.402 2.855-4.663 1.123-7.732-4.022-7.128-8.202-14.117-13.916-20.053-7.366-7.652-15.967-10.23-26.301-6.797-8.966 2.978-16.845 7.921-24.714 12.917-14.333 9.099-27.726 19.646-42.7 27.755-1.893 1.025-3.904 1.842-5.892 2.678-15.372 6.461-25.05.636-27.442-16.014-1.314-9.148-.563-18.281-.955-27.413-.071-1.65.871-3.662-1.495-5.22-7.859 7.967-14.21 17.08-20.566 26.191-1.08 1.548-.214 2.789.484 4.143 8.743 16.976 21.78 29.776 38.492 38.726 20.57 11.016 42.454 13.836 66.121 9.083m-77.655-145.783c1.534-.646 3.036-1.389 4.609-1.92 9.938-3.357 17.27.013 21.297 9.688 1.805 4.336 2.646 8.909 3.426 13.495 1.586 9.323 2.266 18.803 4.619 27.988 1.443 5.632 2.891 6.043 7.428 2.628 6.561-4.937 11.97-11.084 17.693-16.9 9.578-9.732 18.682-19.993 30.01-27.816 15.68-10.829 27.942-10.407 42.88 1.229 3.753 2.923 6.958 6.41 10.618 10.5-11.702-30.008-49.723-59.249-97.034-53.877-36.263 4.117-67.493 30.997-75.874 58.416 10.02-8.568 18.686-17.357 30.328-23.431z"/><path d="M203.644 231.65c2.865-3.057 5.252-6.03 7.311-9.284.877-1.385 2.016-2.651 3.223-3.77 2.133-1.974 4.686-2.863 7.229-.974 2.77 2.057 2.558 5.061 1.047 7.64-9.021 15.391-21.107 26.525-39.924 28.02-2.652.21-5.304.778-7.942.698-3.087-.093-6.127-.93-6.768-4.634-.665-3.847 1.84-5.506 5.073-6.094 4.07-.741 8.222-1.033 12.3-1.742 7.081-1.23 13.29-4.228 18.45-9.86z"/></svg>
            </div>
            <form id="signupForm" class="signup-form">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" required>
                    <span class="error-message" id="firstNameError"></span>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" required>
                    <span class="error-message" id="lastNameError"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error-message" id="emailError"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <span class="error-message" id="passwordError"></span>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                    <span class="error-message" id="confirmPasswordError"></span>
                </div>
                <div class="form-options">
                    <div class="terms-agreement">
                        <input type="checkbox" id="terms" name="terms" style="display: none;">
                        <label for="terms">I agree to the <a href="#" id="showTermsLink">Terms and Conditions</a></label>
                    </div>
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
                <button type="button" class="google-signup-btn">
                    <svg class="google-icon" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Sign up with Google
                </button>
            </form>
            <div class="login-link">
                <p>Already have an account? <a href="Login.html">Login</a></p>
            </div>
        </section>
    </main>

    <div class="terms-modal" id="termsModal">
        <div class="terms-content">
            <h3 class="terms-title">Terms and Conditions</h3>
            <div class="terms-text" id="termsText">
                <p>Welcome to MeMeVote! Before creating an account, please read and agree to the following terms and conditions:</p>
                
                <h4>1. Account Information</h4>
                <p>You must provide accurate and complete information when creating your account. You are responsible for maintaining the confidentiality of your password.</p>
                
                <h4>2. User Conduct</h4>
                <p>You agree to use our services in compliance with all applicable laws and regulations. Harassment, hate speech, or any form of abusive behavior is strictly prohibited.</p>
                
                <h4>3. Privacy Policy</h4>
                <p>Your personal information will be handled in accordance with our Privacy Policy. By creating an account, you consent to our collection and use of your data as described therein.</p>
                
                <h4>4. Content Guidelines</h4>
                <p>Any content you upload or share must not violate copyright laws or contain inappropriate material. We reserve the right to remove content that violates our guidelines.</p>
                
                <h4>5. Account Termination</h4>
                <p>We reserve the right to suspend or terminate your account if you violate these terms or engage in fraudulent activity.</p>
            </div>
            <div class="terms-actions">
                <div class="terms-checkbox-container">
                    <input type="checkbox" id="termsCheckbox" disabled>
                    <label for="termsCheckbox">I have read and agree to the terms and conditions</label>
                </div>
                <div class="terms-buttons">
                    <button id="agreeButton" class="agree-button" disabled>I Agree</button>
                    <button id="cancelButton" class="cancel-button">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="Template/Js/template.js"></script>
    <script src="Js/signup.js"></script>
</body>
</html>
