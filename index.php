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

<form method="POST" action="index2.php">
    From currency:<label>
        <input type="text" name="l1"/>
    </label>
    <label>
        <select name="c1">
            <option value="usd">USD</option>
            <option value="vnd">VND</option>
        </select>
    </label>
    To currency: <label>
        <select name="c2">
            <option value="usd">USD</option>
            <option value="vnd">VND</option>
        </select>
    </label>
    <input type="submit" value="convert" name="convert">
</form>
</body>
</html>
