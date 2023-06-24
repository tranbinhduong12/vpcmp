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
        Thêm thông tin bản ghi
    </h1>

    <div class="center-group">
        <div class="alert-box">
            <div class="top-title">
                <h3 class="text-center">
                    <i class="fa-solid fa-circle-check"></i>
                    Hợp đồng đã được thêm thành công
                </h3>
            </div>
            <div class="content-alert">
                <h4>
                    Có 2 cách để tạo bản ghi
                </h4>
                <table>
                    <tr>
                        <td style="display: flex; color: #FF7506; font-weight: 700">
                            Cách 1: 
                        </td>
                        <td>
                            <p>
                                Up load bản ghi trực tiếp
                            </p>
                            <p style="opacity: 0.8">
                                Bạn có thể thực hiện thêm bản ghi ngay trên website
                            </p>
                            <button class="btn open-modal-active">
                                Thêm bản ghi trực tiếp
                            </button>
                            <div class="hidden"></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="display: flex; color: #FF7506; font-weight: 700">
                            Cách 1: 
                        </td>
                        <td>
                            <p>
                                Up load bản ghi trực tiếp
                            </p>
                            <p style="opacity: 0.8">
                                Bạn có thể thực hiện thêm bản ghi ngay trên website
                            </p>
                            <button class="btn btn-outline">
                                Thêm bản ghi trực tiếp
                            </button>
                            <div class="hidden"></div>
                        </td>
                    </tr>
                </table>
                <div class="text-danger">
                    Lưu ý: Hợp đồng chỉ có hiệu lực khi thêm bản ghi thành công.
                </div>
            </div>
        </div>
    </div>
    <div class="modal-view-action" style="display: flex">
        <div class="modal-content">
            <h2 class="text-center" style="margin-bottom: 30px">
                Thêm bản ghi mới
            </h2>
            <div class="form-group form-group-2">
                <label for="">
                    Tiêu đề: <span class="text-danger">*</span>
                </label>
                <input class="input" type="text" name="" required value="Top Ca khúc 2021">
            </div>

            <div class="form-group form-group-2">
                <label for="">
                    Mã ISRC:
                </label>
                <input class="input" type="text" name="" required value="Top Ca khúc 2021">
            </div>

            <div class="form-group form-group-2">
                <label for="">
                    Ca sĩ/Nhóm nhạc: <span class="text-danger">*</span>
                </label>
                <input class="input" type="text" name="" required value="Top Ca khúc 2021">
            </div>

            <div class="form-group-3">
                <div class="form-group form-group-2">
                    <label for="">
                        Thể loại: <span class="text-danger">*</span>
                    </label>
                    <select name="" class="input">
                        <option value="">Chọn một thể loại</option>
                        <option value="">Rap</option>
                        <option value="">Ballad</option>
                        <option value="">Rock in Roll</option>
                        <option value="">R&B</option>
                    </select>
                </div>

                <div class="form-group form-group-2">
                    <label for="">
                        Nhà sản xuất: <span class="text-danger">*</span>
                    </label>
                    <input class="input" type="text" name="" required value="Top Ca khúc 2021">
                </div>
            </div>

            <div class="form-group-3">
                <div class="form-group-2">
                    <div style="display: flex; align-items: center;">
                        <div class="text-title" style="font-size: 16px; font-weight: 700; margin-right: 10px">
                            Đính kèm bản ghi: <span class="text-danger">*</span>
                        </div>
                        <div class="input-radio">
                            <input id="input-upload" class="input-upload" type="file" name="" required>
                            <button class="btn btn-outline btn-upload" type="button">
                                <i class="fa-solid fa-upload"></i>
                                Tải lên
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group-2">
                    <div style="display: flex; align-items: center;">
                        <div class="text-title" style="font-size: 16px; font-weight: 700; margin-right: 10px" >
                            Đính lời bài hát: 
                        </div>
                        <div class="input-radio">
                            <input id="input-upload" class="input-upload" type="file" name="" required>
                            <button class="btn btn-outline btn-upload" type="button">
                                <i class="fa-solid fa-upload"></i>
                                Tải lên
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-group" style="justify-content: center">
                <button type="button" class="btn btn-outline close-modal-active" >
                    Hủy
                </button>
                <button class="btn">
                    Tải lên
                </button>
            </div>
        </div>
    </div>

@endsection
