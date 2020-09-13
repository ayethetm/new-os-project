<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = [
    'codeno', 'name','price','discount','photo','description','brand_id','subcategory_id'
  ];

  public function brand($value='')
  {
    return $this->belongsTo('App\Brand');
  }

  public function subcategory($value='')
  {
    return $this->belongsTo('App\Subcategory');
  }

  public function orders($value='')
  {
    return $this->belongsToMany('App\Order','order_detail')
                ->withPivot('qty')
                ->withTimestamps();
    
  }
}
