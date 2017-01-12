<DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>MyNotebook</title>
        <link rel="stylesheet" type="text/css" href="views/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h2>My Notebook</h2>
        <a href="../index.php">Головна</a>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>Заголовок<br>
                    <input type="text" name="title" value="<?=$note['title']?>" class="form-item" autofocus required>
                </label><br>
                <label>Ім'я<br>
                    <input type="text" name="nickname" value="<?=$note['nickname']?>" class="form-item" required>
                </label><br>
                <label>Дата<br>
                    <input type="date" name="date" value="<?=$note['date']?>" class="form-item" required>
                </label><br>
                <label>Нотатка<br>
                    <textarea name="content"  class="form-item" required><?=$note['content']?></textarea>
                </label><br>
                <input type="submit" value="Зберегти" class="btn" >
            </form>
        </div>
        <footer>
            <p>Created by Misha Bondarchuk<br>&copy; 2017</p>
        </footer>
    </div>
    </body>
    </html>