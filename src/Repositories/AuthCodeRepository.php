<?php

namespace Drupal\simple_oauth\Repositories;

use League\OAuth2\Server\Entities\AuthCodeEntityInterface;
use League\OAuth2\Server\Repositories\AuthCodeRepositoryInterface;
use Drupal\simple_oauth\Entities\AuthCodeEntity;

class AuthCodeRepository implements AuthCodeRepositoryInterface {

  /**
   * {@inheritdoc}
   */
  public function persistNewAuthCode(AuthCodeEntityInterface $authCodeEntity) {
    // Some logic to persist the auth code to a database
  }

  /**
   * {@inheritdoc}
   */
  public function revokeAuthCode($codeId) {
    // Some logic to revoke the auth code in a database
  }

  /**
   * {@inheritdoc}
   */
  public function isAuthCodeRevoked($codeId) {
    return FALSE; // The auth code has not been revoked
  }

  /**
   * {@inheritdoc}
   */
  public function getNewAuthCode() {
    return new AuthCodeEntity();
  }

}
