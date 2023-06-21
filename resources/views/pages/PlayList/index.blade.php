@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/play-list.css') }}">
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Playlist
    </h1>

    <div class="header-search">
        <div class="input-search">
            <input type="text" placeholder="Tên chủ đề người tạo...">
            <i class="fa-solid fa-search input-search__icon"></i>
        </div>
        <div class="choose-option">
            <i class="fa-solid fa-list-ul"></i>
            <a href="">
                <i class="fa-solid fa-table-cells-large"></i>
            </a>
        </div>
        <div class="action__page">
            <a href="{{ route('PlayList.create') }}">
                <i class="fa-solid fa-plus"></i>
                <p>
                    Thêm<br>
                    Playlist
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
                        Tiêu đề
                    </th>
                    <th>
                        Số bản ghi
                    </th>
                    <th>
                        Thời lượng
                    </th>
                    <th>
                        Chủ đề
                    </th>
                    <th>
                        Ngày tạo
                    </th>
                    <th>
                        Người tạo
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
                            12
                        </td>
                        <td>
                            00:00:00
                        </td>
                        <td>
                            <span class="topic">
                                topic
                            </span>
                            <span class="topic">
                                topic
                            </span>
                            <span class="topic">
                                topic
                            </span>
                            <span class="topic">
                                topic
                            </span>
                        </td>
                        <td>
                            01/01/2021
                        </td>
                        <td>
                            Người tạo {{ $i + 1 }}
                        </td>
                        <td class="table__action">
                            <a href="{{ route('PlayList.show', $i) }}">
                                Chi tiết
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