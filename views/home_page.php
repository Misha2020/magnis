<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <title>MyNotebook</title>
        <link rel="stylesheet" type="text/css" href="views/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h2>My Notebook</h2>
            <a href="index.php?action=add">Додати нотатку</a><br>
        </header>
        <div class="container">
            <?php if($notes) foreach ($notes as $a):?>
                <div class="note col-lg-4 col-sm-6 col-xs-12">
                    <h4><?=$a['title']?></h4>
                    <em><?=$a['date']?></em><br>
                    <em>Автор:<?=$a['nickname']?></em>
                    <p><?=$a['content']?></p>
                    <a class="edit" href="index.php?action=edit&id=<?=$a['id']?>">Редагувати</a>
                    <a class="delete" href="index.php?action=delete&id=<?=$a['id']?>">Видалити</a>
                </div>
            <?php endforeach; ?>
        </div>
		<footer>
            <p>Created by Misha Bondarchuk<br>&copy; 2017</p>
        </footer>
    </body>
</html>