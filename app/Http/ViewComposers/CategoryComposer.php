<?php
namespace App\Http\ViewComposers;
use Illuminate\View\view;
use App\Models\Category;

class CategoryComposer{

    public function compose(View $view){
        return $view->with('categories',Category::all());
    }
}