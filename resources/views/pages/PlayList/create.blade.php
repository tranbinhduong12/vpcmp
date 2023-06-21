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
        // click .btn-active-form to submit form
        $('.btn-active-form').click(function() {
            $('#information').submit();
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
            <a href="{{ route('PlayList.edit2', 1) }}">
                <i class="fa-solid fa-plus"></i>
                <p>
                    Thêm <br>
                    bản ghi
                </p>
            </a>
        </div>
        <form class="infomation" id="information">
            <img src="{{ asset('upload/logo2.png') }}" alt="">
            <div class="form-group form-group__info">
                <label for="">
                    Tiêu đề:  <span class="text-danger">*</span>
                </label>
                <input class="input" type="text" name="" required value="Top Ca khúc 2021">
            </div>
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
            <div class="form-group form-group__info">
                <label for="">
                    Mô tả
                </label>
                <textarea class="input" name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua.</textarea>
            </div>
            <div class="form-group form-group__info">
                <label for="">
                    Chủ đề
                </label>
                <textarea class="input" name="" id="" cols="30" rows="10">

                </textarea>
            </div>
            <div class="option-active">
                <div class="option">
                    <input type="checkbox" id="hienthi">
                    <label for="hienthi">Chế độ công </label>
                </div>
                <p>
                    <span class="text-danger">*</span>
                    là những trường thông tin bắt buộc
                </p>
            </div>
        </form>
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
    <div class="button-group">
        <a href="{{ Route('PlayList.index') }}">
            <button type="button" class="btn btn-outline" >
                Hủy
            </button>
        </a>
        <button class="btn btn-active-form">
            Lưu
        </button>
    </div>
@endsection