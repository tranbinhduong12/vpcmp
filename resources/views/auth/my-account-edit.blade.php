@extends('layouts.app')

@section('title', 'Tài khoản của tôi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/my-account.css') }}">
@endsection

@section('script')
    <script>
        // active_navbar_mini();
    </script>
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Thông tin cơ bản
    </h1>

    <form style="display: flex; margin-top: 50px; flex-wrap: wrap">
        <div class="info-profile">
            <div class="image-profile">
                <img src="{{ asset('assets/images/logo.png') }}" alt="avatar">
                <label for="input-upload" class="button-upload">
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
                <input type="text" class="input" value="Trần">
            </div>
            <div class="form-group form-group-50">
                <label for="name">Tên</label>
                <input type="text" class="input" value="Bình Dương">
            </div>
            <div class="form-group form-group-50">
                <label for="name">Ngày sinh</label>
                <input type="date" class="input" value="2000-01-01">
            </div>
            <div class="form-group form-group-50">
                <label for="name">Số điện thoại</label>
                <input type="text" class="input" value="0987654321">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="input" value="duong@gmail.com">
            </div>
            <div class="form-group">
                <label for="name">Tên đăng nhập</label>
                <input type="text" class="input" value="tranduong">
            </div>
            <div class="form-group form-group-50">
                <label for="name">Phân quyền</label>
                <select name="" class="input">
                    <option value="">Admin</option>
                    <option value="">User</option>
                </select>
            </div>
            <input type="file" class="input-upload" id="input-upload">
            <div class="button-group">
                <a href="{{ Route('my-account') }}">
                    <button type="button" class="btn btn-outline">
                        Hủy
                    </button>
                </a>
                <button type="submit" class="btn btn-active-form">
                    Lưu
                </button>
            </div>
        </div>
    </form>

@endsection
