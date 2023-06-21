@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/record-store.css') }}">
@endsection

@section('content')
    @include('components.paging')
    <h1>
        Bản ghi - Mất ems
    </h1>

    <div class="group">
        <div class="action__page">
            <a href="{{ route('RecordStore.approve') }}">
                <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
                <p>
                    Xóa bản ghi
                </p>
            </a>
        </div>
        <div class="info">
            <div class="info-ban-ghi">
                <h3 class="title-info">
                    Thông tin bản ghi
                </h3>
                <div class="image-ban-ghi">
                    <div class="image">
                        <img src="{{ asset('logo/logo.png') }}" alt="">
                    </div>
                    <div class="name-file">
                        <i class="fa-solid fa-music"></i>
                        Matem.mp3
                    </div>
                </div>

                <div class="group group-table">
                    <div class="group-a">
                        Ngày thêm:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Người tải lên:
                    </div>
                    <div class="group-b">
                        Super Admin
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Người duyệt:
                    </div>
                    <div class="group-b">
                        Hệ thống(Tự động phê duyệt)
                    </div>
                </div>
                <div class="group group-table">
                    <div class="group-a">
                        Ngày phê duyệt:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:50
                    </div>
                </div>
            </div>
            <div class="info-uy-quyen">
                <h3 class="title-info">
                    Thông tin ủy quyền
                </h3>
                <div class="group group-table">
                    <div class="group-a">
                        Số hợp đồng:
                    </div>
                    <div class="group-b">
                        BH123
                    </div>
                </div>

                <div class="group group-table">
                    <div class="group-a">
                        Ngày nhận ủy quyền:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>

                <div class="group group-table">
                    <div class="group-a">
                        Ngày hết hạn:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>

                <div class="group group-table">
                    <div class="group-a">
                        Trạng thái:
                    </div>
                    <div class="group-b">
                        07/04/2021 - 17:45:30
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-info">
            <h3 class="title-info">
                Thông tin ủy quyền
            </h3>
            <form class="form-edit" action="">
                <div class="form-group">
                    <label for="">
                        Tên bản ghi:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Mã ISRC:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Ca sĩ:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Tác giả:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Nhà sản xuất:
                    </label>
                    <input class="input" type="text" name="" required>
                </div>

                <div class="form-group">
                    <label for="">
                        Thể loại:
                    </label>
                    <select class="input" name="" id="">
                        <option value="">
                            Ballad
                        </option>
                        <option value="">
                            Ballad
                        </option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="group group-table" style="justify-content: center; margin-top: 40px">
        <a href="{{ route('RecordStore.index') }}">
            <button type="button" class="btn btn-outline" >
                Hủy
            </button>
        </a>
        <button class="btn btn-submit">
            Lưu
        </button>
    </div>

@endsection


@section('script')
    <script>
        // click btn-submit => submit form
        $('.btn-submit').click(function () {
            $('.form-edit').submit();
        })
        active_navbar_mini();
    </script>
@endsection
