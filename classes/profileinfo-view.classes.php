<?php

class ProfileInfoView extends ProfileInfo {

    public function fetchAbout($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profilesAbout'];
    }

    public function fetchTitle($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profilesIntrotitle'];
    }

    public function fetchText($userId) {
        $profileInfo = $this->getProfileInfo($userId);
        echo $profileInfo[0]['profilesIntrotext'];
    }

}