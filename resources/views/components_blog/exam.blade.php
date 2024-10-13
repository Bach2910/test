@extends('layout.resources')
@section('main')
    <div class="people-header-title container">
        <div class="link">
            <a href="#" class="nav-link">Trang chủ</a>>
            <a>Tin tức</a>
        </div>
        <div class="button-selection">
            <a class="mb-2 text-white btn btn-dark" style="font-size: 9px;width: 10%">Mới nhất</a>
        </div>
        <h1>Mẫu đề Test Online</h1>
        <div class="description">
            <p>Testcenter cung cấp hệ thống và mẫu đề test online giúp doanh nghiệp và ứng viên đánh giá tính cách, tư duy, khả năng tính toán thông qua bài test IQ, EQ, MBTI, DISC và đề thi TOEIC,… </p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($exams as $exam)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $exam['url'] }}" rel="bookmark" class="td-image-wrap" title="{{ $exam['title'] }}">
                                        <img class="entry-thumb" src="{{ $exam['image_url'] }}" alt="{{ $exam['title'] }}" width="324" height="235" />
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $exam['url'] }}" rel="bookmark">{{ $exam['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/mau-de-test/" type="button" class="td-post-category">Mẫu đề Test</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $exam['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $exam['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{$exams->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
