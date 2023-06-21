@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/play-list.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();
        function active__video(){
            $('.modal-view').css('display', 'flex');
        }
        $('.close').click(function() {
                $('.modal-view').css('display', 'none');
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
    {{-- @include('components.paging') --}}
    <h1>
        Playlist top ca khúc 2021
    </h1>
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
    <div class="group-flex">
        <div class="action__page">
            <a href="{{ route('PlayList.edit', 1) }}">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>
                    Chỉnh sửa
                </p>
            </a>
            <div style="margin-top: 20px" class="open-modal-active">
                <i class="fa-solid fa-trash-can" style="color: #FF4747"></i>
                <p>
                    Xóa playlist
                </p>
            </div>
        </div>
        <div class="infomation">
            <img src="{{ asset('upload/logo2.png') }}" alt="">
            <h2>
                Top ca khúc 2021
            </h2>
            <table>
                <tr>
                    <th class="title-table">
                        Người tạo:
                    </th>
                    <th>
                        Super Admin
                    </th>
                </tr>
                <tr>
                    <th class="title-table">
                        Tổng số:
                    </th>
                    <th>
                        8 bản ghi
                    </th>
                </tr>
                <tr>
                    <th class="title-table">
                        Tổng thời lượng:
                    </th>
                    <th>
                        01:31:16
                    </th>
                </tr>
            </table>
            <div class="content-information">
                Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed
                do eiusmod tempor incididunt labore et dolore magna aliqua.
            </div>
            <div class="list-topic">
                @for ($i = 0; $i < 6; $i++)
                <div class="topic-music">
                    <i class="fa-solid fa-circle"></i>
                    chu de 1
                </div>
                @endfor
            </div>
            <div class="option-active">
                <div class="option">
                    <i class="fa-solid fa-earth-asia"></i>
                    Hiển thị ở chế độ công 
                </div>
                <div class="option option__active">
                    <i class="fa-solid fa-shuffle"></i>
                    Phát ngẫu nhiên
                </div>
                <div class="option">
                    <i class="fa-solid fa-repeat"></i>
                    Lặp lại
                </div>
            </div>
        </div>
        <div class="table table-group">
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
                            Ca sĩ
                        </th>
                        <th>
                            Tác giả
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
                                Bản ghi {{ $i + 1 }}
                            </td>
                            <td>
                                Ca sĩ {{ $i + 1 }}
                            </td>
                            <td>
                                Tác giả {{ $i + 1 }}
                            </td>
                            <td class="table__action" onclick="active__video()">
                                Nghe
                            </td>
                            <td class="table__action">
                                <a href="">
                                    Gỡ
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
    </div>
@endsection