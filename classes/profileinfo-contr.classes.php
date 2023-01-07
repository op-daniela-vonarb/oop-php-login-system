<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid)
    {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo() {
        $profileAbout = 'Tell people about yourself!';
        $profileTitle = "Hi! I am " . $this->userUid;
        $profileText = "Welcome to my profile page!";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($profileAbout, $profileTitle, $profileText) {
        // Error handlers
        if($this->emptyInputCheck($profileAbout, $profileTitle, $profileText) == true) {
            header("location: ../profilesettings.php?error=emptyinput");
            exit();
        }

        // Update profile info
        $this->setNewProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    private function emptyInputCheck($profileAbout, $profileTitle, $profileText) {
        $result = '';
        if(empty($profileAbout) || empty($profileTitle) || empty($profileText)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
    
}