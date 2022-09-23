<?php

use CRM_Presentation_ExtensionUtil as E;

class CRM_Presentation_BAO_Presentation extends CRM_Presentation_DAO_Presentation
{

  /**
   * Create a new Presentation based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Presentation_DAO_Presentation|NULL
   *
   */
  public static function create($params)
  {
    $className = 'CRM_Presentation_DAO_Presentation';
    $entityName = 'Presentation';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  }
}
