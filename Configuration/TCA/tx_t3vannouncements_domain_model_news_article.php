<?php
defined('TYPO3_MODE') or die('Access denied.');

$extkey    = 't3v_announcements';
$resources = "EXT:${extkey}/Resources";
$lll       = "LLL:${resources}/Private/Language/locallang_tca.xlf:";

return [
  // === Columns ===

  'columns' => [
    // --- Custom columns ---

    'name' => [
      'label' => $lll . 'tx_t3vannouncements_domain_model_news_article.name',
      'config' => [
        'type' => 'input',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim, required'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'abstract' => [
      'label' => $lll . 'tx_t3vannouncements_domain_model_news_article.abstract',
      'config' => [
        'type' => 'text',
        'eval' => 'trim, required'
      ],
      'defaultExtras' => 'richtext[]',
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'thumbnails' => [
      'label' => $lll . 'tx_t3vannouncements_domain_model_news_article.thumbnails',
      'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
        'image',
        [
          'foreign_match_fields' => [
            'fieldname' => 'thumbnails',
            'tablenames' => 'tx_t3vannouncements_domain_model_news_article',
            'table_local' => 'sys_file'
          ],
          'foreign_types' => [
            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
              'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette,
                             --palette--;;imageoverlayPalette,
                             --palette--;;filePalette'
            ]
          ],
          'minitems' => 0,
          'maxitems' => 2,
          'appearance' => [
            'showAllLocalizationLink' => true,
            'showSynchronizationLink' => true
          ]
        ],
        $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
      ),
      'l10n_mode' => 'exclude',
      'exclude' => true
    ],

    'label' => [
      'label' => $lll . 'tx_t3vannouncements_domain_model_news_article.label',
      'config' => [
        'type' => 'input',
        'size' => 42,
        'max' => 255,
        'eval' => 'trim'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'publish_date' => [
      'label' => $lll . 'tx_t3vannouncements_domain_model_news_article.publishDate',
      'config' => [
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'dbType' => 'datetime'
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'l10n_display' => 'hideDiff',
      'exclude' => true
    ],

    // --- Default TYPO3 columns ---

    'uid' => [
      'label' => 'uid',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'pid' => [
      'label' => 'pid',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'tstamp' => [
      'label' => 'tstamp',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'crdate' => [
      'label' => 'crdate',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'cruser_id' => [
      'label' => 'cruser_id',
      'config' => [
        'type' => 'passthrough'
      ]
    ],

    'starttime' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
      'config' => [
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'default' => 0,
        'range' => [
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ]
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'endtime' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
      'config' => [
        'type' => 'input',
        'size' => 13,
        'max' => 20,
        'eval' => 'datetime',
        'default' => 0,
        'range' => [
          'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
        ]
      ],
      'l10n_mode' => 'mergeIfNotBlank',
      'exclude' => true
    ],

    'hidden' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
      'config' => [
        'type' => 'check'
      ],
      'exclude' => true
    ],

    'sys_language_uid' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'special' => 'languages',
        'items' => [
          [
            'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
            -1,
            'flags-multiple'
          ],
        ],
        'default' => 0
      ],
      'exclude' => 1
    ],

    'l10n_parent' => [
      'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['', 0]
        ],
        'foreign_table' => 'tx_t3vannouncements_domain_model_news_article',
        'foreign_table_where' => 'AND tx_t3vannouncements_domain_model_news_article.pid=###CURRENT_PID### AND tx_t3vannouncements_domain_model_news_article.sys_language_uid IN (-1,0)'
      ],
      'displayCond' => 'FIELD:sys_language_uid:>:0',
      'exclude' => 1
    ],

    'l10n_diffsource' => [
      'config' => [
        'type' => 'passthrough',
        'default' => ''
      ]
    ]
  ],

  // === Ctrl ===

  'ctrl' => [
    'title' => $lll . 'tx_t3vannouncements_domain_model_news_article',
    'label' => 'name',
    // 'label_alt' => 'abstract',
    // 'label_alt_force' => 1,
    // 'descriptionColumn' => 'description',
    'iconfile' => "${resources}/Public/Icons/TCA/News/Article.svg",
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'cruser_id' => 'cruser_id',
    'origUid' => 't3_origuid',
    'languageField' => 'sys_language_uid',
    'transOrigPointerField' => 'l10n_parent',
    'transOrigDiffSourceField' => 'l10n_diffsource',
    // 'sortby' => 'sorting',
    'default_sortby' => 'ORDER BY name ASC',
    'enablecolumns' => [
      'disabled' => 'hidden',
      'starttime' => 'starttime',
      'endtime' => 'endtime'
    ],
    'searchFields' => 'name, abstract',
    'versioningWS' => true,
    'hideTable' => false
  ],

  // === Interface ===

  'interface' => [
    'showRecordFieldList' => 'name, abstract, publish_date, hidden, starttime, endtime, sys_language_uid, l10n_parent, l10n_diffsource',
    'maxDBListItems' => 50,
    'maxSingleDBListItems' => 50
  ],

  // === Types ===

  'types' => [
    0 => [
      'showitem' => '
        --palette--;;paletteGeneral, --palette--;;paletteL10n,
        --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access;, --palette--;;paletteAccess
      '
    ]
  ],

  // === Palettes ===

  'palettes' => [
    'paletteGeneral' => [
      'showitem' => '
        name, --linebreak--,
        abstract, --linebreak--,
        thumbnails, --linebreak--,
        label, --linebreak--,
        publish_date
      ',
      'columnsOverrides' => [
        'abstract' => [
          'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts_css]'
        ]
      ],
      'canNotCollapse' => true
    ],

    'paletteL10n' => [
      'showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource',
      'canNotCollapse' => true
    ],

    'paletteAccess' => [
      'showitem' => '
        hidden, --linebreak--,
        starttime, endtime
      ',
      'canNotCollapse' => true
    ]
  ]
];