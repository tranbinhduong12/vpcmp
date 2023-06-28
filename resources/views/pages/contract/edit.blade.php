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
        Hợp đồng ủy quyền bài hát - BH123
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
                            <input type="text" class="input" name="" value="12341">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tên hợp đồng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="Hợp đồng âm nhạc">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày hiệu lực: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="2021/01/01">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày hết hạn: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="2021/01/01">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tình trạng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            {{-- <input type="text" class="input" name=""> --}}
                            <select name="" class="input" >
                                <option value="">Đang hiệu lực</option>
                                <option value="">Hết hiệu lực</option>
                            </select>
                        </th>
                    </tr>
                </table>
            </div>

            <div class="content-info">
                <table>
                    <tr>
                        <th class="text-title flex-require">
                            <div>
                                Đính kèm tệp:
                            </div>
                        </th>
                        <th class="input-radio">
                            <input id="input-upload" class="input-upload" type="file" name="" required>
                            <button class="btn btn-outline btn-upload" type="button">
                                <i class="fa-solid fa-upload"></i>
                                Tải lên
                            </button>
                            <br/> <br/>
                            <div>
                                <i class="fa-regular fa-file-word"></i>
                                hetthuongcannho.doc
                                <i class="fa-solid fa-times text-danger"></i>
                            </div>
                            <div>
                                <i class="fa-regular fa-file-word"></i>
                                hetthuongcannho.doc
                                <i class="fa-solid fa-times text-danger"></i>
                            </div>
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

                            <input type="radio" name="legal" id="legal-global" value="global" >
                            <label for="legal-global">Tổ chức</label>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tên người uỷ quyền: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="Nguyễn văn a">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày sinh: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="date" class="input" name="" value="2002/02/22">
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
                            <input type="text" class="input" name="" value="0396396332">
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
                            <input type="text" class="input" name="" value="0123232321">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngày cấp: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="2020/02/02">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Nơi cấp: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="CSC">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Mã số thuế: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="1328299">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Nơi cư trú:
                        </th>
                        <th>
                            <textarea class="input" name="" >123, đường 123, phường 123, quận 123, thành phố 123</textarea>
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
                            <input type="email" class="input" name="" value="email@gmail.com">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Tài khoản đăng nhập: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="congcong">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Mật khẩu: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="password" class="input" name="" value="1234">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Số tài khoản: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="039393921">
                        </th>
                    </tr>
                    <tr>
                        <th class="text-title">
                            Ngân hàng: <span class="text-danger">*</span>
                        </th>
                        <th>
                            <input type="text" class="input" name="" value="TpBank">
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="button-group">
            <a href="{{ Route('Manage.Contract.show', 1) }}">
                <button type="button" class="btn btn-outline" >
                    Hủy
                </button>
            </a>
            <button class="btn btn-active-form">
                Lưu
            </button>
        </div>
    </form>
@endsection
