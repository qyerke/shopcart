<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
        use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function getImage()
    {
        $path = '/frontend/images';
        return $path . '//'. $this->image;
    }
    public function getCategory()
    {
        if ($this->category != null) {
            return $this->category->title;
        } return "No Category";
    }
}
