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
                    <h4>
                        <?php
                            echo $_SESSION["useruid"];
                        ?>
                    </h4>
                    <a href="profilesettings.php" class="follow-btn">PROFILE SETTINGS</a>
                </div>
            </div>
            <div class="profile-info-about">
                <h4>ABOUT</h4>
                <p>
                    <?php
                        $profileInfo->fetchAbout($_SESSION["userid"]);
                    ?>
                </p>
            </div>
            <div class="profile-content">
                <div class="profile-intro">
                    <h4>
                        <?php
                            $profileInfo->fetchTitle($_SESSION["userid"]);
                        ?>
                    </h4>
                    <p>
                        <?php
                            $profileInfo->fetchText($_SESSION["userid"]);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>