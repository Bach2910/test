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
        <h1>Tin tức</h1>
        <div class="description">
            <p>Testcenter.vn – Nơi cập nhật những tin tức, xu hướng mới nhất về mô hình vận hành, cách thức quản trị và thông tin về các hoạt động của doanh nghiệp thành công trong và ngoài nước.</p>
        </div>
    </div>
    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        @foreach($news as $new)
                            <div class="td_module_11 mt-5 td_module_wrap td-animation-stack">
                                <div class="td-module-thumb mb-2">
                                    <a href="{{ $new['url'] }}" rel="bookmark" class="td-image-wrap"
                                       title="{{ $new['title'] }}">
                                        <img class="entry-thumb" src="{{ $new['image_url'] }}"
                                             alt="{{ $new['title'] }}" width="324" height="235"/>
                                    </a>
                                </div>
                                <div class="item-details">
                                    <h3 class="entry-title td-module-title mb-2">
                                        <a href="{{ $new['url'] }}" rel="bookmark">{{ $new['title'] }}</a>
                                    </h3>
                                    <div class="module-meta-info mb-2">
                                        <a href="/blog/tin-tuc/" type="button" class="td-post-category">Tin tức</a>
                                    </div>
                                    <div class="excerpt mb-3">
                                        {{ $new['excerpt'] }}
                                    </div>
                                    <div class="read-more">
                                        <a class="td-post-category" href="{{ $new['url'] }}">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrapper">
                        {{$news->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
