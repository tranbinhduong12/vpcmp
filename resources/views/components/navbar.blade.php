<div class="navbar-hidden">
    {{-- icon right --}}
    <i class="fa-solid fa-chevron-right icon-right-navbar"></i>
</div>

<div class="navbar">
    <div class="navbar__logo">
        <a href="">
            <img src="{{ asset('logo/logo.png') }}" alt="logo" class="navbar__logo__img">
        </a>
    </div>
    <div class="navbar__menu">
        <ul class="navbar__menu__list">
            <a href="{{ route('RecordStore.index') }}" class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item{{ request()->routeIs('RecordStore.*') ? ' active' : '' }}">
                    <i class="fa-solid fa-shop"></i>
                    Kho bản ghi
                </li>
            </a>
            <a href="{{ route('PlayList.index') }}" class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item{{ request()->routeIs('PlayList.*') ? ' active' : '' }}">
                    <i class="fa-solid fa-list-check"></i>
                    PlayList
                </li>
            </a>
            <a href="" class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item">
                    <i class="fa-regular fa-calendar-days"></i>
                    Lập lịch phát
                </li>
            </a>
            <div class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item">
                    <i class="fa-regular fa-file-lines"></i>
                    Quản lý
                    <i class="fa-solid fa-ellipsis-vertical dot-list"></i>
                    <ul class="sub_navbar">
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    Doanh thu
                    <i class="fa-solid fa-ellipsis-vertical dot-list"></i>
                    <ul class="sub_navbar">
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item">
                    <i class="fa-solid fa-gear"></i>
                    Cài đặt
                    <i class="fa-solid fa-ellipsis-vertical dot-list"></i>
                    <ul class="sub_navbar">
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
            <div class="navbar__menu__list__item__link">
                <li class="navbar__menu__list__item">
                    <i class="fa-solid fa-question"></i>
                    Hỗ trợ
                    <i class="fa-solid fa-ellipsis-vertical dot-list"></i>
                    <ul class="sub_navbar">
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                        <a href="" class="navbar__menu__list__item__link">
                            <li class="sub_navbar__menu__list__item">
                                Lập lịch phát
                            </li>
                        </a>
                    </ul>
                </li>
            </div>
        </ul>
    </div>
</div>

