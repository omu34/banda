document.addEventListener('DOMContentLoaded', function() {
    var mobileMenuBtn = document.getElementById('mobileMenuBtn');
    var mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

    mobileMenuBtn.addEventListener('click', function() {
        mobileMenuOverlay.classList.toggle('hidden');
    });
});
