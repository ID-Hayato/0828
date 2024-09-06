<?php
class Userdata
{
    //フィールド
    //userdata
    public $id;
    public $username;
    public $chat;
    public $tochat;
    public $time;
    public $abnormal;

//report
public $reportID;
public $reportitem;
public $reportcomment;


    public $link;
   

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "mariadb", "２2ch");
        mysqli_set_charset($this->link, "utf8mb4");
    }

    public function adddata( 
        string $username,
        string $chat,
        int $tochat,     )
    {
        $this->username = $username;
        $this->chat = $chat;
        $this->tochat = $tochat;
        $this->time = date("Y/m/d H:i:s");
        $stmt = mysqli_prepare(
            $this->link,
            "INSERT INTO userdata(username,chat,tochat,time)" . " VALUES (?,?,?,?);"
        );
        mysqli_stmt_bind_param(
            $stmt,
            "ssis",
            $this->username,
            $this->chat,
            $this->tochat,
            $this->time,
        );

        mysqli_stmt_execute($stmt);

        mysqli_close($this->link);
    }



public function addreport( 
    int $num,
    string $radio,
    string $text, )   
{
        $this->reportID = $num;
        $this->reportitem = $radio;
        $this->reportcomment = $text;
        $stmt = mysqli_prepare(
            $this->link,
            "INSERT INTO userdata(username,chat,tochat,time)" . " VALUES (?,?,?,?);"
        );
        mysqli_stmt_bind_param(
            $stmt,
            "ssis",
            $this->username,
            $this->chat,
            $this->tochat,
            $this->time,
        );

        mysqli_stmt_execute($stmt);

        mysqli_close($this->link);
}

}
