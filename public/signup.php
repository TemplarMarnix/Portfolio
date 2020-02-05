<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo '<p>Vul alle velden in!</p>';
        } else if ($_GET['error'] == "invalidmailname") {
            echo '<p>Ongeldige gebruikersnaam en e-mail!</p>';
        } else if ($_GET['error'] == "invalidmail&name") {
            echo '<p>Ongeldige gebruikersnaam!</p>';
        } else if ($_GET['error'] == "invalidname&mail") {
            echo '<p>Ongeldige e-mail!</p>';
        } else if ($_GET['error'] == "passwordcheck") {
            echo '<p>Uw wachtwoorden zijn niet gelijk!';
        } else if ($_GET['error'] == "usertaken") {
            echo '<p>Deze naam is al in gebruik!</p>';
        }
    } else if ($_GET['signup'] == "succes") {
        echo '<p>U heeft met succes een account gemaakt!</p>';
    }
?>
    <div class="signup">
        <div class="formulier">
        <h3>Account - Registreren</h3><br>
            <div class="labels">
                <label>Gebruikersnaam </label><br>
                <label>E-mail </label><br>
                <label>Wachtwoord </label><br>
                <label>Wachtwoord herhalen </label>
            </div>
            <form action="common/signup.php" method="post" class="registreren">
                : <input type="text" name="name" placeholder="John Williams"><br>
                : <input type="text" name="mail" placeholder="abc@example.com"><br>
                : <input type="password" name="password"><br>
                : <input type="password" name="password-repeat"><br>
                <button class="button" type="submit" name="signup-submit">Registreer</button>
            </form>
        </div>
    </div>