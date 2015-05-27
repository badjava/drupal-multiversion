<?php

/**
 * @file
 * Contains \Drupal\multiversion\Cache\WorkspaceCacheContext.
 */

namespace Drupal\multiversion;

use Drupal\Core\Cache\CacheContextInterface;
use Drupal\multiversion\Workspace\WorkspaceManagerInterface;

/**
 * Defines the WorkspaceCacheContext service, for "per workspace" caching.
 */
class WorkspaceCacheContext implements CacheContextInterface {

  /**
   * The workspace manager.
   *
   * @var \Drupal\multiversion\Workspace\WorkspaceManagerInterface
   */
  protected $workspaceManager;

  /**
   * Constructs a new WorkspaceCacheContext service.
   *
   * @param \Drupal\multiversion\Workspace\WorkspaceManagerInterface $workspace_manager
   *   The workspace manager.
   */
  public function __construct(WorkspaceManagerInterface $workspace_manager) {
    $this->workspaceManager = $workspace_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function getLabel() {
    return t('Workspace');
  }

  /**
   * {@inheritdoc}
   */
  public function getContext() {
    return 'ws.' . $this->workspaceManager->getActiveWorkspace()->id();
  }

}
