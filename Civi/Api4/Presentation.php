<?php
namespace Civi\Api4;

/**
 * Presentation entity.
 *
 * Provided by the FIXME extension.
 *
 * @package Civi\Api4
 */
class Presentation extends Generic\DAOEntity {

  /**
   * @param bool $checkPermissions
   * @return Action\Presentation\Create
   */
  public static function create($checkPermissions = TRUE) {
    return (new Action\Presentation\Create(__CLASS__, __FUNCTION__))
      ->setCheckPermissions($checkPermissions);
  }

  /**
   * @param bool $checkPermissions
   * @return Action\Presentation\Save
   */
  public static function save($checkPermissions = TRUE) {
    return (new Action\Presentation\Save(__CLASS__, __FUNCTION__))
      ->setCheckPermissions($checkPermissions);
  }

  /**
   * @param bool $checkPermissions
   * @return Action\Presentation\Update
   */
  public static function update($checkPermissions = TRUE) {
    return (new Action\Presentation\Update(__CLASS__, __FUNCTION__))
      ->setCheckPermissions($checkPermissions);
  }

}
