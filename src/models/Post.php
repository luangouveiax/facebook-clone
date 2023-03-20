<?php
namespace src\models;
use \core\Model;

class Post extends Model 
{
    public ?int $id;
    public ?int $id_user;
    public ?string $type;
    public ?string $created_at;
    public ?string $body;
}