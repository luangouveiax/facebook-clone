<?php
namespace src\models;
use \core\Model;

class UserRelation extends Model 
{
    public ?int $id;
    public ?int $user_from;
    public ?int $user_to;
}