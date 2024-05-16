<?php

namespace App\Models;

use CodeIgniter\Model;

class PlantModel extends Model
{
    protected $table = 'plants';
    protected $useTimestamps = true;

    public function getCategory() {
        return $this->join("categories", "plants.category_id = categories.id");
    }
}
