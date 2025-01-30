window.onload = function onLoad() {
    var circle = new ProgressBar.Circle('#progress', {
        color: '#FF9800',
        duration: 2000,
        easing: 'easeInOut'
    });
    circle.animate(1);
    setTimeout("location.href='index.php'", 2000);
};