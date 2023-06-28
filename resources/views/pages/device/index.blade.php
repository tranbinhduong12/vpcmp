@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/device-manage.css') }}">
@endsection

@section('script')
    <script>
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

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Playlist
    </h1>

    <div class="header-search" style="align-items: flex-end;">
        <div class="choose-option">
            <form class="search-list">
                <div class="form-group">
                    <select name="" id="">
                        <option value="">Chọn nhóm tài khoản</option>
                        <option value="">Tất cả</option>
                        <option value="">Công ty TMCP Bách Hóa Xanh</option>
                        <option value="">Công ty TNHH XYZ</option>
                        <option value="">Công ty TMCP Adora</option>
                    </select>
                </div>
            </form>
            <form class="search-list">
                <div class="form-group">
                    <select name="" id="">
                        <option value="">Ẩn hiện cột</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="input-search">
            <input type="text" placeholder="Tìm thiết bị theo tên, SKU, địa điểm, địa chỉ Mac">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
    </div>
    <div class="action__page">
        <a href="{{ route('Manage.Device.create') }}">
            <i class="fa-solid fa-plus"></i>
            <p>
                Thêm thiết bị
            </p>
        </a>
        <div style="margin-top: 20px">
            <i class="fa-solid fa-power-off"></i>
            <p>
                Kích hoạt thiết bị
            </p>
        </div>
        <div style="margin-top: 20px">
            <i class="fa-solid fa-lock"></i>
            <p>
                Khóa thiết bị
            </p>
        </div>
        <div style="margin-top: 20px">
            <i class="fa-solid fa-trash-can" style="color: #FF4747"></i>
            <p>
                Xóa thiết bị
            </p>
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
                        Tên thiết bị
                    </th>
                    <th>
                        Trạng thái
                    </th>
                    <th>
                        Hạn hợp đồng
                    </th>
                    <th>
                        Tên đăng nhập
                    </th>
                    <th>
                        Địa điểm
                    </th>
                    <th>
                        Memory
                    </th>
                    <th>
                        MAC Address
                    </th>
                    <th>
                        SKU/ID
                    </th>
                    <th>
                        Hạn bảo hành
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td style="text-align: left">
                            <input type="checkbox" class="table__checkbox">
                        </td>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            <a href="{{ route('Manage.Device.show', 1) }}">
                                {{ 'Tên thiết bị ' . ($i + 1) }}
                            </a>
                        </td>
                        <td>
                            @if ($i % 2 == 0)
                                <i class="fa-solid fa-circle icon-process text-success"></i>
                                Đang kích hoạt | Đang hoạt động
                            @else
                                <i class="fa-solid fa-circle icon-process text-danger"></i>
                                Ngưng kích hoạt
                            @endif
                        </td>
                        <td>{{ 'Hạn hợp đồng ' . ($i + 1) }}</td>
                        <td>{{ 'Tên đăng nhập ' . ($i + 1) }}</td>
                        <td>{{ ($i + 1) . '6/33, Âu Cơ, Phường 9, Tân Bình, TP Hồ Chí Minh' }}</td>
                        <td>{{ 'Memory ' . ($i + 1) }}</td>
                        <td>{{ 'MAC Address ' . ($i + 1) }}</td>
                        <td>{{ 'SKU/ID ' . ($i + 1) }}</td>
                        <td>{{ 'Hạn bảo hành ' . ($i + 1) }}</td>
                    </tr>
                @endfor
            </tbody>
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
@endsection
