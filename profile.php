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
                <div class="profile-info">
                    <h4>DANIELA</h4>
                    <a href="profilesettings.php" class="follow-btn">PROFILE SETTINGS</a>
                </div>
            </div>
            <div class="profile-info-about">
                <h4>ABOUT</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus tempore quae impedit a id similique ex! Vero, ea ab? Id?</p>
            </div>
            <div class="profile-content">
                <div class="profile-intro">
                    <h4>Hi! I'm Daniela</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus tempore quae impedit a id similique ex! Vero, ea ab? Id?</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>