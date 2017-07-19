<?php

/**
 * Created by PhpStorm.
 * User: windd01
 * Date: 19/07/2017
 * Time: 08:56
 */
require ('Main.php');
class View
{
    public function SelectAllStaffView()
    {
        $get = new Main();
        $get->ConnectDatabase();
        $get->SelectStaffById();
        $get->DisconectFromDatabase();
    }
    public function SelectStaffByIdView()
    {
        $get = new Main();
        $get->ConnectDatabase();
        $get->SelectStaffById();
        $get->DisconectFromDatabase();
    }
    public function InsertDatabaseView()
    {
        $get=new Main();
        $get->ConnectDatabase();
        $get->InsertDatabase();
        $get->DisconectFromDatabase();
    }
    public function InsertMultiDatabaseView()
    {
        $get=new Main();
        $get->ConnectDatabase();
        $get->InsertMultiDatabase();
        $get->DisconectFromDatabase();
    }
    public function UpdateDatabaseView()
    {
        $get=new Main();
        $get->ConnectDatabase();
        $get->UpdateStaff();
        $get->DisconectFromDatabase();
    }
}
