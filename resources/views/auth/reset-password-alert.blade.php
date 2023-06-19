<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password</title>
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
            Khôi phục mật khẩu
        </h2>
        {{-- <form action="" class="error"> --}}
        <form action="">
            <div class="form-group">
                <p>
                    Link khôi phục mật khẩu đã được gửi vào mail của bạn. Vui lòng kiểm tra mail.
                </p>
                <p>
                    Click vào đường link được đính kèm trong mail để chuyển đến trang đặt lại mật khẩu.
                </p>
            </div>
        

        </form>
        <div class="forgot-password">
            <a href="{{ route('login') }}">
                Quay lại đăng nhập
            </a>
        </div>
    </div>
</body>
</html>