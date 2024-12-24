<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <?php include '../Common/navBar.php'; ?>
    <h1>Register</h1>
    <form action="" method="">
        <label>User Name</label>
        <input type="text" name="userName"/>
        <br/><br/>

        <label>User Email</label>
        <input type="email" name="userEmail"/>
        <br/><br/>

        <label>Password</label>
        <input type="password" name="userPassword"/>
        <br/><br/>

        <button type="submit">Register</button>

    </form>
</body>
</html>