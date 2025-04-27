<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Social Login Styles */
        .social-login-container {
            margin: 10px 0 10px 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .social-login-divider {
            position: relative;
            width: 100%;
            text-align: center;
            margin-bottom: 8px;
            margin-top: 0px;
        }
        
        .social-login-divider::before,
        .social-login-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: calc(50% - 70px);
            height: 1px;
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .social-login-divider::before {
            left: 0;
        }
        
        .social-login-divider::after {
            right: 0;
        }
        
        .social-login-divider span {
            display: inline-block;
            padding: 0 15px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 14px;
            background-color: var(--form-bg);
            position: relative;
            z-index: 1;
        }
        
        .social-login-buttons {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-bottom: 0px;
        }
        
        .social-login-button {
            background: #fff;
            color: #333;
            border: 1px solid rgba(255, 255, 255, 0.1);
            width: 50px;
            height: 50px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }
        
        .social-login-button.github {
            background: #333;
            color: #fff;
        }
        
        .social-login-button:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }
        
        .social-icon {
            width: 38px;
            height: 38px;
        }
        :root {
            /* Light mode colors */
            --bg-color: #f6f6f6;
            --text-color: #333;
            --card-bg: white;
            --form-bg: white;
            --input-bg: #f0f0f0;
            --primary-color: #925fe2;
            --primary-dark: #7f49d3;
            --toggle-bg: #f0f0f0;
            --toggle-button: #925fe2;
        }
        
        [data-theme="dark"] {
            /* Dark mode colors */
            --bg-color: #1c1d21;
            --text-color: white;
            --card-bg: #1c1d21;
            --form-bg: #1c1d21;
            --input-bg: #2a2a2a;
            --primary-color: #925fe2;
            --primary-dark: #7f49d3;
            --toggle-bg: #2a2a2a;
            --toggle-button: #925fe2;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            outline: none;
        }
        
        /* Remove any focus outlines that might show blue */
        *:focus {
            outline: none;
        }
        
        /* Improve the appearance of form elements */
        input, button {
            border: none;
            outline: none;
        }
        
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .container {
            background-color: var(--bg-color);
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
            min-height: 100vh;
            padding: 20px;
            transition: background-color 0.3s;
        }
        
        .login-wrapper {
            background-color: var(--card-bg);
            width: 1440px;
            height: 1024px;
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.5s ease-out;
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        .content-container {
            position: relative;
            height: 1024px;
            border-radius: 24px;
            overflow: hidden;
        }
        
        .vector-2 {
            position: absolute;
            width: 402px;
            height: 342px;
            top: 0;
            left: 1038px;
            animation: floatAnimation 4s ease-in-out infinite;
        }
        
        .vector-3 {
            position: absolute;
            width: 763px;
            height: 616px;
            top: 408px;
            left: 677px;
            animation: floatAnimation 4s ease-in-out infinite;
            animation-delay: 0.5s;
        }
        
        .vector-4 {
            position: absolute;
            width: 421px;
            height: 389px;
            top: 245px;
            left: 459px;
            animation: floatAnimation 4s ease-in-out infinite;
            animation-delay: 1s;
        }
        
        .vector-5 {
            position: absolute;
            width: 177px;
            height: 200px;
            top: 175px;
            left: 1263px;
            animation: floatAnimation 4s ease-in-out infinite;
            animation-delay: 1.5s;
        }
        
        .vector {
            position: absolute;
            width: 297px;
            height: 221px;
            top: 0;
            left: 868px;
            animation: floatAnimation 4s ease-in-out infinite;
            animation-delay: 2s;
        }
        
        .image-decoration {
            position: absolute;
            width: 297px;
            height: 273px;
            top: 671px;
            left: 664px;
            animation: floatAnimation 4s ease-in-out infinite;
            animation-delay: 1s;
        }
        
        .element-copy {
            position: absolute;
            width: 770px;
            height: 100%;
            top: 0;
            right: 0;
            object-fit: cover;
            z-index: 0;
            background-color: var(--primary-color);
            border-radius: 0 24px 24px 0;
            transition: background-color 0.3s;
        }
        
        .boys-illustration {
            position: absolute;
            width: 600px;
            height: auto;
            top: 55%;
            right: 120px;
            transform: translateY(-40%);
            z-index: 1;
            margin-top: 0;
            animation: slideInRight 0.8s ease-out forwards;
        }
        
        .boys-illustration::after {
            display: none;
        }
        
        .boys-illustration img {
            position: relative;
            z-index: 1;
            display: block;
            width: 100%;
            height: auto;
        }
        
        .left-panel {
            position: absolute;
            width: 670px;
            height: 1024px;
            top: 0;
            left: 0;
            background-color: var(--card-bg);
            border-radius: 24px 0 0 24px;
            transition: background-color 0.3s;
        }
        
        .login-form-container {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 48px;
            position: absolute;
            top: 314px;
            left: 128px;
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .form-content {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
            position: relative;
        }
        
        .form-top {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 48px;
            position: relative;
        }
        
        .form-title {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
            position: relative;
        }
        
        .title-text {
            font-weight: 700;
            font-size: 48px;
            position: relative;
            width: fit-content;
            margin-top: -1px;
            color: var(--text-color);
            letter-spacing: 0;
            transition: color 0.3s;
        }
        
        .subtitle-text {
            position: relative;
            width: fit-content;
            font-weight: 400;
            color: var(--text-color);
            opacity: 0.6;
            font-size: 20px;
            letter-spacing: 0;
            line-height: 1.5;
            transition: color 0.3s;
        }
        
        .form-fields {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
            position: relative;
        }
        
        .field-container {
            display: flex;
            flex-direction: column;
            width: 381px;
            align-items: flex-start;
            gap: 12px;
            position: relative;
        }
        
        .field-label {
            position: relative;
            width: fit-content;
            margin-top: -1px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.5);
            font-size: 16px;
            letter-spacing: 0;
        }
        
        .field-input {
            width: 381px;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            padding-bottom: 8px;
            color: white;
            font-size: 16px;
            outline: none;
        }
        
        .password-field-header {
            display: inline-flex;
            align-items: flex-start;
            justify-content: space-between;
            width: 100%;
            position: relative;
        }
        
        .toggle-password {
            background: none;
            border: none;
            cursor: pointer;
        }
        
        .eye-icon {
            width: 24px;
            height: 24px;
        }
        
        .forgot-password {
            position: relative;
            width: fit-content;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.5);
            font-size: 16px;
            letter-spacing: 0;
            text-decoration: none;
            cursor: pointer;
        }
        
        .forgot-password:hover {
            color: white;
        }
        
        .login-button {
            display: flex;
            width: 393px;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 0;
            position: relative;
            background-color: #9c6fe4;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .login-button:hover {
            background-color: #8055d0;
        }
        
        .button-text {
            font-weight: 400;
            font-size: 16px;
            position: relative;
            width: fit-content;
            margin-top: -1px;
            color: white;
            letter-spacing: 0;
        }
        
        .welcome-container {
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
            position: absolute;
            top: 155px;
            left: 730px;
        }
        
        .welcome-title {
            position: relative;
            width: fit-content;
            margin-top: -1px;
            font-weight: 400;
            color: #eeeeee;
            font-size: 80px;
            letter-spacing: 0;
            line-height: 70px;
        }
        
        .welcome-bold {
            font-weight: 700;
        }
        
        .welcome-regular {
            font-weight: 400;
        }
        
        .welcome-subtitle {
            position: relative;
            width: fit-content;
            font-weight: 500;
            color: #eeeeee;
            font-size: 16px;
            letter-spacing: 0;
        }
        
        .signup-container {
            display: inline-flex;
            align-items: center;
            gap: 100px;
            position: absolute;
            top: 925px;
            left: 130px;
        }
        
        .signup-text {
            position: relative;
            width: fit-content;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.5);
            font-size: 16px;
            letter-spacing: 0;
        }
        
        .signup-button {
            display: flex;
            width: 100px;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 24px;
            position: relative;
            background-color: #333437;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .signup-button:hover {
            background-color: #444548;
        }
        
        .signup-button-text {
            position: relative;
            width: fit-content;
            margin-top: -1px;
            margin-left: -4px;
            margin-right: -4px;
            font-weight: 400;
            color: white;
            font-size: 16px;
            letter-spacing: 0;
        }
        
        .copy-image {
            position: absolute;
            width: 767px;
            height: 628px;
            top: 368px;
            left: 673px;
            object-fit: cover;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 14px;
            margin-top: 4px;
        }
        
        .theme-toggle {
            position: absolute;
            top: 30px;
            right: 790px;
            width: 50px;
            height: 24px;
            background-color: var(--toggle-bg);
            border-radius: 12px;
            cursor: pointer;
            z-index: 10;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        .theme-toggle:hover {
            transform: scale(1.05);
        }
        
        .theme-toggle-button {
            position: absolute;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: var(--toggle-button);
            top: 3px;
            left: 3px;
            transition: transform 0.3s, background-color 0.3s;
        }
        
        [data-theme="dark"] .theme-toggle-button {
            transform: translateX(26px);
        }
        
        .theme-toggle-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 14px;
            height: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .sun-icon {
            right: 4px;
            color: #ffc107;
            opacity: 1;
        }
        
        .moon-icon {
            left: 4px;
            color: #384364;
            opacity: 0.5;
        }
        
        [data-theme="dark"] .sun-icon {
            opacity: 0.5;
        }
        
        [data-theme="dark"] .moon-icon {
            opacity: 1;
            color: #afc8ff;
        }
        
        /* Button hover animations */
        .login-button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        .login-button:active {
            transform: translateY(1px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        /* Form input animations */
        .form-input {
            transition: border-color 0.3s, box-shadow 0.3s, background-color 0.3s;
            background-color: var(--input-bg) !important;
            color: var(--text-color) !important;
        }
        
        .form-input:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 3px rgba(146, 95, 226, 0.2);
        }
        
        /* Password show/hide hover */
        .show-password-button:hover {
            color: var(--primary-color);
        }
        
        /* Footer links hover */
        .signup-link a:hover, .forgot-password:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translate(40px, -50%);
            }
            to {
                opacity: 1;
                transform: translate(0, -50%);
            }
        }
        
        @keyframes floatAnimation {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
        
        /* Form content animations */
        .form-input-container {
            animation: fadeInUp 0.6s ease-out forwards;
            animation-delay: 0.2s;
            opacity: 0;
        }
        
        .remember-me-container {
            animation: fadeInUp 0.6s ease-out forwards;
            animation-delay: 0.3s;
            opacity: 0;
        }
        
        .login-button-container {
            animation: fadeInUp 0.6s ease-out forwards;
            animation-delay: 0.4s;
            opacity: 0;
        }
        
        .signup-link {
            animation: fadeInUp 0.6s ease-out forwards;
            animation-delay: 0.5s;
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="content-container">
                <!-- Theme toggle -->
                <div class="theme-toggle" id="theme-toggle">
                    <div class="theme-toggle-button"></div>
                    <div class="theme-toggle-icon moon-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </div>
                    <div class="theme-toggle-icon sun-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                    </div>
                </div>
                
                <div class="element-copy">
                    <!-- Background color now handled by the CSS -->
                </div>
                
                <div class="boys-illustration">
                    <img src="{{ asset('images/boyss.png') }}" alt="Boys illustration">
                </div>
                
                <div class="left-panel"></div>
                
                <div class="login-form-container">
                    <form method="POST" action="{{ route('login.post') }}" class="form-content">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
                        @csrf
                        <div class="form-top">
                            <div class="form-title">
                                <div class="title-text">Login</div>
                                <div class="subtitle-text">Enter your account details</div>
                            </div>
                            
                            <div class="form-fields">
                                <div class="field-container">
                                    <div class="field-label">Username</div>
                                    <input type="text" name="email" class="field-input" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="field-container">
                                    <div class="password-field-header">
                                        <div class="field-label">Password</div>
                                        <button type="button" id="togglePassword" class="toggle-password">
                                            <img class="eye-icon" alt="Eye slash fill" src="{{ asset('images/eye-slash-fill.svg') }}">
                                        </button>
                                    </div>
                                    <input type="password" name="password" id="password" class="field-input" required>
                                    @error('password')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{ route('password.forgot') }}" class="forgot-password">Forgot Password?</a>
                        
                        <div class="social-login-container">
                            <div class="social-login-divider">
                                <span>or sign in with</span>
                            </div>
                            <div class="social-login-buttons">
                                <a href="{{ route('google.login') }}" class="social-login-button" title="Sign in with Google">
                                    <img src="{{ asset('images/Social/google.png') }}" alt="Google Logo" class="social-icon">
                                </a>
                                <a href="{{ route('github.login') }}" class="social-login-button github" title="Sign in with GitHub">
                                    <img src="{{ asset('images/Social/github.png') }}" alt="GitHub Logo" class="social-icon">
                                </a>
                                <a href="{{ route('linkedin.login') }}" class="social-login-button" title="Sign in with LinkedIn">
                                    <img src="{{ asset('images/Social/linkedin.png') }}" alt="LinkedIn Logo" class="social-icon">
                                </a>
                            </div>
                        </div>
                        
                        <button type="submit" class="login-button">
                            <div class="button-text">Login</div>
                        </button>
                    </form>
                </div>
                
                <div class="welcome-container">
                    <p class="welcome-title">
                        <span class="welcome-bold">Welcome to <br></span>
                        <span class="welcome-regular">student portal</span>
                    </p>
                    <p class="welcome-subtitle">Login to access your account</p>
                </div>
                
                <div class="signup-container">
                    <div class="signup-text">Don't have an account?</div>
                    <a href="{{ route('register') }}" class="signup-button">
                        <div class="signup-button-text">Sign up</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Change the eye icon based on password visibility
            const eyeIcon = this.querySelector('img');
            if (type === 'text') {
                eyeIcon.src = "{{ asset('images/eye-fill.svg') }}";
            } else {
                eyeIcon.src = "{{ asset('images/eye-slash-fill.svg') }}";
            }
        });

        // Theme toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const htmlElement = document.documentElement;
            
            // Check if user has a saved preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                htmlElement.setAttribute('data-theme', savedTheme);
            }
            
            themeToggle.addEventListener('click', function() {
                const currentTheme = htmlElement.getAttribute('data-theme');
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                
                htmlElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
        });
    </script>
</body>
</html> 