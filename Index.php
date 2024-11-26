<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coolshop</title>
    <link rel="stylesheet" href="Style.css">
    <script src="script.js"></script>
</head>
<body>
    <header></header>

    <section id= "items"></section>

    <footer></footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coolshop</title>
</head>
<body>
    <header></header>

    <section id= "admin">
        <form action="index.php" method="post">
            <labal for="name">item name:</labal> <br>
            <input type="text" name="name"></input> <br>

            <labal for="text">price:</labal> <br>
            <input type="number" name="text"></input> <br>

            <input onload="preview()" accept="image/*" type="file" name="image" id="test"></input> <br>

            <labal for="name">price:</labal> <br>
            <input name="text"></input> <br>

            <labal for="desc">Description:</labal> <br>
            <input name="desc"></input> <br>

            <img id="preview" src="#"><img>

            <button type="submit"> Submit </button>
        </form>
    </section>

    <footer></footer>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../styles.css">

</body>
</html>


