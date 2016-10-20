<?php // File: app/Post.php

namespace App;

use Corcel\Post as Corcel;

class Distribuidor extends Corcel
{
    protected $connection = 'wordpress';
    protected $postType = 'distribuidor';
}