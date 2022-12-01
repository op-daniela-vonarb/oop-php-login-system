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

    private function emptyInput() {
        $result;
        if(empty($this->$uid) || empty($this->$pwd) || empty($this->$pwdrepeat) || empty($this->$email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}