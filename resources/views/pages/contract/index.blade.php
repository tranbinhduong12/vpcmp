@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/contract.css') }}">
@endsection

@section('script')
    <script>
        const switchTab = document.querySelector('.table-switch');
        const swichButton = document.querySelectorAll('.btn-switch');
        for (let i = 0; i < swichButton.length; i++) {
            swichButton[i].addEventListener('click', () => {
                for (let j = 0; j < swichButton.length; j++) {
                    swichButton[j].classList.remove('btn-active');
                }
                swichButton[i].classList.add('btn-active');
                if (i == 0) {
                    switchTab.style.display = 'block';
                    switchTab.nextElementSibling.style.display = 'none';
                } else {
                    switchTab.style.display = 'none';
                    switchTab.nextElementSibling.style.display = 'block';
                }
            })
        }
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
        <button class="btn btn-active btn-switch">
            Hợp đồng uỷ quyền
        </button>
        <button class="btn btn-switch">
            Hợp đồng khai thác
        </button>
    </div>
    <div class="header-search">
        <form class="search-list">
            <div class="form-group">
                <label for="">
                    Quyền sở hữu
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
                    Hiệu lực hợp đồng
                </label>
                <select name="" id="">
                    <option value="">Tất cả</option>
                    <option value="">Pop</option>
                    <option value="">EDM</option>
                    <option value="">Ballad</option>
                </select>
            </div>
            <div class="action__page">
                <a href="{{ route('Manage.Contract.create') }}">
                    <i class="fa-solid fa-plus"></i>
                    <p>
                        Thêm hợp đồng
                    </p>
                </a>
            </div>
        </form>
        <div class="input-search">
            <input type="text" placeholder="Tìm kiếm">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
    </div>

    <div class="table table-switch table-active">
        <table>
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Số hợp đồng
                    </th>
                    <th>
                        Tên hợp đồng
                    </th>
                    <th>
                        Người ủy quyền
                    </th>
                    <th>
                        Quyền sở hữu
                    </th>
                    <th>
                        Hiệu lực hợp đồng
                    </th>
                    <th>
                        Ngày tạo
                    </th>
                    <th colspan="2">
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <th>
                            {{ $i + 1 }}
                        </th>
                        <td>
                            123456789
                        </td>
                        <td>
                            Hợp đồng 1
                        </td>
                        <td>
                            Nguyễn Văn A
                        </td>
                        <td>
                            Pop
                        </td>
                        <td>
                            12/12/2021
                        </td>
                        <td>
                            12/12/2021
                        </td>
                        <td class="table__action">
                            <a class="text-under" href="{{ route('Manage.Contract.show', 1) }}">
                                Xem chi tiết 
                            </a>
                        </td>
                        <td class="table__action open-modal-active">
                            Lý do hủy
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

    <div class="table table-switch">
        <table>
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Số hợp đồng
                    </th>
                    <th>
                        Khách hàng
                    </th>
                    <th>
                        Ngày tạo
                    </th>
                    <th>
                        Ngày hiệu lực
                    </th>
                    <th>
                        Ngày hết hạn
                    </th>
                    <th>
                        Hiệu lực hợp đồng
                    </th>
                    <th colspan="2">
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <th>
                            {{ $i + 1 }}
                        </th>
                        <td>
                            123456789
                        </td>
                        <td>
                            Nguyễn Văn A
                        </td>
                        <td>
                            12/12/2021
                        </td>
                        <td>
                            12/12/2021
                        </td>
                        <td>
                            12/12/2021
                        </td>
                        <td>
                            Còn hiệu lực
                        </td>
                        <td class="table__action">
                            <a class="text-under" href="{{ route('Manage.Contract.show', 1) }}">
                                Xem chi tiết 
                            </a>
                        </td>
                        <td class="table__action">
                            Sao chép hợp đồng
                        </td>
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

    <div class="modal-view-action">
        <div class="modal-content">
            <h2>
                Lý do hủy hợp đồng uỷ quyền HĐUQ 1234
            </h2>
            <textarea name="" readonly>Hủy hợp đồng để tạo hợp đồng mới với giá trị và thời hạn lâu hơn.</textarea>
            <div class="button-group">
                <button type="button" class="btn close-modal-active" >
                    Đóng
                </button>
            </div>
        </div>
    </div>
@endsection
