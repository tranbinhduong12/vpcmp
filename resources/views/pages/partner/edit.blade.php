@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/partner-manage.css') }}">
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
        Cập nhập thông tin
    </h1>

    <form class="group-flex">
        <div class="flex-item">
            <table>
                <tbody>
                    <tr>
                        <td>
                            Tên người dùng: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="" value="Người dùng A">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="" value="example@example.com">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Số điện thoại: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="text" name="" value="0987654321">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Vai trò: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <select name="" class="input">
                                <option value="QA">QA</option>
                                <option value="Super Admin">Super Admin</option>
                                <option value="Group Admin">Group Admin</option>
                                <option value="Sub - User">Sub - User</option>
                                <option value="Content Manager">Content Manager</option>
                            </select>
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
                            <input class="input" type="text" name="" value="username123">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mật khẩu: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input">
                            <input class="input" type="password" id="passwordInput1" name="" value="your_password_here">
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
                            <input class="input" type="password" id="passwordInput2" name="" value="your_password_here">
                            <button type="button" class="btn-eye" onclick="togglePasswordVisibility('passwordInput2')">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Trạng thái: <span class="text-danger">*</span>
                        </td>
                        <td class="form-input form-group-flex">
                            <div style="display: flex">
                                <input type="radio" name="active" id="active-input" checked>
                                <label for="active-input">Đã kích hoạt</label>
                            </div>
                            <div style="display: flex">
                                <input type="radio" name="active" id="unactive-input">
                                <label for="unactive-input">Ngưng kích hoạt</label>
                            </div>
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
