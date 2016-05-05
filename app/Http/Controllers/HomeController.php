<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 11/04/16
 * Time: 12:12
 */

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function visualizar()
    {
        $dados =
        [
            0 => [
                "titulo" => "Man must explore, and this is exploration at its greatest",
                "subtitulo" => "Problems look mighty small from 150 miles up",
                "user" => "Usuario 1",
                "created_at" => "2016-04-10"
            ],
            1 => [
                "titulo" => "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
                "subtitulo" => "",
                "user" => "Usuario 2",
                "created_at" => "2016-04-09"
            ],
            2 => [
                "titulo" => "Science has not yet mastered prophecy",
                "subtitulo" => "We predict too much for the next year and yet far too little for the next ten.",
                "user" => "Usuario 1",
                "created_at" => "2016-04-08"
            ],
            3 => [
                "titulo" => "Failure is not an option",
                "subtitulo" => "Many say exploration is part of our destiny, but it’s actually our duty to future generations.",
                "user" => "Usuario 2",
                "created_at" => "2016-04-07"
            ],
        ];

        return view("home",compact('dados'));
    }

    public function findPost($id)
    {
        $dados =
            [
                0 => [
                    "titulo" => "Man must explore, and this is exploration at its greatest",
                    "subtitulo" => "Problems look mighty small from 150 miles up",
                    "user" => "Usuario 1",
                    "created_at" => "2016-04-10"
                ],
                1 => [
                    "titulo" => "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
                    "subtitulo" => "We predict too much for the next year and yet far too little for the next ten. We predict too much for the next year and yet far too little for the next ten.",
                    "user" => "Usuario 2",
                    "created_at" => "2016-04-09"
                ],
                2 => [
                    "titulo" => "Science has not yet mastered prophecy",
                    "subtitulo" => "We predict too much for the next year and yet far too little for the next ten.",
                    "user" => "Usuario 1",
                    "created_at" => "2016-04-08"
                ],
                3 => [
                    "titulo" => "Failure is not an option",
                    "subtitulo" => "Many say exploration is part of our destiny, but it’s actually our duty to future generations.",
                    "user" => "Usuario 2",
                    "created_at" => "2016-04-07"
                ],
            ];
        foreach($dados as $key => $value){
            if ($key == $id){
                return view("post",[
                        "titulo"=> $value['titulo'],
                        "subtitulo"=> $value['subtitulo'] . " <br> " . $value['subtitulo'] . "<br/>" . $value['subtitulo'] . "<br/>",
                        "user"=> $value['user'],
                        "created_at"=> $value['created_at']
                ]);
            }
        }

        return view("post",[]);
    }

}