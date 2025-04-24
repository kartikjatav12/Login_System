    <div class="container">
        <form class="form-container" action="process.php" method="POST" enctype="multipart/form-data">
            <h2>Register</h2>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="file">File:</label>
            <input type="file" id="file" name="file" required>

            <button type="submit" name="register">Register</button>
        </form>
    </div>
