// Hàm để chuyển hướng và lưu giá trị đã chọn
function navigateToUrl() {
    const selectedOption = document.getElementById('options-forgot').value;

    // Lưu giá trị đã chọn vào localStorage
    localStorage.setItem('selectedLanguage', selectedOption);

    if (selectedOption === 'option1') {
        window.location.href = 'http://127.0.0.1:8000/forgot-password'; // Thay đổi thành route thực tế của bạn
    } else if (selectedOption === 'option2') {
        window.location.href = 'http://127.0.0.1:8000/forgot-password/vn'; // Thay đổi thành route thực tế của bạn
    }
}

// Hàm để khôi phục giá trị đã chọn từ localStorage khi trang được tải lại
function restoreSelectedOption() {
    const savedOption = localStorage.getItem('selectedLanguage');
    if (savedOption) {
        document.getElementById('options-forgot').value = savedOption;
    }
}
// Gọi hàm restoreSelectedOption khi trang được tải
window.onload = restoreSelectedOption;
