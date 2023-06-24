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
        $('.table__action').click(function() {
            $('.modal-view').css('display', 'flex');
        });
        // click without .modal-content to close modal
        $('.modal-view').click(function(e) {
            if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
                $('.modal-view').css('display', 'none');
            }
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
            <button class="btn">
                Hợp đồng uỷ quyền
            </button>
        </a>
        <a href="{{ route('Manage.Contract.show', 1) }}?list-active=true">
            <button class="btn btn-active">
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
            <a style="margin-top: 20px" href="#">
                <i class="fa-solid fa-plus"></i>
                <p>
                    Thêm bản ghi mới
                </p>
            </a>
        </div>
    </div>

    <div class="header-search">
        <form class="search-list">
            <div class="form-group">
                <label for="">
                    Tình trạng phê duyệt
                </label>
                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
        </form>
        <div class="input-search">
            <input type="text" placeholder="Tìm kiếm">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
    </div>

    <div class="table table-active">
        <table>
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên bản ghi
                    </th>
                    <th>
                        Mã ISRC
                    </th>
                    <th>
                        Ca sĩ
                    </th>
                    <th>
                        Tác giả
                    </th>
                    <th>
                        Ngày tải
                    </th>
                    <th>
                        Tình trạng
                    </th>
                    <th colspan="1">
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td>
                            {{ $i + 1 }}
                        </td>
                        <td>
                            Bản ghi {{ $i + 1 }}
                        </td>
                        <td>
                            123456789
                        </td>
                        <td>
                            Ca sĩ {{ $i + 1 }}
                        </td>
                        <td>
                            Tác giả {{ $i + 1 }}
                        </td>
                        <td>
                            01/01/2021
                        </td>
                        <td>
                            <i class="fa-solid fa-circle icon-process text-info"></i>
                            Chờ duyệt
                        </td>
                        <td class="table__action">
                            Nghe
                        </td>
                    </tr>
                @endfor
        </table>

        <div class="modal-view">
            <div class="modal-content">
                {{-- <video src="{{ asset('upload/video.mp4') }}"></video> --}}
                <video width="320" height="240" controls>
                    <source src="{{ asset('upload/video.mp4') }}" type="video/mp4">
                </video>
                {{-- close --}}
                <div class="close">
                    <i class="fa-solid fa-times"></i>
                </div>
            </div>
        </div>

        <div class="modal-view-action">
            <form class="modal-content">
                <h2>
                    Hủy hợp đồng ủy quyền
                </h2>
                <textarea name="" placeholder="Cho chúng tôi biết lý do hủy hợp đồng ủy quyền này..."></textarea>
                <div class="button-group">
                    <button type="button" class="btn btn-outline close-modal-active">
                        Quay lại
                    </button>
                    <button class="btn">
                        Hủy hợp đồng
                    </button>
                </div>
            </form>
        </div>
    @endsection
