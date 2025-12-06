<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Submitted Information</h2>

<div class="card">
    <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Course:</strong> <?php echo $_POST['course']; ?></p>
</div>

</body>
</html>
