// 农历季节判断
function getSeasonByLunar() {
    const lunarMonths = ["春", "春", "春", "夏", "夏", "夏", "秋", "秋", "秋", "冬", "冬", "冬"];
    const currentDate = new Date();
    const month = currentDate.getMonth(); // 0-11 月份
    return lunarMonths[month];
}

// 添加动画元素
function createElements(className, count) {
    for (let i = 0; i < count; i++) {
        const element = document.createElement("div");
        element.className = className;
        element.style.left = Math.random() * 100 + "vw";
        element.style.animationDuration = Math.random() * 3 + 3 + "s";
        document.body.appendChild(element);
    }
}

// 根据季节加载元素
document.addEventListener("DOMContentLoaded", function () {
    const season = getSeasonByLunar();
    switch (season) {
        case "春":
            createElements("spring-petal", 30);
            break;
        case "夏":
            createElements("summer-rain", 50);
            break;
        case "秋":
            createElements("autumn-leaf", 20);
            break;
        case "冬":
            createElements("winter-snow", 40);
            break;
    }
});
