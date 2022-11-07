<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devise-width, initial-scale=1.0"> 
    <title>Резюме</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
    <div class="header">
        <?php include 'logo_inc.php'?>          
        <?php include 'menu_inc.php'?>        
    </div>
    <div class="h1">
        <h1><?php echo $p?></h1>
    </div>
        <div class='about_my'>
            <img src="IMG/Мой аватар.jpg" width="200px" height="200px">
            <p>Меня зовут:
            <?php echo $name, " ", $lastname, " ", $surname, '<br>';
                echo 'Город:', " ", $syti;?>
            </p>
            <p>Мне:
                <?php echo $age, ' года'?>
            </p>
            <p>Мы научились создавать переменные</p>
            <p>Изучили простые операции с ними</p>
        </div>
    <br>
    <div class='knowledge'>
        <?php include 'knowledge_inc.php';?>
        <?php 
            echo $a, ' ', $b, ' ', $c, '<br>';
        ?>
        <?php
        $a = 10;
        $b = 20;
        $c = $a + $b;
        echo $c;
        ?>
        <br>
        <?php
        echo $d;
        ?>
    </div>
    <div class="artycle">
        <p class="text">
            Пока не понимаю зачем такое количество классов и для
            чего они вообще нужны. Но думаю, что в скором времени
            разберусь в чем тут дело.

        </p>
    </div>
</body>
<footer>
    <?php include 'footer_inc.php'?>
</footer>
</html>