<?php

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;


App::bind('config', require 'config.php');
App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

App::bind('phpMailer', require '.env.php');
App::bind('mail',  (new Services\CustomPhpMailer())->buildMailer());