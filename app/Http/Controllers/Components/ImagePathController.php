<?php
namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;

class ImagePathController extends Controller{

  static function getPath($req){
        $img = $req->image;
        $img_new_name = time() . $img->getClientOriginalName();
        $img ->move('image',$img_new_name);
        $temp = 'image/' . $img_new_name;
        return $temp;
  }
}

