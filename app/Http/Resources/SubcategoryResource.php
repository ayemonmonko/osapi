<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;


class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap = 'subcategory';
    public function toArray($request)
    {
         return [
            'subcategory_id' => $this->id,
            'subcategory_name' => $this->name,
            'category' => Category::find($this->category_id),
            
        ];
        //return parent::toArray($request);
    }
}
