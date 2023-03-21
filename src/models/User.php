<?php
namespace src\models;
use \core\Model;

class User extends Model 
{
    public ?int $id;
    public ?string $email;
    public ?string $name;
    public ?string $birthdate;
    public ?string $city;
    public ?string $work;
    public ?string $avatar;
    public ?string $cover;
    public ?array $followers;
    public ?array $following;
    public ?array $photos;
    public ?int $ageYears;
}