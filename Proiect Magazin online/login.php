<?php require_once('Project.php'); ?>
<div class="CentratFORM">
    <form action="login_session.php" method="POST">
        <h2>Log In</h2>
        <label for="usernameField">Nume de utilizator</label>
        <br>
        <input required type="text" name="username"
               value="" id="userField">
        <br>
        <label for="passwordField">Parola</label>
        <br>
        <input required type="password" name="password"
               value="" id="passwordField">
        <br><br><br>
        <button type="submit">Send</button>
    </form>
</div>

<?php?>
