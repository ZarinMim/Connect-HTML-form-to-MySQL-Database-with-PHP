<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>HTML FORM</h1>
    <div class="container">
        <form action="connect.php" method="post">
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your NAME">
            </div>
            <div>
                <label>E-mail</label>
                <input type="email" name="email" placeholder="Enter your E-MAIL">
            </div>
            <div class="genderContainer">
                <label>Gender</label>
                <input class="gender1" type="radio" name="gender" value="m">Male
                <input class="gender1" type="radio" name="gender" value="f">Female
            </div>
            <div>
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Enter your MOBILE NUMBER">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your PASSWORD">
            </div>
            <div class="btn">
                <button type="submit">Submit Data</button>
            </div>
        </form>
    </div>
</body>
</html>
