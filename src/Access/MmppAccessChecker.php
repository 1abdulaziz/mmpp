<?php

namespace Drupal\mmpp\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Checks if passed parameter matches the route configuration.
 *
 * @DCG
 * To make use of this access checker add '_mmpp_access' entry to route
 * definition under requirements section.
 */
class MmppAccessChecker implements AccessInterface {

  /**
   * Access callback.
   * @return \Drupal\Core\Access\AccessResultInterface
   *   The access results.
   */
  public function access(AccountInterface $account) {
    return AccessResult::allowed();
  }

}
