<?php


class SignupContr {

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($auid, $apwd, $apwdrepeat, $aemail) {
        $this->$uid = $auid;
        $this->$pwd = $apwd;
        $this->$pwdrepeat = $apwdrepeat;
        $this->$email = $aemail;

    }

}