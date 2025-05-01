<?php

namespace App\Classes;

use Timber\Timber;
use ReflectionClass;


abstract class PageBaseController
{
  /** Archivo de plantilla fijo que usará WP, p.ej. "plantilla-contacto.php" */
  public static string $template_file;

  /** Nombre legible en el selector de WP */
  public static string $template_name;

  protected $context;
  protected $view;

  public function __construct()
  {
    $this->context = Timber::context();
    $this->initialize();
  }

  abstract protected function initialize();

  public function render()
  {
    Timber::render($this->view, $this->context);
  }

  protected function add_to_context(array $data)
  {
    $this->context = array_merge($this->context, $data);
  }

  public static function get_page_template(): array
  {
    $rc       = new ReflectionClass(static::class);
    $defaults = $rc->getDefaultProperties();

    if (! empty($defaults['template_file']) && ! empty($defaults['template_name'])) {
      return [
        $defaults['template_file'] => $defaults['template_name']
      ];
    }

    return [];
  }


}
