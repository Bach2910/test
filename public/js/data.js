const articles = [
    {
        summary: "Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết cân bằng",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-218x150.jpg"
    },
    {
        summary: "Lean là gì? Phương pháp ứng dụng mô hình Lean để tối ưu chi phí cho doanh nghiệp",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/01/lean-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Dấu hiệu nhận biết ứng viên không trung thực nhà quản trị cần biết",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc-testcenter-218x150.jpg"
    },
    {
        summary: "Tuyển Mass là gì? Nguyên tắc vàng để tuyển Mass hiệu quả",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/03/tuyen-mass-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Bonding là gì? Mở “khóa” các hoạt động gắn kết tình đồng đội",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/bonding-la-gi-testcenter-1-218x150.jpg"
    },
    {
        summary: "Revenue Stream là gì? Phương pháp tăng trưởng dòng doanh",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/revenue-stream-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Pricing strategy là gì? Có bao nhiêu chiến lược giá?",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/chienluocgialagi-testcenter-218x150.jpg"
    },
    {
        summary: "06 cách giải quyết mâu thuẫn trong nội bộ doanh nghiệp dành cho nhà quản lý",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2024/02/cachgiaiquyetmauthuan-testcenter-218x150.jpg"
    },
    {
        summary: "Flowchart là gì? Cách ứng dụng Flowchart vào quy trình tuyển dụng hiệu quả",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/flowchart-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Quan tâm là gì? 10 cách quan tâm nhân viên mới nhất",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/quan-tam-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Phẩm chất là gì? 8 phẩm chất cần có của nhân viên khi đánh giá",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/12/pham-chat-la-gi-testcenter-218x150.jpg"
    },
    {
        summary: "Ma trận 9 Box Grid – Đánh giá và phát triển nhân viên hiệu quả",
        image_url: "https://www.testcenter.vn/blog/wp-content/uploads/2023/11/ma-tran-9-box-grid-testcenter-218x150.jpg"
    }
];

const articlesPerPage = 3;
let currentPage = 1;

function displayArticles(page) {
    const startIndex = (page - 1) * articlesPerPage;
    const endIndex = page * articlesPerPage;
    const articlesToDisplay = articles.slice(startIndex, endIndex);

    const articleContainer = document.getElementById('articleContainer');
    articleContainer.innerHTML = '';

    articlesToDisplay.forEach(article => {
        articleContainer.innerHTML += `
                    <div class="card-body justify-content-between">
                        <img href="#" src="${article.image_url}" alt="">
                        <a href="#">${article.summary}</a>
                    </div>
                `;
    });
}

function updateButtons() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const totalPages = Math.ceil(articles.length / articlesPerPage);

    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
}

document.getElementById('prevBtn').addEventListener('click', function () {
    if (currentPage > 1) {
        currentPage--;
        displayArticles(currentPage);
        updateButtons();
    }
});

document.getElementById('nextBtn').addEventListener('click', function () {
    const totalPages = Math.ceil(articles.length / articlesPerPage);
    if (currentPage < totalPages) {
        currentPage++;
        displayArticles(currentPage);
        updateButtons();
    }
});

// Initial display
displayArticles(currentPage);
updateButtons();
