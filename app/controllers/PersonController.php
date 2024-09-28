<?php 

class PersonController
{
    public static function index()
    {
        include '../app/views/modules/person/ListPerson.php';
    }

    public static function form()
    {
        include '../app/views/modules/person/FormPerson.php';
    }
}