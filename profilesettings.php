<?php
    include_once "partials/header.php";

    include "classes/dbh.classes.php";
    include "classes/profileinfo.classes.php";
    include "classes/profileinfo-contr.classes.php";
    include "classes/profileinfo-view.classes.php";

    $profileInfo = new ProfileInfoView();

?>
 
<section class="profile">
    <div class="profile-bg">
        <div class="wrapper">
            <div class="profile-settings">
                <h3>PROFILE SETTINGS</h3>
                <p>Change your about section here!</p>
                <form action="includes/profileinfo.inc.php" method="post">
                    <textarea name="about" rows="10" cols="30" placeholder="Profile about section..."></textarea>
                    <br><br>
                    <p>Change your profile page intro here!</p>
                    <br>
                    <input type="text" name="introtitle" placeholder="Profile title...">
                    <br><br>
                    <textarea name="introtext" rows="10" cols="30" placeholder="Profile introduction..."></textarea>
                    <br>
                    <button type="submit" name="submit">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>