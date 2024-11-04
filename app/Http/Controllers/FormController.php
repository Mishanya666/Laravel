<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form'); 
    }

public function submitForm(Request $request)
	{
    // Добавьте валидацию
    	$request->validate([
        	'name' => 'required|string|max:255',
        	'email' => 'required|email|max:255',
    ]);

    // Получаем данные
    	$data = [
        	'name' => $request->input('name'),
	        	'email' => $request->input('email'),
	    	];

    // Сохраняем данные в файл JSON с уникальным именем в папке data
	    $filename = 'data/data_' . time() . '.json';
	    \Storage::disk('local')->put($filename, json_encode($data));

	    return redirect()->route('home')->with('success', 'Данные успешно сохранены!');
	}
}
