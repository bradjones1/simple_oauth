<?php

namespace Drupal\simple_oauth\Repositories;

use League\OAuth2\Server\Entities\RefreshTokenEntityInterface;
use League\OAuth2\Server\Repositories\RefreshTokenRepositoryInterface;
use Drupal\simple_oauth\Entities\RefreshTokenEntity;

class RefreshTokenRepository implements RefreshTokenRepositoryInterface {

  /**
   * {@inheritdoc}
   */
  public function persistNewRefreshToken(RefreshTokenEntityInterface $refreshTokenEntityInterface) {
    // Some logic to persist the refresh token in a database
  }

  /**
   * {@inheritdoc}
   */
  public function revokeRefreshToken($tokenId) {
    // Some logic to revoke the refresh token in a database
  }

  /**
   * {@inheritdoc}
   */
  public function isRefreshTokenRevoked($tokenId) {
    return FALSE; // The refresh token has not been revoked
  }

  /**
   * {@inheritdoc}
   */
  public function getNewRefreshToken() {
    return new RefreshTokenEntity();
  }

}
