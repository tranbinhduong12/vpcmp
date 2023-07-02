@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/partner-manage.css') }}">
@endsection

@section('script')
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Danh sách đối tác ủy quyền
    </h1>

    <div class="header-search" style="align-items: flex-end;">
        <div class="input-search">
            <input type="text" placeholder="Tìm thiết bị theo tên, SKU, địa điểm, địa chỉ Mac">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
    </div>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>
                        STT
                    </th>
                    <th>
                        Họ tên
                    </th>
                    <th>
                        Tên đăng nhập
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Ngày hết hạn
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th>
                        Trạng thái
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td>
                            {{ $i + 1 }}
                        </td>
                        <td>
                            Nguyễn Văn A
                        </td>
                        <td>
                            nguyenvana
                        </td>
                        <td>
                            nguyenvana@gmail.com
                        </td>
                        <td>
                            20/10/2021
                        </td>
                        <td>
                            0123456789
                        </td>
                        <td style="display: flex">
                            <input type="checkbox" class="table__checkbox">
                            <div class="status__text">
                                Đang hoạt động
                            </div>
                        </td>
                        <td class="table__action">
                            <a class="text-under" href="{{ route('Manage.Partner.edit', 1) }}">
                               Cập nhập
                            </a>
                        </td>
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
