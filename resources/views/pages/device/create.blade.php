@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/device-manage.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();

        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.querySelector(`#${inputId} + .btn-eye i`);
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
        Thêm thiết bị mới
    </h1>

    <form class="group-flex">
        <div class="flex-item">
            <table>
                <tbody>
                    <tr>
                        <td>
                            Tên thiết bị: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            SKU/ID: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Địa chỉ Mac: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thời hạn bảo hành: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="date" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Label: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <select name="" class="input">
                                <option value="">Label</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Thông tin: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <select name="" class="input">
                                <option value="">Thông tin</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ghi chú: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <textarea name="" id="" class="input"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-alert">
                            <span class="text-danger">*</span> là những thông tin bắt buộc
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex-item">
            <table>
                <tbody>
                    <tr>
                        <td>
                            Tên đăng nhập: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="password" id="passwordInput1" name="">
                            <button type="button" class="btn-eye" onclick="togglePasswordVisibility('passwordInput1')">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nhập lại mật khẩu: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="password" id="passwordInput2" name="">
                            <button type="button" class="btn-eye" onclick="togglePasswordVisibility('passwordInput2')">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Vị trí: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="button-group">
            <a href="{{ Route('Manage.Device.index') }}">
                <button type="button" class="btn btn-outline">
                    Hủy
                </button>
            </a>
            <button type="submit" class="btn btn-active-form">
                Lưu
            </button>
        </div>
    </form>
@endsection
