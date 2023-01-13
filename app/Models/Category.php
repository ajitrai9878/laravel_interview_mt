<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static pluck(string $string, string $string1)
 * @method static where(array $array)
 * @method static create(array $array)
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name'
    ];

    public function subCategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function saveCategory($request)
    {
        if ($request->id) {
            return self::where(['id' => $request->id])->update(['name' => $request->name, 'parent_id' => $request->parent_id,]);
        }
        return self::create(['parent_id' => $request->parent_id, 'name' => $request->name]);
    }

    public function deleteDataPermanent($id)
    {
        return self::where(['id' => $id])->orWhere(['parent_id' => $id])->delete();
    }

}
