@extends('layouts.app')

@section('title', 'Tài khoản của tôi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/my-account.css') }}">
@endsection

@section('script')
    <script>
        $('.close-modal-view').click(function() {
            $('.modal-view-action').css('display', 'none');
        });

        $('.open-modal-view').click(function() {
            $('.modal-view-action').css('display', 'flex');
        });

        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = passwordInput.nextElementSibling.querySelector('.fa-eye');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        }
    </script>
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Thông tin cơ bản
    </h1>

    <div style="display: flex; margin-top: 50px">
        <div class="action__page">
            <a href="{{ route('my-account.edit') }}">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>
                    Sửa thông tin
                </p>
            </a>
            <div style="margin-top: 20px" class="open-modal-view">
                <i class="fa-solid fa-lock"></i>
                <p>
                    Đổi mật khẩu
                </p>
            </div>
            <a href="{{ route('login') }}" style="margin-top: 20px">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p>
                    Đăng xuất
                </p>
            </a>
        </div>
        <div class="info-profile">
            <div class="image-profile">
                <img src="{{ asset('assets/images/logo.png') }}" alt="avatar">
                <label class="button-upload">
                    <i class="fa-solid fa-camera"></i>
                </label>
            </div>
            <div class="name-profile text-center">
                Trần Bình Dương
            </div>
        </div>
        <div class="form-profile">
            <div class="form-group form-group-50">
                <label for="name">Họ</label>
                <input type="text" class="input" value="Trần" disabled>
            </div>
            <div class="form-group form-group-50">
                <label for="name">Tên</label>
                <input type="text" class="input" value="Bình Dương" disabled>
            </div>
            <div class="form-group form-group-50">
                <label for="name">Ngày sinh</label>
                <input type="date" class="input" value="2000-01-01" disabled>
            </div>
            <div class="form-group form-group-50">
                <label for="name">Số điện thoại</label>
                <input type="text" class="input" value="0987654321" disabled>
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="input" value="duong@gmail.com" disabled>
            </div>
            <div class="form-group">
                <label for="name">Tên đăng nhập</label>
                <input type="text" class="input" value="tranduong" disabled>
            </div>
            <div class="form-group form-group-50">
                <label for="name">Phân quyền</label>
                <select name="" class="input" disabled>
                    <option value="">Admin</option>
                    <option value="">User</option>
                </select>
            </div>
            <input type="file" class="input-upload" id="input-upload">
        </div>
    </div>
    <div class="modal-view-action">
        <form class="modal-content" style="width: 620px">
            <h2>
                Đổi mật khẩu
            </h2>
            <div class="form-group" style="margin-top: 30px">
                <label for="">Mật khẩu hiện tại: <span class="text-danger">*</span></label>
                <input type="password" class="input" id="currentPasswordInput">
                <button type="button" class="btn-eye" onclick="togglePasswordVisibility('currentPasswordInput')">
                    <i class="fa-regular fa-eye"></i>
                </button>
            </div>
            <div class="form-group" style="margin-top: 30px">
                <label for="">Mật khẩu mới: <span class="text-danger">*</span></label>
                <input type="password" class="input" id="newPasswordInput">
                <button type="button" class="btn-eye" onclick="togglePasswordVisibility('newPasswordInput')">
                    <i class="fa-regular fa-eye"></i>
                </button>
            </div>
            <div class="form-group" style="margin-top: 30px">
                <label for="">Nhập lại mật khẩu mới: <span class="text-danger">*</span></label>
                <input type="password" class="input" id="confirmPasswordInput">
                <button type="button" class="btn-eye" onclick="togglePasswordVisibility('confirmPasswordInput')">
                    <i class="fa-regular fa-eye"></i>
                </button>
            </div>
            <div class="button-group">
                <button type="button" class="btn btn-outline close-modal-view">
                    Hủy
                </button>
                <button class="btn" type="submit">
                    Lưu
                </button>
            </div>
        </form>
    </div>

@endsection
