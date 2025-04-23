<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #121212;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    overflow: hidden;
    position: relative;
}

.container {
    position: relative;
    width: 100%;
    max-width: 1200px;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


.login-form {
    background: rgba(40, 40, 45, 0.877);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 10px;
    padding: 40px;
    width: 400px;
    z-index: 2;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

h1 {
    color: white;
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
}

.form-group {
    margin-bottom: 25px;
}

label {
    display: block;
    color: white;
    margin-bottom: 8px;
    font-size: 16px;
}

input {
    width: 100%;
    padding: 12px 15px;
    background-color: rgba(60, 60, 65, 0.5);
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    outline: none;
    transition: background-color 0.3s;
}

input::placeholder {
    color: #aaa;
}

input:focus {
    background-color: rgba(70, 70, 75, 0.7);
}

.login-btn {
    width: 100%;
    padding: 12px;
    background-color: white;
    color: #333;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-bottom: 20px;
}

.login-btn:hover {
    background-color: #f0f0f0;
}



.error-message {
    background-color: rgba(255, 0, 0, 0.2);
    color: #ff6b6b;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    text-align: center;
}


/*Specific style for candidate*/

.profile-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.info-group {
    margin-bottom: 15px;
}

.info-group label {
    display: block;
    font-weight: 600;
    color: #666;
    margin-bottom: 5px;
}

.info-group p {
    background-color: #f9f9f9;
    padding: 10px;
    border-radius: 5px;
    margin: 0;
}

.license-card {
    background: linear-gradient(135deg, #2c3e50, #1a2530);
    color: white;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

.license-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.license-title h3 {
    font-size: 20px;
    margin: 0 0 5px 0;
}

.license-title p {
    margin: 0;
    opacity: 0.7;
}

.license-logo {
    width: 60px;
    height: 60px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.license-logo i {
    font-size: 30px;
}

.license-details {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.license-detail {
    margin-bottom: 10px;
}

.license-detail label {
    display: block;
    font-size: 12px;
    opacity: 0.7;
    margin-bottom: 5px;
}

.license-detail p {
    font-size: 16px;
    margin: 0;
}

.license-footer {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    justify-content: space-between;
}

.license-status {
    display: flex;
    align-items: center;
}

.status-indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin-right: 8px;
}

.status-active {
    background-color: #28a745;
}

.status-pending {
    background-color: #ffc107;
}

.status-inactive {
    background-color: #dc3545;
}

.no-results {
    text-align: center;
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 5px;
    color: #666;
}



/* Responsive adjustments */
@media (max-width: 768px) {
    .login-form {
        width: 90%;
        padding: 30px;
    }
    
    .blue-circle, .orange-circle {
        width: 200px;
        height: 200px;
    }
}

@media (max-width: 480px) {
    .social-login {
        flex-direction: column;
    }
    
    .google-btn, .facebook-btn {
        margin-bottom: 10px;
    }
}
</style>
<body>
<div class="container">
        <div class="blue-circle"></div>
        <div class="orange-circle"></div>
        
        <div class="login-form">
            <h1>Login Here</h1>
            
            <div class="error-message" style="display: none;">Invalid username or password</div>
            
            <form method="post" action="{{ route('login') }}">
    @csrf
    @if ($errors->any())
        <div class="error-message">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email" required>
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
    </div>
    
    <button type="submit" class="login-btn" name="submit">Log In</button>
    <!-- <a href="register.blade.php">Register</a> -->
</form>

        </div>
    </div>
</body>
</html>
