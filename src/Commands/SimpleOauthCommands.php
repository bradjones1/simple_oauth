<?php

namespace Drupal\simple_oauth\Commands;

use Drush\Commands\DrushCommands;

/**
 * Drush commands for Simple OAuth.
 */
class SimpleOauthCommands extends DrushCommands {

  /**
   * Generate Oauth2 Keys.
   *
   * @param string $keypath
   *   The path were the key files will be saved.
   *
   * @command simple-oauth:generate-keys
   *
   * @validate-module-enabled simple_oauth
   *
   * @aliases so:generate-keys, sogk
   */
  public function generateKeys($keypath) {
    $dir_name = $keypath;
    /** @var \Drupal\simple_oauth\Service\KeyGeneratorService $key_gen */
    $key_gen = \Drupal::service('simple_oauth.key.generator');
    /** @var \Symfony\Component\Filesystem\Filesystem $file_system */
    $file_system = \Drupal::service('file_system');

    $relative_path = DRUPAL_ROOT . DIRECTORY_SEPARATOR . $dir_name;
    if (!$file_system->isDirectory($relative_path)) {
      $file_system->mkdir($relative_path);
    }
    $keys_path = $file_system->realpath($relative_path);

    $key_gen->generateKeys($keys_path);
  }

}
