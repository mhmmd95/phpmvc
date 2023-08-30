<?php

declare (strict_types = 1);

namespace App\Core;

use App\Core\Database\QueryBuilder;

final class DB extends QueryBuilder{

    //DB::table('tablename')->query;
    private string $tablename;

    public function table(string $table): QueryBuilder {
        $this->tablename = $table;
        return $this;
    }

    public function all(): array {
        return parent::selectAll($this->tablename);
    }
}