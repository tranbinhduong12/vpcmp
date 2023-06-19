<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('logo/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}">

    <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="language">
        <select name="" id="">
            <option value="">
                Tiếng Việt 
                <div class="language-image" style="background-image: url({{ asset('assets/images/language/english.jpg') }})"></div>
            </option>
            <option value="">
                English 
                <div class="language-image" style="background-image: url({{ asset('assets/images/language/english.jpg') }})"></div>
            </option>
            
        </select>
    </div>
    <div class="container">
        <div class="main-logo">
            <img src="{{ asset('logo/logo.png') }}" alt="">
        </div>
        <h2 class="title-name">
            Đăng nhập
        </h2>
        {{-- <form action="" class="error"> --}}
        <form action="">
            @csrf
            <div class="form-group">
                <label for="username">
                    Tên đăng nhập
                </label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">
                    Mật khẩu
                </label>
                <input type="password" name="password" id="password">
                <i id="togglePassword" class="togglePassword fa-regular fa-eye"></i>
            </div>
            {{-- <div class="error-text">
                Hãy nhập tài khoản và mật khẩu
            </div> --}}
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember" style="width:20px; height:20px; margin-right: 10px; transform: translateY(3px);">
                <label for="remember" style="font-weight: 500; padding-bottom: 10px">
                    Ghi nhớ đăng nhập
                </label>
            </div>
            <button type="submit" class="btn-login">
                Đăng nhập
            </button>

        </form>
        <div class="forgot-password">
            <a href="{{ route('password.request') }}">
                Quên mật khẩu?
            </a>
        </div>
    </div>
</body>
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    
    togglePassword.addEventListener('click', function() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        togglePassword.classList.remove('fa-eye');
        togglePassword.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        togglePassword.classList.remove('fa-eye-slash');
        togglePassword.classList.add('fa-eye');
      }
    });
  </script>
</html>