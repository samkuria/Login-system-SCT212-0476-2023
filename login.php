<?php
include_once 'header.php';
?>
    <section class="signupform">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method= "post">
            <input type="text" name="uid" placeholder="username/email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log in</button>
        </form>
    </section>

<?php
include_once 'footer.php';
?>