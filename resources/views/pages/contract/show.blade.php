@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/contract.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();
        $('.open-modal-active').click(function() {
            $('.modal-view-action').css('display', 'flex');
        });

        $('.close-modal-active').click(function() {
            $('.modal-view-action').css('display', 'none');
        });
    </script>
@endsection

@section('content')
    @include('components.paging')
    <h1>
        Danh sách hợp đồng
    </h1>
    <div class="switch-tab">
        <a href="{{ route('Manage.Contract.show', 1) }}">
            <button class="btn btn-active">
                Hợp đồng uỷ quyền
            </button>
        </a>
        <a href="{{ route('Manage.Contract.show', 1) }}?list-active=true">
            <button class="btn">
                Hợp đồng khai thác
            </button>
        </a>
        <div class="action__page">
            <a href="{{ route('Manage.Contract.edit', 1) }}">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>
                    Chỉnh sửa hợp đồng
                </p>
            </a>
            <div style="margin-top: 20px">
                <i class="fa-solid fa-file-lines"></i>
                <p>
                    Gia hạn hợp đồng
                </p>
            </div>
            <div style="margin-top: 20px" class="open-modal-active">
                <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
                <p>
                    Hủy hợp đồng
                </p>
            </div>
        </div>
    </div>

    <div class="group-content">
        <div class="content-info">
            <table>
                <tr>
                    <th class="text-title">
                        Số hợp đồng: 
                    </th>
                    <th>
                        123456
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Tên hợp đồng: 
                    </th>
                    <th>
                        Hợp đồng ủy quyền
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngày hiệu lực:
                    </th>
                    <th>
                        20/10/2021
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngày hết hạn:
                    </th>
                    <th>
                        21/10/2021
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Tình trạng:
                    </th>
                    <th>
                        <i class="fa-solid fa-circle icon-process text-info"></i>
                        Còn thời hạn
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
                    <th>
                        <div>
                            <i class="fa-regular fa-file-word"></i>
                            hetthuongcannho.doc
                        </div>
                        <div>
                            <i class="fa-regular fa-file-word"></i>
                            hetthuongcannho.doc
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
                        Pháp nhân uỷ quyền:
                    </th>
                    <th>
                        Cá nhân
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Tên người uỷ quyền:
                    </th>
                    <th>
                        Nguyễn Văn A
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngày sinh:
                    </th>
                    <th>
                        20/10/2002
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Giới tính:       
                    </th>
                    <th>
                        Nam
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Quốc tịch:
                    </th>
                    <th>
                        <i class="fa-solid fa-circle icon-process text-info"></i>
                        Việt Nam
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Số điện thoại:
                    </th>
                    <th>
                        <i class="fa-solid fa-circle icon-process text-info"></i>
                        (+84) 345 678 901
                    </th>
                </tr>
            </table>
        </div>

        <div class="content-info">
            <table>
                <tr>
                    <th class="text-title">
                        Số CMND/ CCCD:
                    </th>
                    <th>
                        1234567890
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngày cấp:
                    </th>
                    <th>
                        01/01/2022
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Nơi cấp:
                    </th>
                    <th>
                        Hà Nội, Việt Nam
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Mã số thuế:
                    </th>
                    <th>
                        1234567890
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Nơi cư trú:
                    </th>
                    <th>
                        69/53, Nguyễn Gia Trí, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh
                    </th>
                </tr>                
            </table>
        </div>

        <div class="content-info">
            <table>
                <tr>
                    <th class="text-title">
                        Email:
                    </th>
                    <th>
                        example@example.com
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Tài khoản đăng nhập:
                    </th>
                    <th>
                        myusername
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Mật khẩu:
                    </th>
                    <th>
                        ********
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Số tài khoản:
                    </th>
                    <th>
                        1234567890
                    </th>
                </tr>
                <tr>
                    <th class="text-title">
                        Ngân hàng:
                    </th>
                    <th>
                        ABC Bank
                    </th>
                </tr>                
            </table>
        </div>

    </div>

    <div class="modal-view-action">
        <form class="modal-content">
            <h2>
                Hủy hợp đồng ủy quyền
            </h2>
            <textarea name="" placeholder="Cho chúng tôi biết lý do hủy hợp đồng ủy quyền này..."></textarea>
            <div class="button-group">
                <button type="button" class="btn btn-outline close-modal-active" >
                    Quay lại
                </button>
                <button class="btn">
                    Hủy hợp đồng
                </button>
            </div>
        </form>
    </div>
@endsection
