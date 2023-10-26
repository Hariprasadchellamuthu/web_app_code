<!DOCTYPE html>
<html>
<head>
    <title>User Data Form</title>
</head>
<body>
    <h1>Submit User Data</h1>
    <form method="post" action="process.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
