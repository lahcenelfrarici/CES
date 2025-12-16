<?php

namespace Drupal\vimeo_integration\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\vimeo_integration\VimeoClient;

/**
 * Controller pour afficher les vidéos Vimeo.
 */
class VimeoController extends ControllerBase {

  protected $vimeoClient;

  public function __construct(VimeoClient $vimeoClient) {
    $this->vimeoClient = $vimeoClient;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('vimeo_integration.client')
    );
  }

  /**
   * Page /vimeo/videos
   */
  public function videosPage() {
    $videos = $this->vimeoClient->getVideos(6);
    dump( $videos);

    $output = '<div class="vimeo-gallery" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:20px;">';

    foreach ($videos as $video) {
      $title = htmlspecialchars($video['name'], ENT_QUOTES, 'UTF-8');
      $thumbnail = $video['pictures']['sizes'][3]['link'] ?? '';
      $link = $video['link'];

      $output .= "
        <div class='vimeo-item' style='text-align:center'>
          <a href='{$link}' target='_blank'>
            <img src='{$thumbnail}' alt='{$title}' style='width:100%;border-radius:10px;' />
            <h4 style='margin-top:10px;'>{$title}</h4>
          </a>
        </div>
      ";
    }

    $output .= '</div>';

    return [
      '#markup' => $output,
    ];
  }

}
