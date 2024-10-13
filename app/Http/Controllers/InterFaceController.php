<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
class InterFaceController extends \App\Http\Controllers\Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }

    public function SignIn()
    {
        return view('register.signup');
    }

    public function Login()
    {
        return view('logins.login');
    }

    public function forgot()
    {
        return view('forgot_passwords.forgot-password');
    }

    public function SignInVN()
    {
        return view('register.signupVN');
    }

    public function LoginVN()
    {
        return view('logins.loginVN');
    }

    public function forgotVN()
    {
        return view('forgot_password.forgot-passwordVN');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogMicromanagement()
    {
        return view('pages.content1');
    }

    public function blogEquity()
    {
        return view('pages.content2');
    }

    public function blogLean()
    {
        return view('pages.content3');
    }
    public function document()
    {
        // Sample articles array
        $articles=[];
        for ($i = 1; $i <= 10; $i++) {
            $articles[] = [
                'title' => 'Reference check là gì? 4 điểm cần lưu ý khi kiểm tra tham chiếu 6 ',
                'url' => '/blog/micromanagement-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-324x235.jpg',
                'excerpt' => 'Reference check là khâu vô cùng quan trọng trong quá trình tuyển dụng...',
            ];
        }
        // Chuyển mảng sang Collection
        $Collection = collect($articles);

        // Phân trang Collection (ví dụ 5 items mỗi trang)
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $Collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Tạo đối tượng paginator
        $paginated = new LengthAwarePaginator($currentPageItems, $Collection->count(), $perPage);

        // Thiết lập đường dẫn phân trang
        $paginated->setPath(request()->url());

        // Truyền biến $paginatedArticles tới view
        return view('components_blog.document', ['articles' => $paginated]);
    }
    public function exam()
    {
        $exams=[];
        for ($i = 1; $i <= 10; $i++) {
            $exams[] = [
                'title' => 'IQ và EQ cái nào quan trọng hơn? Chọn yếu tố gì trong tuyển... ',
                'url' => '/blog/lean-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/05/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg',
                'excerpt' => 'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không biết IQ và EQ cái...',
            ];
        }
        // Chuyển mảng sang Collection
        $Collection = collect($exams);

        // Phân trang Collection (ví dụ 5 items mỗi trang)
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $Collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Tạo đối tượng paginator
        $paginated = new LengthAwarePaginator($currentPageItems, $Collection->count(), $perPage);

        // Thiết lập đường dẫn phân trang
        $paginated->setPath(request()->url());

        // Truyền biến $paginatedArticles tới view
        return view('components_blog.exam', ['exams' => $paginated]);
    }
    public function news()
    {
        $news=[];
        for ($i = 1; $i <= 10; $i++) {
            $news[] = [
                'title' => 'Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg',
                'excerpt' => 'Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý. Nhưng với sự “dẫn đường” của học thuyết Equity Theory, nhiều nhà quản lý có...',
            ];
        }
        // Chuyển mảng sang Collection
        $Collection = collect($news);

        // Phân trang Collection (ví dụ 5 items mỗi trang)
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $Collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Tạo đối tượng paginator
        $paginated = new LengthAwarePaginator($currentPageItems, $Collection->count(), $perPage);

        // Thiết lập đường dẫn phân trang
        $paginated->setPath(request()->url());

        // Truyền biến $paginatedArticles tới view
        return view('components_blog.news', ['news' => $paginated]);
    }
    public function peoples()
    {
        $peoples=[];
        for ($i = 1; $i <= 10; $i++) {
            $peoples[] = [
                'title' => 'Cách sa thải nhân viên khéo léo | Những điều cần biết và lưu... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/12/cach-sa-thai-nhan-vien-kheo-leo-testcenter-324x235.jpg',
                'excerpt' => 'Cách sa thải nhân viên khéo léo được xem như một trong những kỹ năng quan trọng hàng đầu mà bất cứ nhà quản lý doanh nghiệp nào cũng cần nắm rõ. Vậy, đâu...',
            ];
        }
        // Chuyển mảng sang Collection
        $Collection = collect($peoples);

        // Phân trang Collection (ví dụ 5 items mỗi trang)
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $Collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Tạo đối tượng paginator
        $paginated = new LengthAwarePaginator($currentPageItems, $Collection->count(), $perPage);

        // Thiết lập đường dẫn phân trang
        $paginated->setPath(request()->url());

        // Truyền biến $paginatedArticles tới view
        return view('components_blog.people', ['peoples' => $paginated]);
    }
}
