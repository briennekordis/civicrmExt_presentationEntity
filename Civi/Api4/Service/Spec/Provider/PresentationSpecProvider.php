<?php

/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

namespace Civi\Api4\Service\Spec\Provider;

use Civi\Api4\Service\Spec\FieldSpec;
use Civi\Api4\Service\Spec\RequestSpec;

class PresentationSpecProvider implements Generic\SpecProviderInterface {

  /**
   * @inheritDoc
   */
  public function modifySpec(RequestSpec $spec) {
    $action = $spec->getAction();

    if (in_array($action, ['create', 'update'], TRUE)) {
      $field = new FieldSpec('author_contact_id', 'Presentation', 'Integer');
      $field->setTitle(ts('Presentation Author'));
      $field->setLabel(ts('Presentation Author'));
      $field->setDescription(ts('Author of original presentation'));
      $field->setRequired($action === 'create');
      $field->setFkEntity('Contact');
      $field->setInputType('EntityRef');
      $field->setInputAttrs(['multiple' => TRUE]);
      $spec->addFieldSpec($field);
    }

  }

  /**
   * @inheritDoc
   */
  public function applies($entity, $action) {
    return $entity === 'Presentation';
  }

}
