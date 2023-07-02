<a href="">
    <div class="header">
        <div class="language">
            <select name="" id="">
                <option value="">
                    Tiếng Việt
                    <div class="language-image"
                        style="background-image: url({{ asset('assets/images/language/english.jpg') }})"></div>
                </option>
                <option value="">
                    English
                    <div class="language-image"
                        style="background-image: url({{ asset('assets/images/language/english.jpg') }})"></div>
                </option>
            </select>
        </div>
        <a href="{{ route('my-account') }}">
            <div class="profile-user">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
                <div class="profile-user-name">
                    <span class="name">Trần Bình Dương</span>
                    <br>
                    <span class="role">Admin</span>
                </div>
            </div>
        </a>
    </div>
</a>
