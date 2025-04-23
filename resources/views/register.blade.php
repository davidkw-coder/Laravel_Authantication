<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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

    .register-form {
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

    .register-btn {
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

    .register-btn:hover {
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

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .register-form {
            width: 90%;
            padding: 30px;
        }
    }
</style>
<body>
    <div class="container">
        <div class="register-form">
            <h1>Register Here</h1>

            @if ($errors->any())
                <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>

