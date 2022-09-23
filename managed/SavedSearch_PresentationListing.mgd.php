<?php
return [
  [
    'name' => 'SavedSearch_Presentation_Listing',
    'entity' => 'SavedSearch',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Presentation_Listing',
        'label' => 'Presentation Listing',
        'form_values' => NULL,
        'mapping_id' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'Presentation',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'topic_id:label',
            'date',
            'title',
            'duration',
            'notes',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
        'expires_date' => NULL,
        'description' => NULL,
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Presentation_Listing_SearchDisplay_Presentation_Listing_Table_1',
    'entity' => 'SearchDisplay',
    'cleanup' => 'unused',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Presentation_Listing_Table_1',
        'label' => 'Presentation Listing Table 1',
        'saved_search_id.name' => 'Presentation_Listing',
        'type' => 'table',
        'settings' => [
          'actions' => TRUE,
          'limit' => '50',
          'classes' => [
            'table',
            'table-striped',
          ],
          'pager' => [],
          'placeholder' => 5,
          'sort' => [
            [
              'topic_id:label',
              'ASC',
            ],
            [
              'date',
              'DESC',
            ],
          ],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'topic_id:label',
              'dataType' => 'Integer',
              'label' => 'Topic',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'date',
              'dataType' => 'Date',
              'label' => 'Original presentation date',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'title',
              'dataType' => 'String',
              'label' => 'Title',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'duration',
              'dataType' => 'Integer',
              'label' => 'Duration',
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'Integer',
              'label' => 'Link to presentation',
              'sortable' => FALSE,
              'link' => [
                'path' => 'civicrm/presentation/#?id=[id]',
                'entity' => '',
                'action' => '',
                'join' => '',
                'target' => '_blank',
              ],
              'rewrite' => 'Find out more / download',
            ],
          ],
        ],
        'acl_bypass' => FALSE,
      ],
    ],
  ],
];
