<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repositorio;

class DropzoneController extends Controller
{
    public function dropzone(){
        return view ('layouts.dropzone');
    }
    /*public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);
        return response()->json(['success'=>$imageName]);

    }*/

    public function store(Request $request)
    {
        $request->validate([
        'documento',
		'nomenclatura',
		'descripcion',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Repositorio::create($input);
     
        return redirect()->route('layouts.index')
                        ->with('success','Product created successfully.');
    }
     
    public function show(Repositorio $repositorio)
    {
        return view('layouts.show',compact('product'));
    }
     
    public function edit(Repositorio $repositorio)
    {
        return view('layouts.edit',compact('product'));
    }
    
    public function update(Request $request, Repositorio $repositorio)
    {
        $request->validate([
        'documento' => 'required',
		'nomenclatura' => 'required',
		'descripcion' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $product->update($input);
    
        return redirect()->route('layouts.index')
                        ->with('success','Product updated successfully');
    }
  
    public function destroy(Repositorio $repositorio)
    {
        $repositorio->delete();
     
        return redirect()->route('layouts.index')
                        ->with('success','Product deleted successfully');
    }
}
