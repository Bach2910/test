@extends('layout.home')
@section('main')
    <div class="container product-section">
        <div class="mb-4 product-section-intro">
            <div class="row">
                <div class="col-md-5 product-section-intro-left p-0 pt-3">
                    <h1><span>Tiêu chuẩn đánh giá</span><br><span
                            class="highlight p-0">năng lực nhân sự</span><br><span>cho doanh nghiệp</span></h1>
                    <div class="mt-4">
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Hơn 300 đề thi tuyển dụng nhân sự mẫu
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Tạo bài test online nhanh chóng chỉ
                            trong 5 phút
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Công cụ quản lý năng lực ứng viên
                            thông minh
                        </p>
                        <p>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Đánh giá năng lực làm việc của nhân
                            viên trực quan
                        </p>
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-primary btn-register " href="{{route('SignIn')}}">Đăng ký miễn phí</a>
                        <a class="btn btn-link font-weight-500 primary-color" href="{{route('blog')}}">Tìm hiểu thêm</a>
                    </div>
                </div>
                <div class="col-md-7 product-section-intro-right">
                    <img src="https://www.testcenter.vn/images/products/introduction/group_8710.png" alt>
                </div>
            </div>
        </div>
        <div class="mt-4 mb-4 pt-4 product-section-problem">
            <p class="product-section-title mt-4">
                Problem
            </p>
            <div class="row">
                <h5 class="font-weight-500 p-4 mobile-show pc-hidden text-center">Doanh nghiệp bạn có đang gặp phải vấn
                    đề này?</h5>
                <div class="col-md-5 align-items-center d-flex p-0 product-section-problem-left">
                    <img src="https://www.testcenter.vn/images/products/problem/group_8676.png" class="img-fluid"
                         alt=""/>
                </div>
                <div class="col-md-7 pl-5 product-section-problem-right">
                    <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Doanh nghiệp bạn có đang gặp phải vấn đề
                        này?</h4>
                    <ul class="pl-3">
                        <li>
                            <p>Khó khăn trong tìm kiếm ứng viên phù hợp</p>
                            <p class="text-normal">70% nhà tuyển dụng có hơn 2 lần tuyển ứng viên không phù hợp</p>
                        </li>
                        <li>
                            <p>Chi phí tuyển dụng nhân sự lớn</p>
                            <p class="text-normal">Ngân sách cho tuyển dụng ứng viên tiềm năng lên tới hàng trăm
                                triệu/năm</p>
                        </li>
                        <li>
                            <p>Chưa đánh giá đúng năng lực ứng viên </p>
                            <p class="text-normal">Khó khăn trong đánh giá năng lực nhân sự trên nhiều khía cạnh khác
                                nhau.</p>
                        </li>
                        <li>
                            <p>Đào tạo nhân viên chưa đúng mục đích</p>
                            <p class="text-normal">Khó khăn trong đào tạo nhân viên vì không nắm rõ điểm mạnh và điểm
                                yếu của từng cá nhân</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section product-container-fluid product-section-function" style="overflow: hidden;">
        <p class="product-section-title mb-4 mt-4">
            Function
        </p>
        <h5 class="font-weight-500 mb-4 mobile-show pc-hidden text-center">Các tính năng nổi bật của TestCenter.vn</h5>
        <div class="row">
            <p class="mobile-show pc-hidden text-center">Testcenter.vn là nền tảng số cung cấp giải pháp test online
                đánh giá năng lực nhân sự toàn diện</p>
            <div class="col-md-5 col-12">
                <img alt="Công cụ test online" src="https://www.testcenter.vn/images/products/group-1.png"
                     class="product-feature-image mobile-hidden pc-show"/>
                <div class="d-flex justify-content-center mobile-show pc-hidden text-center-mobile">
                    <img class="img-fluid" alt="Công cụ test online" src="images/products/image-function-mobile.png"/>
                </div>
            </div>
            <div class="col-md-7 product-section-function-right">
                <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Các tính năng nổi bật của TestCenter.vn</h4>
                <p class="mobile-hidden pc-show">Testcenter.vn là nền tảng số cung cấp giải pháp test online đánh giá
                    năng lực nhân sự toàn diện</p>
                @for($i=0;$i<4;$i++)
                    <div class="product-section-function-right-box col-12 col-md-10 p-2 mb-4">
                        <div class="row pt-3">
                            <div class="col-md-1 col-2 d-flex align-items-start mt-2 ml-3 p-0 pl-2">
                                <img src="https://www.testcenter.vn/images/products/icon-question.png"
                                     class="img-fluid"/>
                            </div>
                            <div class="col-md-9 col-9">
                                <p class="product-section-function-right-box-title">Đa dạng hình thức câu hỏi</p>
                                <p>
                                    Cung cấp nhiều loại câu hỏi khác nhau như Trắc nghiệm online, Tự luận,
                                    Đúng/Sai, Matching, SQL, Coding,...
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="d-flex justify-content-start ">
                    <a class="btn btn-primary btn-register" href="https://app.testcenter.vn/register/?source=web">Đăng
                        ký miễn phí</a>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section container product-section-advantage">
        <p class="product-section-title mb-2 mt-4">Advantage</p>
        <div class="mb-4 text-center pl-4 pr-4">
            <h4 class="font-weight-bold mb-2 mobile-hidden pc-show">Ưu điểm vượt trội của TestCenter.vn</h4>
            <p>Số hóa quy trình đánh giá năng lực nhân viên của Doanh nghiệp Việt Nam</p>
        </div>
        <div class="row product-section-advantage-box"
             style="padding-right:0px !important;background: linear-gradient(180deg, #F3F9FF 0%, #EDEEFB 100%);">
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Giải pháp test online với hình thức câu hỏi đa dạng
                    </p>
                    <div class="feature-item-des mt-2 mb-4">
                        Chỉ với 5 phút để có thể xây dựng một bộ đề thi theo ý muốn với đa dạng hình thức câu hỏi. Hãy
                        để Testcenter.vn đồng hành cùng bạn!
                    </div>
                    @for($i=0;$i<4;$i++)
                        <div class="d-flex">
                            <img src="https://www.testcenter.vn/images/products/check.png" class="arrow-icon"/>
                            <div>
                                <p class="font-weight-bold mb-1">
                                    Ngân hàng đề với 300+ đề thi mẫu
                                </p>
                                <p class="item-content-value">
                                    Đa dạng các test trắc nghiệm MBTI, DISC, EQ, IQ, đề thi TOEIC,...
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-6 pt-4 mobile-hidden pc-show" style="padding-right: 0;">
                <img alt="Giải pháp test online" src="https://www.testcenter.vn/images/products/group-2.png"
                     style="width: 100%;"/>
            </div>
        </div>

        <div class="row mt-4 product-section-advantage-box"
             style="background: linear-gradient(180deg, #F3F9FF 0%, #EDFBF3 100%);">
            <div class="col-md-6 mobile-hidden pc-show">
                <img alt="Số hóa quy trình đánh giá nhân sự" src="https://www.testcenter.vn/images/products/group-3.png"
                     style="width: 100%;"/>
            </div>
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Số hóa quy trình đánh giá nhân sự
                    </p>
                    <div class="feature-item-des mt-2">
                        Đánh giá năng lực nhân sự toàn diện đòi hỏi rất nhiều nguồn lực của tổ chức. Hãy để Testcenter
                        giảm bớt gánh nặng cho doanh nghiệp Việt Nam!
                    </div>
                </div>
                @for($i=0;$i<4;$i++)
                    <div class="d-flex my-4">
                        <img src="https://www.testcenter.vn/images/products/check.png" class="arrow-icon"/>
                        <div>
                            <p class="mb-1 font-weight-bold">
                                Chủ động upload và tạo ra kho đề thi riêng
                            </p>
                            <p class="item-content-value">
                                Xây dựng bài test online dành riêng cho mô hình doanh nghiệp
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="row mt-4 product-section-advantage-box"
             style="background: linear-gradient(180deg, #FFF9F3 0%, #E8EEFF 100%);">
            <div class="col-md-6 p-4">
                <div class="mb-4 text-center-mobile">
                    <p class="primary-color product-section-advantage-title">
                        Thống kê kết quả trực quan
                    </p>
                    <div class="feature-item-des mt-2">
                        Với sự trợ giúp đắc lực của Testcenter, việc đánh giá kết quả sau đợt thi trở nên vô cùng
                        đơn giản
                    </div>
                </div>
                @for($i=0;$i<4;$i++)
                    <div class="d-flex my-4">
                        <img src="https://www.testcenter.vn/images/products/check.png" class="arrow-icon"/>
                        <div>
                            <p class="mb-1 font-weight-bold">
                                Kết quả được biểu thị dưới dạng biểu đồ
                            </p>
                            <p class="item-content-value">
                                Biểu đồ cột, biểu đồ tròn, phần trăm,…
                            </p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-md-6 mobile-hidden pc-show" style="padding-right: 0;">
                <img alt="Thống kê kết quả trực quan" src="https://www.testcenter.vn/images/products/group-4.png"
                     style="width: 100%;"/>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a class="btn btn-primary btn-register" href="{{route('SignIn')}}">Đăng ký miễn phí</a>
        </div>
    </div>
    <div class="product-section product-section-price mt-4 mb-md-4 pb-4 pt-2" id="price">
        <div class="container">
            <p class="product-section-title mt-4">
                Pricing
            </p>
            <h3 class="font-weight-bold text-center mb-4 mobile-hidden pc-show">
                Bảng giá dịch vụ TestCenter.vn
            </h3>
            <h4 class="font-weight-500 text-center mobile-show pc-hidden">
                Bảng giá dịch vụ TestCenter.vn
            </h4>
            <div class="row">
                <div class="col-md-3 col-12 product-section-price-box product-section-price-box-primary">
                    <div class="product-section-price-box-header">
                        <img src="https://www.testcenter.vn/images/products/diamond-1.png">
                        <p class="text-uppercase mt-2 font-weight-500">Free</p>
                        <h3 class="font-weight-bold">Miễn phí</h3>
                        <p>Sử dụng trọn đời</p>
                    </div>
                    <hr>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Mở khóa toàn bộ tính năng Premium
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tạo đề thi online dễ dàng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tổ chức nhiều đợt thi cùng lúc
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 300+ bộ đề mẫu đa dạng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 20 lượt test mỗi tháng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Thống kê kết quả chi tiết trực quan
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Hỗ trợ trong giờ hành chính 24/7
                    </p>
                    <a href="{{route('SignIn')}}" class="btn btn-register btn-light">Đăng ký miễn phí</a>
                </div>
                @for($i=0;$i<4;$i++)
                <div class="col-md-2 col-12 product-section-price-box">
                    <div class="product-section-price-box-header">
                        <img src="https://www.testcenter.vn/images/products/diamond-2.png">
                        <p class="text-uppercase mt-2 font-weight-500 price-color">Starter</p>
                        <h3 class="font-weight-bold price-color">3.000.000</h3>
                        <p class="price-color">VND/năm</p>
                    </div>
                    <hr>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Mở khoá toàn bộ tính năng sản phẩm
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Miễn phí cập nhật tính năng mới
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tổ chức nhiều đợt thi cùng lúc
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 300+ bộ đề mẫu đa dạng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 100 lượt test mỗi tháng
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Tối đa 1 tài khoản quản lý
                    </p>
                    <p class="d-flex">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> 200 người test cùng lúc
                    </p>

                    <p class="d-flex pb-5">
                        <i class="fa fa-check-circle info-color pt-1 pr-1" aria-hidden="true"></i> Hỗ trợ trong giờ hành chính 24/7
                    </p>
                    <a href="{{route('SignIn')}}" class="btn btn-register btn-secondary">Trải nghiệm ngay</a>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="container product-section">
        <div class="mt-4 pb-0">
            <div class="product-section-benefit">
                <p class="product-section-title mb-4 mt-md-4 text-left text-center-mobile">
                    Benefit
                </p>
                <div class="row">
                    <div class="col-md-7 col-12 product-section-problem-right">
                        <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">Những lợi ích khi doanh nghiệp sử dụng TestCenter.vn</h4>
                        <h5 class=" text-center font-weight-500 mb-4 mobile-show pc-hidden text-center-mobile">Những lợi ích khi doanh nghiệp sử dụng TestCenter.vn</h5>
                        @for($i=0;$i<2;$i++)
                        <div class="row">
                            <div class="col-md-2 col-2 d-flex align-items-start mt-2 ml-3 p-md-0 pl-2">
                                <img src="https://www.testcenter.vn/images/products/line-chart-icon.png" class="img-fluid" />
                            </div>
                            <div class="col-md-9 col-9 p-md-0">
                                <p class="product-section-benefit-list-title">Nâng tầm thương hiệu tuyển dụng</p>
                                <p>
                                    Chỉ thêm vài bước nhỏ trong quá trình tuyển dụng, ứng viên có thể thấy được
                                    sự chuyên nghiệp và chỉn chu trong từng hoạt động của doanh nghiệp.
                                </p>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <div class="col-md-5 align-items-center d-flex p-0 product-section-problem-left mobile-hidden pc-show">
                        <img src="https://www.testcenter.vn/images/products/benefit.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-section product-section-operate pt-4">
        <div class="container">
            <p class="product-section-title mb-4 text-left text-center-mobile">
                Operate
            </p>
            <h4 class="font-weight-bold mb-4 mobile-hidden pc-show">TestCenter.vn vận hành như thế nào?</h4>
            <h5 class="font-weight-500 mb-4 text-center-mobile mobile-show pc-hidden">TestCenter.vn vận hành như thế nào?</h5>
            <div class="step-wrapper-mobile mobile-show pc-hidden d-flex">
                <div>
                    <div class="row">
                        <div class="col-md-1 col-2 d-flex align-items-start ml-3 p-0 pl-2">
                            <div class="vertical-line">
                            </div>
                            <div class="step-number step-number-1 text-white font-weight-500 d-flex justify-content-center align-items-center">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="col-md-9 col-9">
                            <p class="font-weight-bold">Bước 1</p>
                            <p>
                                Xây dựng kho đề thi dựa trên nhu cầu
                                tuyển dụng của doanh nghiệp
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-2 d-flex align-items-start ml-3 p-0 pl-2">
                            <div class="vertical-line">
                            </div>
                            <div class="step-number step-number-2 text-white font-weight-500 d-flex justify-content-center align-items-center">
                                2
                            </div>
                        </div>
                        <div class="col-md-9 col-9">
                            <p class="font-weight-bold">Bước 2</p>
                            <p>
                                Tổ chức thi online cho ứng viên hoặc
                                nhóm nhân sự
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-2 d-flex align-items-start ml-3 p-0 pl-2">
                            <div class="step-number step-number-3 text-white font-weight-500 d-flex justify-content-center align-items-center">
                                3
                            </div>
                        </div>
                        <div class="col-md-9 col-9">
                            <p class="font-weight-bold">Bước 3</p>
                            <p>
                                Tổng hợp kết quả và xuất báo cáo file excel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="step-wrapper mobile-hidden">
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="step-number step-number-1 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            <span>1</span>
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 1
                    </div>
                    <div class="step-des">
                        Xây dựng kho đề thi dựa trên
                        nhu cầu tuyển dụng của doanh nghiệp
                    </div>
                </div>
                <div class="line "></div>
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="step-number step-number-2 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            2
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 2
                    </div>
                    <div class="step-des">
                        Tổ chức thi online cho ứng viên hoặc nhóm nhân sự
                    </div>
                </div>
                <div class="line "></div>
                <div class="step-item text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="step-number step-number-3 text-white font-weight-500 d-flex justify-content-center align-items-center">
                            3
                        </div>
                    </div>
                    <div class="my-3 font-weight-bold">
                        Bước 3
                    </div>
                    <div class="step-des">
                        Tổng hợp kết quả và
                        xuất báo cáo file excel
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
