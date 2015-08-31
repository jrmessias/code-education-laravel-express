<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'RS terá greve geral a partir desta segunda; veja os serviços afetados',
                'subtitle' => 'Policiais, professores e servidores da Saúde devem cruzar os braços. Nesta segunda, Sartori deve anunciar o parcelamento dos salários.'
            ],
            [
                'title' => 'Morre o mestre do terror Wes Craven, aos 76 anos',
                'subtitle' => 'O cineasta americano é responsável por algumas das franquias mais famosas do gênero, como "A hora do pesadelo" e "Pânico".'
            ],
            [
                'title' => 'Casal é resgatado por bombeiros após pousar com ultraleve em lagoa',
                'subtitle' => 'Casco do equipamento rompeu e começou a afundar, conforme bombeiros. Casal não sabia nadar e foi resgatado de jet ski em Laguna.'
            ]
        ];
        return view('blog/index', compact('posts'));
    }


    public function sobre()
    {
        return view('blog/sobre');
    }

    public function contato()
    {
        return view('blog/contato');
    }

    public function post()
    {
        $post = [
            'title' => 'RS terá greve geral a partir desta segunda; veja os serviços afetados',
            'subtitle' => 'Policiais, professores e servidores da Saúde devem cruzar os braços. Nesta segunda, Sartori deve anunciar o parcelamento dos salários.'
        ];
        return view('blog/post', ['post' => $post]);

    }

}
