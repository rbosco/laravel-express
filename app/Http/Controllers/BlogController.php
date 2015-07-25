<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
            $posts = array (
                'tituloBlog' =>'Titulo do Blog',
                'descricaoBlog' => 'The official example template of creating a blog with Bootstrap.',
                'tituloPostagem' => 'Sample blog post',
                'data' => 'Julho 9, 2015 por ',
                'autor' => 'Romulo',
                'conteudo' => 'Cum sociis natoque penatibus et magnis , nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.'
            );

            return view('blog.index',compact('posts'));
    }
}
