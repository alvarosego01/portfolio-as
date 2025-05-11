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
            'text' => 'Material UI',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/materialui/materialui-original.svg"
          ],
          [
            'text' => 'Bootstrap',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/bootstrap/bootstrap-original.svg"
          ],
          [
            'text' => 'jQuery',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/jquery/jquery-original.svg"
          ],
          [
            'text' => 'Alpine.js',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/alpinejs/alpinejs-original.svg",
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'Socket.io',
            'icon' => $this->general_functions->get_file('/icons/socket.io.svg'),

          ],
        ]
      ],
      "backend" => [
        'title' => 'Backend',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
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
            'text' => 'Feathers.js',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/feathersjs/feathersjs-original.svg",
            "iconClass" => "bg-white"
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
          ],
          [
            'text' => 'Codeigniter',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/codeigniter/codeigniter-plain.svg"
          ],
          [
            'text' => 'Prisma',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/prisma/prisma-original.svg",
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'MikroORM',
            'icon' => $this->general_functions->get_file('/icons/mikro-orm.svg')
            // "iconClass" => "bg-white"
          ],
          [
            'text' => 'TypeORM',
            'icon' => $this->general_functions->get_file('/icons/typeorm.svg')
          ],
          [
            'text' => 'Socket.io',
            'icon' => $this->general_functions->get_file('/icons/socket.io.svg')
          ],
        ]
      ],

      "languages" => [
        'title' => 'Languages and code',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
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
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
        'tags' => [
          [
            'text' => 'Postgresql',
            // 'icon' => $this->general_functions->get_file('/icons/angular.svg')
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/postgresql/postgresql-original.svg"
          ],
          [
            'text' => 'Mysql',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/mysql/mysql-original.svg",
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'MariaDB',
            'icon' => $this->general_functions->get_file('/icons/mariadb.svg'),
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'Mongodb',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/mongodb/mongodb-original.svg"
          ],
          [
            'text' => 'DynamoDB',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/dynamodb/dynamodb-original.svg"
          ]
        ]
      ],
      "design" => [
        'title' => 'Workflow and design',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
        'tags' => [
          [
            'text' => 'Github',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/github/github-original.svg",
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'Bitbucket',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/bitbucket/bitbucket-original.svg",
          ],
          [
            'text' => 'Gitlab',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/gitlab/gitlab-original.svg",
          ],
          [
            'text' => 'Jira',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/jira/jira-original.svg"
          ],
          [
            'text' => 'Trello',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/trello/trello-original.svg"
          ],
          [
            'text' => 'Asana',
            'icon' => $this->general_functions->get_file('/icons/asana.svg')
          ],
          [
            'text' => 'Figma',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/figma/figma-original.svg"
          ],
          [
            'text' => 'Miro',
            'icon' => $this->general_functions->get_file('/icons/miro.svg')
          ],
          [
            'text' => 'Canva',
            'icon' => $this->general_functions->get_file('/icons/canva.svg')
          ]
        ]
      ],
      "others" => [
        'title' => 'Others',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. amet, consectetur adipiscing elit',
        'tags' => [
          [
            'text' => 'Docker',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/docker/docker-original.svg"
          ],
          [
            'text' => 'Insomnia',
            'icon' => $this->general_functions->get_file('/icons/insomnia.svg')
          ],
          [
            'text' => 'Postman',
            'icon' => $this->general_functions->get_file('/icons/postman.svg')
          ],
          [
            'text' => 'Apache',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/apache/apache-original.svg",
            "iconClass" => "bg-white"
          ],
          [
            'text' => 'Nginx',
            'icon' => $this->general_functions->get_file('/icons/nginx.svg')
          ],
          [
            'text' => 'Npm',
            'icon' => $this->general_functions->get_file('/icons/npm.svg')
          ],
          [
            'text' => 'Pnpm',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/pnpm/pnpm-original.svg"
          ],
          [
            'text' => 'Yarn',
            'icon' => $this->general_functions->get_file('/icons/yarn.svg')
          ],
          [
            'text' => 'Composer',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/composer/composer-original.svg"
          ],
          [
            'text' => 'Vite',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/vitejs/vitejs-original.svg"
          ],
          [
            'text' => 'Webpack',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/webpack/webpack-original.svg"
          ],
          [
            'text' => 'Gulp',
            'icon' => "https://cdn.jsdelivr.net/npm/devicon@2.16.0/icons/gulp/gulp-plain.svg"
          ],
        ]
      ]

    );

    $this->add_to_context([
      'skills' => $skills,
    ]);
  }
}
