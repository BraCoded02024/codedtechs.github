<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Make sure this is the correct path to your CSS file -->
</head>
<body>

    <div class="container">
        <h2>Event Registration</h2>
        <form action="formsubmit.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="event-date">Event Date</label>
                <input type="date" id="event-date" name="event-date" required>
            </div>

            <div class="form-group">
                <label for="location">Event Location</label>
                <input type="text" id="location" name="location" placeholder="Enter event location" required>
            </div>

            <button type="submit">Register Event</button>
        </form>
    </div>

</body>
</html>
