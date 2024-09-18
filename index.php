<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cont block">
    <div class="qwe">
        <p class="qw1">Задание 1</p>
    <?php
        $stud = ['Тазутдинов', 'Шамбазов', 'Емильяненко', 'Сидоров','Сатир', 'Барашкин'];
        echo 'Длина: ' .count($stud);
        echo '<br>';
        if(in_array('Сидоров', $stud)){
            echo 'Сидоров в списке присутствует';
        }
        else{echo'В списке Сидорова нет';}
        $epelled = array_pop($stud);
    ?>
    </div>
    <div class="qwe">
        <p class="qw1">Задание 2</p>
        
    <?php
        $array = [
            'Спортивный' => 'Сидоров',
            'Художественный' => 'Емелина',
            'Музыкальный' => 'Иванова', 
            'Литературный' => 'Петров', 
            'Биологический' => 'Антонова'
        ];

        asort($array);
        foreach($array as $key => $value){
            echo $key .' - '. $value;
            echo'<br>';
        }
    ?>
    </div>
    <div class="qwe">
        <p class="qw1">Задание 3</p>
        
    <?php
        $student = [
            'name' => 'Альфис',
            'surname' => 'Тазутдинов',
            'group' => '427',
            'hobby' => 'Чувствовать',
            'social' => [
                'WhatsApp' => '+7(902)718-68-77',
                'Telegram' => 't.me/yli_guli'
            ]
            ];
            echo 'Имя: ' .$student['name'].'<br>';
            echo 'Фамилия: ' .$student['surname'].'<br>';
            echo 'Группа: ' .$student['group'].'<br>';
            echo 'Хобби: ' .$student['hobby'].'<br>';
            foreach($student['social'] as $social => $value){
                echo $social .': '. $value.'<br>';
            }
    ?>
    </div> </div>
</body>
</html>
