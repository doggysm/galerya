<?php
function imgarr(){
    $path = "images/"; // задаем путь до сканируемой папки с изображениями
    $images = scandir($path); // сканируем папку
    
    if ($images !== false) 
    { // если нет ошибок при сканировании
    $images = preg_grep("/\.(?:png|gif|jpe?g)$/i", $images); // через регулярку создаем массив только изображений
    }
    return $images;
}
        
?>