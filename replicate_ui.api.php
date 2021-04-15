<?php
/**
 * Alter access check for replication.
 *
 * This hook allows you to alter access check for replication, which by default
 * grants replication permission to users who have view and create permission
 * for the given entity as well as the permission to replicate entities
 * see replicate_ui_access().
 *
 * @param $access - boolean access result
 * @param $type - entity type
 * @param $entity - loaded entity
 */

function hook_replicate_ui_access_check_alter(&$access, $type, $entity) {
  // Do not allow to replicate a specific node type, although user might
  // have create and replicate permissions.
  if($type == 'node' && $entity->type == 'article') {
    $access = FALSE;
  }
}
