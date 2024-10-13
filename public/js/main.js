window.addEventListener('scroll', function() {
    const header = document.getElementById('header');

    if (window.scrollY > 50) { // Nếu cuộn xuống quá 50px
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
