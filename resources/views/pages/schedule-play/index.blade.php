@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/schedule-play.css') }}">
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Danh sách lịch phát
    </h1>

    <div class="header-search">
        <div class="input-search">
            <input type="text" placeholder="Tên chủ đề người tạo...">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
        <div class="action__page">
            <a href="{{ route('SchedulePlay.create') }}">
                <i class="fa-solid fa-list-check"></i>
                <p>
                    Thêm lịch phát
                </p>
            </a>
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
                        Tên lịch
                    </th>
                    <th>
                        Thời gian phát
                    </th>
                    <th colspan="2">
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
                            <a href="{{ route('SchedulePlay.edit', 1) }}">
                                Lịch phát {{ $i + 1 }}
                            </a>
                        </td>
                        <td>
                            12:00 - 13:00
                        </td>
                        <td class="table__action">
                            <a class="text-under" href="{{ route('SchedulePlay.show', 1) }}">
                                Xem chi tiết 
                            </a>
                        </td>
                        <td class="table__action">
                            <a class="text-danger text-under" href="{{ route('SchedulePlay.edit', 1) }}">
                                Xóa
                            </a>
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
@endsection