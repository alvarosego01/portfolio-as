<?php

use App\Classes\PageBaseController;
use App\Classes\generalFunctions;

class HomeController extends PageBaseController
{

  protected $view = 'home/home-view.twig';
  public static string $template_file = 'template-home.php';
  public static string $template_name = 'Page - Home';

  protected $general_functions;

  public function __construct()
  {
    parent::__construct();
    $this->general_functions = new generalFunctions();
  }

  protected function initialize()
  {
    $this->setSKills();
  }

  function setSKills()
  {

    $skills = array(
      "frontend" => [
        'title' => 'Frontend',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
        'tags' => [
          [
            'text' => 'Angular',
            'icon' => 'angular'
          ],
          [
            'text' => 'Ngrx',
            'icon' => 'ngrx'
          ],
          [
            'text' => 'React',
            'icon' => 'react'
          ],
          [
            'text' => 'Redux',
            'icon' => 'redux'
          ],
          [
            'text' => 'Ionic',
            'icon' => 'ionic'
          ],
          [
            'text' => 'TailwindCSS',
            'icon' => 'tailwind'
          ],
          [
            'text' => 'Bootstrap',
            'icon' => 'bootstrap'
          ],
          [
            'text' => 'Socket.io',
            'icon' => 'socketio'
          ],
        ]
      ],
      "backend" => [
        'title' => 'Backend',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [
          [
            'text' => 'Nest.js',
            'icon' => 'nestjs'
          ],
          [
            'text' => 'Express.js',
            'icon' => 'express'
          ],
          [
            'text' => 'Node.js',
            'icon' => 'nodejs'
          ],
          [
            'text' => 'Laravel',
            'icon' => 'laravel'
          ],
          [
            'text' => 'Symfony',
            'icon' => 'symfony'
          ]
        ]
      ],
      "languages" => [
        'title' => 'Languages and code',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [

          [
            'text' => 'HTML',
            'icon' => 'html'
          ],
          [
            'text' => 'CSS',
            'icon' => 'css'
          ],
          [
            'text' => 'Sass / Scss',
            'icon' => 'sass'
          ],
          [
            'text' => 'Javascript',
            'icon' => 'javascript'
          ],
          [
            'text' => 'Typescript',
            'icon' => 'typescript'
          ],
          [
            'text' => 'PHP',
            'icon' => 'php'
          ],
          [
            'text' => 'Python',
            'icon' => 'python'
          ]

        ]
      ],
      "database" => [
        'title' => 'Database',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [
              [
            'text' => 'Postgresql',
            'icon' => 'postgresql'
          ],
          [
            'text' => 'Mysql',
            'icon' => 'mysql'
          ],
          [
            'text' => 'Mongodb',
            'icon' => 'mongodb'
          ]
        ]
      ],
      "design" => [
        'title' => 'Design',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      ],
      "others" => [
        'title' => 'Others',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      ]

    );

    $this->add_to_context([
      'skills' => $skills,
    ]);
  }
}
