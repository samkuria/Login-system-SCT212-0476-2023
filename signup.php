<?php
include_once 'header.php';
?>
    <section class="signupform">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method= "post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign up</button>
        </form>
    </section>

<?php
include_once 'footer.php';
?>