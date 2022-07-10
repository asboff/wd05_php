<?php
foreach ($_FILES as $key => $file){
    // проверяет, загружен ли файл
    if ($file['error'] == 4) {
        continue;
    }
    // проверяет, создана ли папка
    if (is_dir('uploads') == false) {
        mkdir('uploads');
    }
    // ренейм файла
    if (file_exists(__DIR__.'/uploads/'.$file['name']) == true){
        for ($i = 1; $i > 0; $i++){
            $type = strrchr($file['name'], '.');
            if (file_exists(__DIR__.'/uploads/'.str_replace($type, '', $file['name']).'_'.$i.$type) == true) {
                continue;
            }
            $file['name'] = str_replace($type, '', $file['name']) . '_' . $i . $type;
            break;
    } }
    // перемещение
    move_uploaded_file($_FILES[$key]['tmp_name'], __DIR__.'/uploads/'.$file['name']);
    // путь + размер
    echo __DIR__.'/uploads/'.$file['name'].'; '.round(($file['size'] / 1048576), 2).' Mb';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file1"> <br>
    <input type="file" name="file2"> <br>
    <input type="file" name="file3"> <br>
    <input type="file" name="file4"> <br>
    <input type="file" name="file5"> <br>
    <button type="submit">Send</button>
</form>
</body>
</html>