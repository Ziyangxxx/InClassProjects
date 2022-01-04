<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
}

/*

With this empty model, we have access to a full array
of methods for working with this table... we don't have
to write any more code:

all() // all records
find($id)
save($params) // updates
update($params) //
create($params)
delete($id) //
find()->where($clause) // search
 */