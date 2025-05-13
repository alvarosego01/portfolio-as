<?php

namespace App\Classes;

use App\Classes\CarbonFields;
use DateTime;
use WP_Query;

class CertificationsPostType
{

  public $postTypeName = 'certification';
  private $fieldsCore = "/src/constants/certifications-pt-fields.json";

  public function __construct() {}

  public function __init()
  {
    $this->register();
  }

  public function register()
  {
    $labels = [
      'name'                  => __('Certifications', 'textdomain'),
      'singular_name'         => __('Certification',  'textdomain'),
      'add_new'               => __('Add New',          'textdomain'),
      'add_new_item'          => __('Add New Certification', 'textdomain'),
      'edit_item'             => __('Edit Certification',    'textdomain'),
      'new_item'              => __('New Certification',     'textdomain'),
      'view_item'             => __('View Certification',    'textdomain'),
      'search_items'          => __('Search Certifications', 'textdomain'),
      'not_found'             => __('No certifications found',          'textdomain'),
      'not_found_in_trash'    => __('No certifications in Trash',      'textdomain'),
    ];

    $args = [
      'labels'             => $labels,
      'public'             => false,      // no endpoint público
      'show_ui'            => true,       // sí en el admin
      'show_in_menu'       => true,
      'show_in_nav_menus'  => false,
      'publicly_queryable' => false,      // bloquea query vars
      'exclude_from_search' => true,
      'has_archive'        => false,
      'rewrite'            => false,
      'supports'           => ['title', 'thumbnail'],
    ];

    register_post_type($this->postTypeName, $args);
  }

  public function getAll()
  {
    $carbonFields = new CarbonFields();

    $args = array(
      'post_type'      => 'certification',
      'posts_per_page' => -1,
    );

    $query = new WP_Query($args);
    $certifications = array();

    if ($query->have_posts()) {
      $certifications = $query->posts;

      foreach ($certifications as $key => $certification) {
        // Obtenemos todos los fields definidos en $this->fieldsCore
        $certifications[$key]->fields    = $carbonFields->get_custom_postType_fields($certification->ID, $this->fieldsCore);
        // URL de la miniatura
        $certifications[$key]->thumbnail = get_the_post_thumbnail_url($certification->ID, 'full');
      }

      wp_reset_postdata();
    }

    // ——— Aquí aplicamos la ordenación por date_certification ———
    if (! empty($certifications)) {
      usort($certifications, function ($a, $b) {
        // parseamos "dd/mm/yy"
        $dateA = DateTime::createFromFormat('d/m/y', $a->fields['date_certification']);
        $dateB = DateTime::createFromFormat('d/m/y', $b->fields['date_certification']);

        // Si alguna fecha no se pudo parsear, mantenemos el orden original
        if (! $dateA || ! $dateB) {
          return 0;
        }

        // Devolvemos >0 si B es más nuevo que A (para que B vaya antes)
        return $dateB <=> $dateA;
      });
    }

    return $certifications;
  }
}
