<?php


class SignupContr extends Signup {

    private $name;
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($name, $uid, $pwd, $pwdrepeat, $email) {
        $this->name = $name;
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false) {
            // echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false) {
            // echo "invalid email!";
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            // echo "passwords don't match!";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) {
            // echo "username or email taken";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->name, $this->uid, $this->pwd, $this->email);

    }

    private function emptyInput() {
        $result = '';
        if(empty($this->name || $this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result = '';
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = '';
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result = '';
        if($this->pwd !== $this->pwdrepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result = '';
        if(!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    public function fetchUserId($uid) {
        $userId = $this->getUserId($uid);
        return $userId[0]["usersId"];
    }

}