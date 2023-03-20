<?php
namespace src\models;
use \core\Model;

class User extends Model 
{
    public ?int $id;
    public ?string $name;
    public ?string $email;
    public ?string $avatar;
}