<?php

namespace Drupal\simple_oauth\Entities;

use Drupal\simple_oauth\Entity\Oauth2ClientInterface;
use League\OAuth2\Server\Entities\Traits\ClientTrait;
use League\OAuth2\Server\Entities\Traits\EntityTrait;

class ClientEntity implements ClientEntityInterface {

  use EntityTrait, ClientTrait;

  /**
   * @var \Drupal\simple_oauth\Entity\Oauth2ClientInterface
   */
  protected $entity;

  /**
   * ClientEntity constructor.
   *
   * @param \Drupal\simple_oauth\Entity\Oauth2ClientInterface $entity
   *   The Drupal entity.
   */
  public function __construct(Oauth2ClientInterface $entity) {
    $this->entity = $entity;
    $this->setIdentifier($entity->uuid());
    $this->setName($entity->label());
    if ($uri = $entity->get('redirect')) {
      $this->setRedirectUri($uri->value);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * {@inheritdoc}
   */
  public function setRedirectUri($uri) {
    $this->redirectUri = $uri;
  }

  /**
   * {@inheritdoc}
   */
  public function getEntity() {
    return $this->entity;
  }

}
