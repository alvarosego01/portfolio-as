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
  }

  protected function initialize()
  {
    $this->general_functions = new generalFunctions();
    $this->setSKills();
    // $this->setSKills();
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
            'icon' => $this->general_functions->get_file('/icons/angular.svg')
          ],
          [
            'text' => 'Ngrx',
            'icon' => $this->general_functions->get_file('/icons/ngrx.svg')
          ],
          [
            'text' => 'React',
            'icon' => $this->general_functions->get_file('/icons/react.svg')
          ],
          [
            'text' => 'Redux',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/redux/redux-original.svg"
          ],
          [
            'text' => 'Ionic',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/ionic/ionic-original.svg"
          ],
          [
            'text' => 'TailwindCSS',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/tailwindcss/tailwindcss-original.svg"
          ],
          [
            'text' => 'Bootstrap',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/bootstrap/bootstrap-original.svg"
          ],
          [
            'text' => 'Socket.io',
            'icon' => $this->general_functions->get_file('/icons/socket.io.svg')
          ],
        ]
      ],
      "backend" => [
        'title' => 'Backend',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [
          [
            'text' => 'Nest.js',
            // 'icon' => $this->general_functions->get_file('/icons/angular.svg')
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/nestjs/nestjs-original.svg"
          ],
          [
            'text' => 'Express.js',
            'icon' => $this->general_functions->get_file('/icons/express.svg')
          ],
          [
            'text' => 'Node.js',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/nodejs/nodejs-original.svg"
          ],
          [
            'text' => 'Laravel',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/laravel/laravel-original.svg"
          ],
          [
            'text' => 'Symfony',
            'icon' => $this->general_functions->get_file('/icons/symfony.svg')
          ]
        ]
      ],
      "languages" => [
        'title' => 'Languages and code',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [

          [
            'text' => 'HTML',
            // 'icon' => $this->general_functions->get_file('/icons/angular.svg')
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/html5/html5-original.svg"
          ],
          [
            'text' => 'CSS',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/css3/css3-original.svg"
          ],
          [
            'text' => 'Sass / Scss',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/sass/sass-original.svg"
          ],
          [
            'text' => 'Javascript',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/javascript/javascript-original.svg"
          ],
          [
            'text' => 'Typescript',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/typescript/typescript-original.svg"
          ],
          [
            'text' => 'PHP',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/php/php-original.svg"
          ],
          [
            'text' => 'Python',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/python/python-original.svg"
          ]

        ]
      ],
      "database" => [
        'title' => 'Database',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tags' => [
              [
            'text' => 'Postgresql',
            // 'icon' => $this->general_functions->get_file('/icons/angular.svg')
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/postgresql/postgresql-original.svg"
          ],
          [
            'text' => 'Mysql',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/mysql/mysql-original.svg"
          ],
          [
            'text' => 'MariaDB',
            'icon' => $this->general_functions->get_file('/icons/mariadb.svg')
          ],
          [
            'text' => 'Mongodb',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/mongodb/mongodb-original.svg"
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
