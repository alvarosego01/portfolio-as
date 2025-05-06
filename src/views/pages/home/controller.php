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
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
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
            'text' => 'Tailwind',
            'icon' => 'tailwind'
          ],
          [
            'text' => 'Bootstrap',
            'icon' => 'bootstrap'
          ],
          [
            'text' => 'Socketio',
            'icon' => 'socketio'
          ],
        ]
      ],
      "backend" => [
        'title' => 'Backend',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      ],
      "languages" => [
        'title' => 'Languages and code',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      ],
      "database" => [
        'title' => 'Database',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
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
