<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 18/07/2017
 * Time: 16:01
 */
require ('Connect.php');
class Main
{
    public $conn;
    public function ConnectDatabase(){
        if(!$this->conn)
        {
            $this->conn = (new Connect())->ConnectDB();
            mysqli_set_charset($this->conn, 'utf8');
        }
    }
    public function InsertDatabase()
    {
        $sql = "INSERT INTO staff (name, age, phone ) 
        VALUES (Hai,22,0123123123)";
        if($this->conn->exec($sql) === TRUE)
        {
            $last_id = $this->conn->insert_id;
            echo $last_id;
        }
        else
        {
            echo "Loi, khong tao duoc nhan vien";
        }
    }
    public function InsertMultiDatabase()
    {
        $sql = "INSERT INTO staff (name, age, phone ) VALUES (Hai,22,0123123123)";
        $sql .= "INSERT INTO staff (name, age, phone ) VALUES (Ha,22, 0980908009)";
        $sql .= "INSERT INTO staff (name, age, phone ) VALUES (COC,22,0192948594)";
        if ($this->conn->multi_query($sql) === TRUE) {
            echo "Tao moi nhieu nhan vien thanh cong";
        } else {
            echo "Tao moi khong thanh cong";
        }
    }
    public function SelectAllStaff()
    {
        $sql = "SELECT * FROM staff";
        $this->conn->query($sql);
        if ($this->conn->query($sql)->num_rows > 0)
        {
            while ($row = $this->conn->query($sql)->fetch_assoc())
            {
                echo Json_encode($row);
            }
        }
        else{
            echo "Hien thi nhan vien loi";
        }
    }
    public function SelectStaffById()
    {
        $id = 1;
        $sql = "SELECT * FROM staff WHERE id = $id";
        if($this->conn->query($sql)->num_rows >0)
        {
            while ($row = $this->conn->query($sql)->fetch_assoc())
            {
                echo Json_endcode($row);
            }
        }
        else
        {
            echo "Khong co gia tri";
        }
    }
    public function UpdateStaff()
    {
        $sql= "UPDATE staff SET phone = 0908070605 WHERE id = 1";
        if($this->conn->query($sql)===TRUE)
        {
            echo " Update thanh cong";
        }
        else
        {
            echo " Co loi khi update";
        }
    }
    public function DisconectFromDatabase()
    {
        mysqli_close($this->conn);
    }
}
