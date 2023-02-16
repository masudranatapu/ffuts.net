<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Entities\Category;
use Modules\Category\Entities\SubCategory;

class Ad extends Model
{
    use HasFactory;
    public function ad_type(){
        return $this->belongsTo(AdType::class, 'ad_type_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id');
    }
}
