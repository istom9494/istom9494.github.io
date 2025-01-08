// 页面加载完成后，给教程项添加淡入动画
window.onload = function () {
    const tutorialItems = document.querySelectorAll('.tutorial-item');
    tutorialItems.forEach(item => {
        item.classList.add('fade-in');
    });
};

// 当点击教程项时，添加放大动画
document.addEventListener('click', function (e) {
    if (e.target.classList.contains('tutorial-item')) {
        e.target.classList.add('scale-up');
    }
});