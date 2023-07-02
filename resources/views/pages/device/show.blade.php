@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/device-manage.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();
        $('.close-modal-view').click(function() {
            $('.modal-view-action').css('display', 'none');
        });

        $('.open-modal-view').click(function() {
            $('.modal-view-action').css('display', 'flex');
        });
    </script>
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Thông tin thiết bị - Device ID: 123456789
    </h1>

    <div class="action__page" style="margin-top: 20px">
        <div class="open-modal-view">
            <i class="fa-regular fa-pen-to-square"></i>
            <p>
                Chỉnh sửa
            </p>
        </div>
        <div style="margin-top: 20px">
            <i class="fa-solid fa-lock"></i>
            <p>
                Khôi phục mật khẩu
            </p>
        </div>
        <div style="margin-top: 20px">
            <i class="fa-solid fa-rotate"></i>
            <p>
                Khôi phục bộ nhớ
            </p>
        </div>
    </div>
    <div class="info-group">

        <div class="info-item">
            <div class="title-info">
                Thông tin thiết bị
            </div>
            <div class="image-device">
                <img src="{{ asset('upload/device.png') }}" alt="">
            </div>
            <table>
                <tbody>
                    <tr>
                        <td colspan="2" style="padding-left: 0;">
                            <i class="fa-solid fa-circle icon-process text-success" style="margin-right: 5px"></i>Hoạt động
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Ghi chú
                        </td>
                        <td>
                            Văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="info-item">
            <div class="title-info">
                DEVICE12233444
            </div>
            <table>
                <tbody>
                    <tr>
                        <td class="text-title">
                            SKU/ID:
                        </td>
                        <td>
                            A23434455556
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Địa chỉ Mac:
                        </td>
                        <td>
                            113.56.79.01
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Tên đăng nhập:
                        </td>
                        <td>
                            user123
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Định dạng:
                        </td>
                        <td>
                            Displayable
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Vị trí:
                        </td>
                        <td>
                            Ho Chi Minh
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Thời hạn bảo hành:
                        </td>
                        <td>
                            22/06/2021
                        </td>
                    </tr>
                    <tr>
                        <td class="text-title">
                            Trạng thái thiết bị:
                        </td>
                        <td>
                            Activated
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="info-item info-item--flex">
            <div>
                <div class="title-info">
                    Thông tin phiên bản
                </div>
                <table>
                    <tbody>
                        <tr>
                            <td class="text-title">
                                Phiên bản cũ nhất:
                            </td>
                            <td>
                                12.3 (20/02/2020)
                                <br>
                                12.3 (20/02/2020)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="title-info">
                    Dung lượng bộ nhớ
                </div>
                <table>
                    <tbody>
                        <tr>
                            <td class="text-title">
                                Dung lượng:
                            </td>
                            <td>
                                512GB
                            </td>
                        </tr>
                        <tr>
                            <td class="text-title">
                                Còn trống
                            </td>
                            <td>
                                123GB
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-view-action">
        <form class="modal-content" style="width: 620px">
            <h2>
                Chỉnh sửa thông tin thiết bị
            </h2>
            <div class="form-group" style="margin-top: 30px">
                <label for="">Tên thiết bị: <span class="text-danger">*</span></label>
                <input type="text" class="input" value="Thiết bị A">
            </div>
            <div class="form-group">
                <label for="">SKU/ID: <span class="text-danger">*</span></label>
                <input type="text" class="input" value="SKU123">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ Mac: <span class="text-danger">*</span></label>
                <input type="text" class="input" value="00:11:22:33:44:55">
            </div>
            <div class="form-group">
                <label for="">Tên đăng nhập: <span class="text-danger">*</span></label>
                <input type="text" class="input" value="user123">
            </div>
            <div class="form-group">
                <label for="">Vị trí: <span class="text-danger">*</span></label>
                <input type="text" class="input" value="HCM, Việt Nam">
            </div>
            <div class="form-group form-group-flex">
                <label>Trạng thái thiết bị: <span class="text-danger">*</span></label>
                <div style="display: flex">
                    <input type="radio" name="active" id="active-input" checked>
                    <label for="active-input">Đã kích hoạt</label>
                </div>
                <div style="display: flex">
                    <input type="radio" name="active" id="unactive-input">
                    <label for="unactive-input">Ngưng kích hoạt</label>
                </div>
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
