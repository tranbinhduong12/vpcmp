@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('content')
    @include('components.paging')
    <h1>
        Phê duyệt bản ghi
    </h1>

    <div class="input-search">
        <input type="text" placeholder="Tìm kiếm">
        <i class="fa-solid fa-search input-search__icon"></i>
    </div>

    <div class="header-search">
        <form class="search-list">
            <div class="form-group">
                <label for="">
                    Thể loại
                </label>
                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">
                    Định dạng
                </label>
                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <div class="action__page">
                <a href="">
                    <i class="fa-solid fa-check" style="color: #0FBF00"></i>
                    <p>
                        Phê duyệt
                    </p>
                </a>
                <div style="margin-top: 20px" class="open-modal-active">
                    <i class="fa-solid fa-xmark" style="color: #FF4747"></i>
                    <p>
                        Từ chối
                    </p>
                </div>
            </div>
        </form>
        <div class="choose-option">
            <i class="fa-solid fa-list-ul"></i>
            <a href="">
                <i class="fa-solid fa-table-cells-large"></i>
            </a>
        </div>
    </div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" class="table__checkbox">
                    </th>
                    <th>
                        STT
                    </th>
                    <th>
                        Tên bản ghi
                    </th>
                    <th>
                        Thời lượng
                    </th>
                    <th>
                        Ca sĩ
                    </th>
                    <th>
                        Tác giả
                    </th>
                    <th>
                        Mã ISRC
                    </th>
                    <th>
                        Số hợp đồng
                    </th>
                    <th>
                        Ngày tải
                    </th>
                    <th colspan="1">
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table__checkbox">
                        </td>
                        <td>
                            {{ $i + 1 }}
                        </td>
                        <td>
                            Bản ghi {{ $i + 1 }}
                        </td>
                        <td>
                            00:00:00
                        </td>
                        <td>
                            Ca sĩ {{ $i + 1 }}
                        </td>
                        <td>
                            Tác giả {{ $i + 1 }}
                        </td>
                        <td>
                            123456789
                        </td>
                        <td>
                            123456789
                        </td>
                        <td>
                            01/01/2021
                        </td>
                        <td class="table__action">
                            Nghe
                        </td>
                    </tr>
                @endfor
        </table>
        <div class="footer__table">
            <div class="footer__left">
                Hiển thị <span>12</span> hàng trong mỗi trang
            </div>

            <div class="footer__right">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
    </div>

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
                Hủy hợp đồng khai thác
            </h2>
            <textarea name="" placeholder="Cho chúng tôi biết lý do hủy hợp đồng khai thác này..."></textarea>
            <div class="button-group">
                <button class="btn">
                    Hủy hợp đồng
                </button>
                <button type="button" class="btn btn-outline close-modal-active" >
                    Quay lại
                </button>
            </div>
        </form>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function() {
            $('.table__action').eq(0).click(function() {
                $('.modal-view').css('display', 'flex');
            });

            $('.close').click(function() {
                $('.modal-view').css('display', 'none');
            });

            // click without .modal-content to close modal
            $('.modal-view').click(function(e) {
                if (!$(e.target).is('.modal-content') && !$(e.target).is('video')) {
                    $('.modal-view').css('display', 'none');
                }
            });

            $('.open-modal-active').click(function() {
                $('.modal-view-action').css('display', 'flex');
            });

            $('.close-modal-active').click(function() {
                $('.modal-view-action').css('display', 'none');
            });

        });
        let checkboxes = document.querySelectorAll('.table__checkbox');
        let checkboxAll = checkboxes[0];
        // Bỏ đi checkbox đầu tiên
        checkboxes = [...checkboxes].slice(1);

        checkboxAll.addEventListener('change', function() {
            checkboxes.forEach((item) => {
                item.checked = this.checked;
            });
        });

        checkboxes.forEach((item) => {
            item.addEventListener('change', function() {
                if (!this.checked) {
                    checkboxAll.checked = false;
                } else {
                    // Kiểm tra xem tất cả các checkbox còn lại đã được checked hay chưa
                    const allChecked = [...checkboxes].every((checkbox) => checkbox.checked);
                    checkboxAll.checked = allChecked;
                }
            });
        });

    </script>
@endsection
