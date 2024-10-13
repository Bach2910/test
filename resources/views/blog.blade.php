@extends('layout.resources')
@section('main')
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner container pt-5 pb-5">
                @include('components.news_item', [
            'img' => 'https://vietquality.vn/wp-content/uploads/2019/03/lean.jpg',
            'button_title' => 'Tài liệu',
            'name' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
        ])
                @include('components.news_item', [
            'img' => 'https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1.jpg',
            'button_title' => 'Tài liệu',
            'name' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
        ])
                @include('components.news_item', [
            'img' => 'https://www.jobhopin.com/blog/wp-content/uploads/2021/12/phat-hien-ung-vien-noi-doi-1.png',
            'button_title' => 'Tài liệu',
            'name' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
        ])
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="card-main container">
        @include('components.blog_item', [
            'img' =>'https://www.testcenter.vn/blog/wp-content/uploads/2021/12/batchrecruitment-concept_23-2148615177-324x160.jpeg',
            'title' => 'Bài test DISC – Công cụ “sắc bén” của nhà tuyển dụng',
            'desc' => 'Bài test DISC và các bài test online khác đang trở thành một trong những công cụ giúp đánh giá ứng viên hiệu quả....'
        ])
        @include('components.blog_item', [
                'img' =>'https://lh3.googleusercontent.com/lQzpueKHpYlGTJiO_z-UdSZd8I6woA9EO-aMSDjnWF0emlIR5dlfKW4UrG5s56c6VaOfI7WXSnETe9Peh-mcbUwgM0sj17PtStHTufjq4aHV5emUMEsSmgRpxvdpu9QD19gPVol_',
               'title' => 'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
               'desc' => 'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...'
           ])
        @include('components.blog_item',[
                'img' =>'https://lh5.googleusercontent.com/YYNhx09h6mWMoyOy9L8i6ZrRCer0Lmi2uSWHWeXC29XQEu3IvEoEvthx7gDbynSaAe8xMmUKccekDHnVvxG_5plQsL_WKPRVFwa2SC8G3cukT5VwhYiX7yjSi3OFLxOtl5HBAhYO',
                'title' =>'Sơ đồ tổ chức doanh nghiệp là gì? – Cách tạo sơ đồ tổ chức nhanh chóng',
                'desc' =>'Testcenter - Đối với bất kỳ công ty hay doanh nghiệp, cơ cấu tổ chức doanh nghiệp đóng vai trò rất quan trọng. Nó...',
            ])
    </div>
    <div class="picture1 container-lg pt-5 pb-5">
        <img src="{{asset('image/product/logo2.png')}}" alt="">
    </div>
    <div class="container mt-5 mb-4 news">
        <div class="row">
            <div class="col-md-8" style="width: 66%;padding-right: 20px">
                <button type=button class=" btn btn-primary">Bài viết mới nhất</button>
                <hr class="line">
                <div
                    class="row g-0  overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                    <div class="col-md-6 me-4">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/micromanage-la-gi-testcenter-324x235.jpg"
                            class="img-fluid w-100 h-100 " alt="Micromanagement image">
                    </div>
                    <div class="col p-6 d-flex flex-column position-static">
                        <a target="_blank" class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 20%;">Tin tức</a>
                        <h5 class="mb-2"><a href="{{route('blogMicromanagement')}}">Micromanagement là gì? Dấu hiệu của Micromanagement</a></h5>
                        <p class="mb-2">
                            Hiểu rõ Micromanagement là gì sẽ giúp nhà quản lý biết cách áp dụng phương pháp này đúng
                            thời điểm...
                        </p>
                        <a href="{{route('blogMicromanagement')}}" type="button" class="btn btn-primary " style="width:30%;height: auto;font-size: 12px">Xem
                            thêm</a>
                    </div>
                </div>
                <div
                    class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                    <div class="col-md-6 me-4">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg"
                            class="img-fluid h-100 w-100 "
                            alt="Equity Theory image">
                    </div>
                    <div class="col p-6 d-flex flex-column position-static">
                        <a target="_blank" href="{{route('blogEquity')}}" class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 20%;">Tin tức</a>
                        <h5 class="mb-2"><a href="{{route('blogEquity')}}" >Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả...</a></h5>
                        <p class="mb-2">
                            Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng
                            với sự...
                        </p>
                        <a type="button" class="btn btn-primary " style="width:30%;height: auto;font-size: 12px">Xem
                            thêm</a>
                    </div>
                </div>
                <div
                    class="row g-0  overflow-hidden flex-md-row mb-4 h-md-100 position-relative">
                    <div class="col-md-6 me-4">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-324x235.jpg"
                            class="img-fluid w-100 h-100"
                            alt="Equity Theory image">
                    </div>
                    <div class="col p-6 d-flex flex-column position-static">
                        <a target="_blank" href="{{route('blogEquity')}}" class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 20%;">Tin tức</a>
                        <h5 class="mb-2"><a href="{{route('blogEquity')}}">Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả...</a></h5>
                        <p class="mb-2">
                            Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng
                            với sự...
                        </p>
                        <a type="button" class="btn btn-primary " style="width:30%;height: auto;font-size: 12px">Xem
                            thêm</a>
                    </div>
                </div>
                <div
                    class="row g-0  overflow-hidden flex-md-row mb-4 h-md-100 position-relative">
                    <div class="col-md-6 me-4">
                        <img
                            src="https://www.testcenter.vn/blog/wp-content/uploads/2024/03/tuyen-mass-la-gi-testcenter-324x235.jpg"
                            class="img-fluid w-100 h-100"
                            alt="Equity Theory image">
                    </div>
                    <div class="col p-6 d-flex flex-column position-static">
                        <a target="_blank" href="{{route('blogLean')}}" class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 20%;">Tin tức</a>
                        <h5 class="mb-2"><a href="{{route('blogLean')}}">Tuyển Mass là gì? Nguyên tắc vàng để tuyển mass hiệu quả...</a></h5>
                        <p class="mb-2">
                            Nắm rõ quy trình tuyển Mass có thể góp phần giúp doanh nghiệp gia tăng lượng ứng viên và tối
                            ưu tỷ lệ giữ chân nhân sự lâu dài. Trong chuyên mục tin tức...
                        </p>
                        <a type="button" class="btn btn-primary " style="width:30%;height: auto;font-size: 12px">Xem
                            thêm</a>
                    </div>
                </div>
            </div>
            <div class="col-4" style="width: 34%;padding-left: 20px">
                <div class="card-image">
                    <img class="card-img-top w-100" src="{{asset('image/product/logo3.png')}}" alt="Advertisement">
                </div>
                <div class="col-md-11 mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Đăng ký nhận bảng tin</h5>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ tên</label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập họ tên">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email">
                            </div>
                            <button type="submit" class="text-button" style="color:white;background-color: #1b1e21">Đăng
                                ký
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-11">
                    <button type=button class=" btn btn-primary">Bài viết mới nhất</button>
                    <hr class="line">
                    <div
                        class="row g-0  overflow-hidden flex-md-row mb-4 h-md-250 position-relative h-100">
                        <div class="col-md-4 me-4">
                            <img
                                src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/micromanage-la-gi-testcenter-324x235.jpg"
                                class="img-fluid w-100 h-100 " alt="Micromanagement image">
                        </div>
                        <div class="col p-6 d-flex flex-column position-static">
                            <a href="{{route('blogMicromanagement')}}" class="d-inline-block mb-2 text-white btn btn-dark" style="font-size: 10px;width: 30%">Tin
                                tức</a>
                            <h6 class="mb-2"> <a href="{{route('blogMicromanagement')}}">Micromanagement là gì? Dấu hiệu của Micromanagement</a></h6>
                            <a class="btn btn-primary w-4">Xem thêm</a>
                        </div>
                    </div>
                    <div
                        class=" row g-0 overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                        <div class="col-md-4 me-4">
                            <img
                                src="https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg"
                                class="img-fluid h-100 w-100 "
                                alt="Equity Theory image">
                        </div>
                        <div class="col p-6 d-flex flex-column position-static">
                            <a href="{{route('blogEquity')}}" class="d-inline-block mb-2 text-white btn btn-dark" style="font-size: 10px;width: 30%">Tin
                                tức</a>
                            <h6 class="mb-2"><a href="{{route('blogEquity')}}">Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả...</a></h6>
                            <a class="btn btn-primary w-4">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container mt-5 mb-4 news">
        <div class="row">
            <div class="col-md-8 card-list-exam" style="width: 66%;padding-right: 20px">
                <button type=button class=" btn btn-primary">Mẫu đề</button>
                <hr class="line">
                @for($i=0;$i<=10;$i++)
                    <div class="hidden-div-exam">
                        <div
                            class="row g-0 overflow-hidden flex-md-row mb-4  h-md-250 position-relative">
                            <div class="col-md-6 me-4">
                                <img
                                    src="https://www.testcenter.vn/blog/wp-content/uploads/2023/05/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg"
                                    class="img-fluid w-100 h-100 " alt="Micromanagement image">
                            </div>
                            <div class="col p-6 d-flex flex-column position-static">
                                <a target="_blank" href="{{route('blogEquity')}}" class="d-inline-block mb-2 text-white btn btn-dark"
                                   style="font-size: 6px;width: 27%">Mẫu
                                    đề Test Online</a>
                                <h5 class="mb-2 entry-title"><a href="{{route('blogEquity')}}">IQ và EQ cái nào quan trọng hơn? Chọn yếu tố gì trong tuyển...</a></h5>
                                <p class="mb-2">
                                    IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển dụng nhân sự.
                                    Tuy
                                    vậy, rất nhiều nhà tuyển dụng vẫn phân vân không biết IQ và EQ cái...
                                </p>
                                <a type="button" class="btn btn-primary "
                                   style="width:30%;height: auto;font-size: 12px">Xem
                                    thêm</a>
                            </div>
                        </div>
                    </div>
                @endfor
                <button id="viewMoreBtnExam">Xem thêm</button>
            </div>
            <div class="col-4" style="width: 34%;padding-left: 20px">
                <div class="col-md-11 card-list">
                    <button type="button" class="btn btn-primary">Tài liệu</button>
                    <hr class="line">
                    @for($i=0;$i<=10;$i++)
                        <div class="hidden-div">
                            <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative h-100">
                                <div class="col-md-4 me-4">
                                    <img
                                        src="https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-280x280.jpg"
                                        class="img-fluid w-100 h-100" alt="Micromanagement image">
                                </div>
                                <div class="col p-6 d-flex flex-column position-static">
                                    <a href="{{route('blogEquity')}}" class="d-inline-block mb-2 text-white btn btn-dark"
                                       style="font-size: 10px;width: 30%">Tài liệu</a>
                                    <h6 class="mb-2"><a href="{{route('blogEquity')}}">Reference check là gì? 4 điểm cần lưu ý khi kiểm tra tham
                                        chiếu</a></h6>
                                    <a class="btn btn-primary w-4">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <button id="viewMoreBtn">Xem thêm</button>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let viewMoreBtn = document.getElementById("viewMoreBtn");
                let cards = document.querySelectorAll(".card-list .hidden-div");
                let cardsToShow = 1; // Số lượng card muốn hiển thị ban đầu

                // Hiển thị số lượng card ban đầu
                for (let i = 0; i < cardsToShow; i++) {
                    if (cards[i]) cards[i].classList.add('show');
                }

                viewMoreBtn.addEventListener("click", function () {
                    let hiddenCards = document.querySelectorAll(".card-list .hidden-div:not(.show)");

                    for (let i = 0; i < cardsToShow; i++) {
                        if (hiddenCards[i]) hiddenCards[i].classList.add('show');
                    }

                    // Ẩn nút "Xem thêm" nếu tất cả card đã được hiển thị
                    if (hiddenCards.length <= cardsToShow) {
                        viewMoreBtn.style.display = 'none';
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let viewMoreBtn = document.getElementById("viewMoreBtnExam");
                let cards = document.querySelectorAll(".card-list-exam .hidden-div-exam");
                let cardsToShow = 1; // Số lượng card muốn hiển thị ban đầu

                // Hiển thị số lượng card ban đầu
                for (let i = 0; i < cardsToShow; i++) {
                    if (cards[i]) cards[i].classList.add('show');
                }

                viewMoreBtn.addEventListener("click", function () {
                    let hiddenCards = document.querySelectorAll(".card-list-exam .hidden-div-exam:not(.show)");

                    for (let i = 0; i < cardsToShow; i++) {
                        if (hiddenCards[i]) hiddenCards[i].classList.add('show');
                    }

                    // Ẩn nút "Xem thêm" nếu tất cả card đã được hiển thị
                    if (hiddenCards.length <= cardsToShow) {
                        viewMoreBtn.style.display = 'none';
                    }
                });
            });
        </script>
        <div class="picture1">
            <img src="{{asset('image/product/product2.png')}}" alt="">
        </div>
        <div class="news container-lg">
            <button type=button class=" btn btn-primary">Bài viết mới nhất</button>
            <hr class="line">
            <div class="card-main">
                @for($i=0;$i<=3;$i++)
                    <div class="card-body">
                        <img src="{{asset('image/card/1.png')}}" alt="page">
                        <h5 class="card-title">Theo dõi tiến độ công việc bằng Excel có lợi ích gì?</h5>
                        <p class="card-text">Hẳn bạn đã biết theo dõi tiến độ công việc bằng Excel là việc ghi lại toàn
                            bộ quá
                            trình thực hiện công việc...</p>
                    </div>
                @endfor
        </div>
    </div>
@endsection
