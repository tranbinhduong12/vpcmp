@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/contract.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();
        $('.btn-upload').click(function() {
            $('#input-upload').click();
        });
        $('#input-upload').change(function() {
            console.log('change');
            $('.btn-upload').html('<i class="fa-solid fa-check"></i> Đã tải lên');
            $('.btn-upload').css('background-color', '#FFAC69');
        });
        // click .btn-active-form to submit form
        $('.btn-active-form').click(function() {
            $('#form-new-contract').submit();
        });
        
    </script>
@endsection

@section('content')
    @include('components.paging')
    <h1>
        Thêm hợp đồng ủy quyền mới
    </h1>
    <form action="{{ route('Manage.Contract.createDone') }}" id="form-new-contract" style="margin-top: 30px">
        <div class="group-content">
            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title">
                            Số hợp đồng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tên hợp đồng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày hiệu lực: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày hết hạn: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tình trạng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                </table>
            </div>

            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title">
                            Đính kèm tệp:
                        </th>
                        <th class="input-radio">
                            <input id="input-upload" class="input-upload" type="file" name="" required>
                            <button class="btn btn-outline btn-upload" type="button">
                                <i class="fa-solid fa-upload"></i>
                                Tải lên
                            </button>
                        </th>
                    </tr>
                </table>
            </div>

            <div class="content-info">
                <table>
                    <tr>
                    <tr>
                        <th class="text-title text-title-2">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            Mức nhuận bút
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Quyền tác giả:
                        </th>
                        <th>
                            0%
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Quyền liên quan:
                        </th>
                    </tr>
                    <tr>
                        <th style="padding-left: 0">
                            Quyền của người biểu diễn:
                        </th>
                        <th>
                            50%
                        </th>
                    </tr>
                    <tr>
                        <th style="padding-left: 0">
                            Quyền của nhà sản xuất: <br>
                            (Bản ghi/video)
                        </th>
                        <th>
                            50%
                        </th>
                    </tr>

                    </tr>
                </table>
            </div>
        </div>

        <h3 style="color: #FFAC69">
            Thông tin pháp nhân uỷ quyền
        </h3>

        <div class="group-content">
            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title">
                            Pháp nhân uỷ quyền: <span class="text-danger">*</span>
                        </th>
                        <th class="input-radio">
                            <input type="radio" name="legal" id="legal-individual" value="individual" checked>
                            <label for="legal-individual">Cá nhân</label>

                            <input type="radio" name="legal" id="legal-global" value="global">
                            <label for="legal-global">Tổ chức</label>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tên người uỷ quyền: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày sinh: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="date" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Giới tính: <span class="text-danger">*</span>
                        </th>
                        <th class="input-radio">
                            <input type="radio" name="gender" id="gender-men" value="1" checked>
                            <label for="gender-men">Nam</label>

                            <input type="radio" name="gender" id="gender-woman" value="2">
                            <label for="gender-woman">Nữ</label>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Quốc tịch: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <select name="" class="input" >
                                <option value="">Việt Nam</option>
                                <option value="">Trung Của</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Số điện thoại: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                </table>
            </div>

            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title">
                            Số CMND/ CCCD: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày cấp: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Nơi cấp: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Mã số thuế: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Nơi cư trú:
                        </th>
                        <th>
                            <textarea class="input" name="" ></textarea>
                        </th>
                    </tr>
                </table>
            </div>

            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title">
                            Email: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tài khoản đăng nhập: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Mật khẩu: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Số tài khoản: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngân hàng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="">
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="button-group">
            <a href="{{ Route('Manage.Contract.index') }}">
                <button type="button" class="btn btn-outline" >
                    Hủy
                </button>
            </a>
            <button class="btn btn-active-form">
                Tạo
            </button>
        </div>
    </form>
@endsection
