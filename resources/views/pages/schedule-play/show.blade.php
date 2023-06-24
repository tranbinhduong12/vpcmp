@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/schedule-play.css') }}">
@endsection

@section('script')
    <script>
        active_navbar_mini();
    </script>
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Lịch phát số 1
    </h1>

    <div class="header-search">
        <div class="action__page">
            <a href="{{ route('SchedulePlay.edit', 1) }}">
                <i class="fa-regular fa-pen-to-square"></i>
                <p>
                    Chỉnh sửa lịch phát
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
                        Tên Playlist
                    </th>
                    <th>
                        Bắt đầu - Kết thúc
                    </th>
                    <th>
                        Chu kỳ phát
                    </th>
                    <th>
                        Thiết bị
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
                            Playlist {{ $i + 1 }}
                        </td>
                        <td>
                            12:00 - 13:00
                        </td>
                        <td>
                            Thứ 2 | Thứ 3
                        </td>
                        <td>
                            Thiết bị 1 | Thiết bị 2 | Thiết bị 3
                        </td>
                    </tr>
                @endfor
        </table>
    </div>
@endsection
