<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<h1>กรอกรายละเอียด</h1>
    <?php 
    echo form_open('portfolio/add');
    echo form_label('ชื่อ');
    echo form_input('name');
    echo form_label('นามสกุล');
    echo form_input('lastname');
    echo form_label('อายุ');
    echo form_input('age');
    echo form_submit('send','ส่ง');
    

    echo form_close();
    ?>
</body>
</html>