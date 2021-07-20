<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ResizeController extends Controller
{
    


    public function resizeImage(Request $request)
    {
	    $this->validate($request, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
		$arquivo = date("YmdHis").'.jpg';   
		
        $image = $request->file('file');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/miniaturas');

        $imgFile = Image::make($image->getRealPath());

        $imgFile->resize(150, 150, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$arquivo);
		//})->save($destinationPath.'/'.$input['file']);

        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $arquivo);
		 //$image->move($destinationPath, $input['file']);

        return back()
        	->with('success','Image has successfully uploaded.')
        	->with('fileName',$arquivo);
			//->with('fileName',$input['file']);
    
    }

}