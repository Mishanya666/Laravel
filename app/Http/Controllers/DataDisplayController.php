<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DataDisplayController extends Controller
{
    public function showData()
    {
        // Получаем список файлов в папке 'data'
        $files = Storage::files('data');

        $data = [];

        // Извлекаем данные из каждого файла JSON
        foreach ($files as $file) {
            $contents = Storage::get($file); // Читаем содержимое файла
            $data[] = json_decode($contents, true); // Декодируем JSON и добавляем в массив
        }

        // Передаем данные в представление
        return view('data', ['data' => $data]);
    }
}

