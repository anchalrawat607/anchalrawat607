<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Sign Up</h2>
        <form action="process_signup.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="email">Email ID:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number (Optional):</label>
            <input type="text" id="phone" name="phone">

            <button type="submit">Next</button>
        </form>
    </div>
</body>
</html>
