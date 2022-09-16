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

namespace Civi\Api4\Action\Presentation;

trait PresentationSaveTrait {

  protected function write(array $items) {
    $result = parent::write($items);
    $contacts = [];
    foreach ($items[0]['author_contact_id'] as $key => $authorId) {
      if ($authorId) {
        $contacts[] = ['contact_id' => $authorId];
      }
    }
    \Civi\Api4\PresentationAuthor::save(FALSE)
      ->setRecords($contacts)
      ->setDefaults(['presentation_id' => $result[0]->id])
      ->setMatch(['presentation_id', 'contact_id'])
      ->execute();

    return $result;
  }

}
