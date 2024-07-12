var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
        // Создаем новый элемент img
        var img = document.createElement("img");
        // Устанавливаем источник изображения
        img.src = "https://www.dvfu.ru/upload/iblock/b0a/il6e7pc1eo0d0o2rerxxrf8g6b7mkt79/1.jpg";
        // Добавляем изображение в параграф
        document.getElementById("demo").appendChild(img);
    }
}