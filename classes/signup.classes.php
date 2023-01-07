<?php


class Signup extends Dbh {

    protected function setUser($name, $uid, $pwd, $email) {
        $stmt = $this->connect()->prepare('INSERT INTO users (usersName, usersUid, usersPwd, usersEmail) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($name, $uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    

    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT usersUid FROM users WHERE usersUid = ? OR usersEmail = ?;');

        if(!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }
        $resultCheck = '';
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function getUserId($uid) {
        $stmt = $this->connect()->prepare('SELECT usersId FROM users WHERE usersUid = ?;');

        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: profile.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: profile.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;

    }



}