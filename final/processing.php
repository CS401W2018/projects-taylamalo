<!DOCTYPE html>
<html lang="en">
<head>
    <title> Signed up</title>
    <meta charset="utf-8">
</head>
<body>
    <main>
        <h1> Thank you for filling out!</h1>
        <p>First Name: <?php print $_POST['first']?> </p>
        <p>Last Name: <?php print $_POST['last']?> </p>
        <p>Best Contact: <?php print $_POST['contact']?> </p>
        <p>Phone Number: <?php print $_POST['num']?> </p>
        <p>Email: <?php print $_POST['email']?> </p>
        <p>Resident State: <?php print $_POST['states']?> </p>
        <p>Was this Page Helpful: <?php print $_POST['comment']?> </p>
    </main>
</body>
</html>