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
            Đặt lại mật khẩu
        </h2>
        {{-- <form action="" class="error"> --}}
        <form action="">

            <div class="form-group">
                <label for="password">
                    Mật khẩu mới
                </label>
                <input type="password" name="password" id="password">
                <i id="togglePassword" class="togglePassword fa-regular fa-eye"></i>
            </div>
            <div class="form-group">
                <label for="password">
                    Nhập lại mật khẩu mới:
                </label>
                <input type="password" name="comfirm_password" id="comfirm_password">
                <i id="togglecomfirm_Password" class="togglePassword fa-regular fa-eye"></i>
            </div>

            <button type="submit" class="btn-login">
                Lưu mật khẩu
            </button>

        </form>
    </div>
</body>
<script>
    const togglePassword = document.querySelectorAll('.togglePassword');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('comfirm_password');
    
    togglePassword.forEach(function(element) {
      element.addEventListener('click', function() {
        const inputField = this.previousElementSibling;
        
        if (inputField.type === 'password') {
          inputField.type = 'text';
          this.classList.remove('fa-eye');
          this.classList.add('fa-eye-slash');
        } else {
          inputField.type = 'password';
          this.classList.remove('fa-eye-slash');
          this.classList.add('fa-eye');
        }
      });
    });
  </script>
  
</html>