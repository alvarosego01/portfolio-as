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
    $this->add_to_context([
      'title' => 'ASTopTalent - Home',
    ]);
  }

  function setSKills(){

    $skills = array(
      "frontend" => [

      ],
      "backend" => [

      ],
      "other" => [

      ]

    );

    $this->add_to_context([
      'skills' => $skills,
    ]);

  }

}

