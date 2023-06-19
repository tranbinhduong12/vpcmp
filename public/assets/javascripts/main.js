function active_navbar_mini(){
    const icon_right_navbar = document.querySelector('.icon-right-navbar');
    const main_navbar = document.querySelector('.navbar');
    const navbar_hidden = document.querySelector('.navbar-hidden');

    main_navbar.classList.add('enactive-navbar');
    navbar_hidden.style.display = 'flex';

    // chiều rộng của body là 100% - 40px
    document.body.style.width = 'calc(100% - 40px)';

    icon_right_navbar.addEventListener('click', () => {
        main_navbar.classList.toggle('active-navbar');
    });

    // click vào màn hình ngoại trừ navbar thì navbar sẽ ẩn đi
    document.addEventListener('click', (e) => {
        if (!main_navbar.contains(e.target) && !icon_right_navbar.contains(e.target)) {
            main_navbar.classList.remove('active-navbar');
        }
    });
}

// active_navbar_mini();

