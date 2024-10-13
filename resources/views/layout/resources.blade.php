<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('scss/interface.css')}}">
    <link rel="stylesheet" href="{{asset('scss/resources.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-resources">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-right">
                <li class="nav-item me-3">
                    <a class="nav-link container" aria-current="page" href="#">
                        <img src="{{ asset('image/logo/home.png') }}" alt="Trang chủ"
                             style="height: 40px; width: auto; margin-right: 8px;">
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center navbar-nav-right">
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{route('index')}}"><span class="highlight">Trang chủ</span></a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/blog/nhan-su/">Nhân sự</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="/blog/mau-de-test/">Mẫu đề Test Online</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog/tai-lieu/">Tài liệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog/tin-tuc/">Tin tức</a>
                </li>
            </ul>
            <form class="search-container">
                <span class="search-icon" onclick="toggleSearch()"><i class="fa-solid fa-magnifying-glass"></i></span>
                <div class="search-box" id="searchBox">
                    <input type="text" class="search-input" id="searchInput" placeholder="Tìm kiếm">
                    <button class="search-button" id="searchButton" onclick="performSearch()">Tìm Kiếm</button>
                </div>
            </form>
            <script>
                function toggleSearch() {
                    const searchBox = document.getElementById('searchBox');
                    const isHidden = searchBox.style.display === 'none' || searchBox.style.display === '';

                    if (isHidden) {
                        searchBox.style.display = 'block';
                        setTimeout(() => {
                            searchBox.classList.add('show');
                        });
                    } else {
                        searchBox.classList.remove('show');
                        setTimeout(() => {
                            searchBox.style.display = 'none';
                        });
                    }
                }

                function performSearch() {
                    const query = document.getElementById('searchInput').value;
                    alert('Searching for: ' + query);
                }
            </script>

        </div>
    </div>
</nav>
<div class="container p-5">
    @yield('main')
</div>
<div class="footer-resources container p-5">
    <div class="logo">
        <img src="{{asset('image/logo/logo2.png')}}" alt="Logo">
    </div>
    <div class="about-us-footer">
        <h5><b>Về chúng tôi</b></h5>
        <br>
        <p>Nền tảng công nghệ tạo bài test và tổ chức kỳ thi online dành riêng cho doanh nghiệp Việt Nam trong đánh
            giá
            năng lực nhân sự toàn diện, giúp tiết kiệm tối đa chi phí và nguồn lực so với các phương pháp truyền
            thống.</p>
        <p><b>Hotline:</b> 0967-778-018</p>
        <p><b>Địa chỉ:</b> Tầng 3, Tòa nhà Goldseason, 47 Nguyễn Tuân, Thanh Xuân, Hà Nội</p>
        <br>
        <p>Liên hệ chúng tôi: soncd@testcenter.vn</p>
    </div>
    <div class="watch-us">
        <h5><b>Theo dõi chúng tôi</b></h5>
        <div class="button">
            <button type="button" class="btn btn-info"><i class="fa-brands fa-facebook"></i></button>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></button>
            <button type="button" class="btn btn-info"><i class="fa-solid fa-envelope"></i></button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</html>
