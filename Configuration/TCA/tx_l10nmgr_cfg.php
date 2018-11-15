<?php
$l10n = 'LLL:EXT:l10nmgr/Resources/Private/Language/locallang_db.xlf';
return array(
  'ctrl' => array(
    'title' => $l10n . ':tx_l10nmgr_cfg',
    'label' => 'title',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'cruser_id' => 'cruser_id',
    'default_sortby' => 'ORDER BY title',
    'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('l10nmgr') . 'Resources/Public/Icons/icon_tx_l10nmgr_cfg.gif',
    'requestUpdate' => 'depth',
  ),
  'feInterface' => array(
    'fe_admin_fieldList' => 'title, depth, tablelist, exclude',
  ),
  'interface' => array(
    'showRecordFieldList' => 'title,depth,pages,sourceLangStaticId,tablelist,exclude,incfcewithdefaultlanguage,pretranslatecontent,overrideexistingtranslations'
  ),
  'columns' => array(
    'title' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.title',
      'config' => array(
        'type' => 'input',
        'size' => '48',
        'eval' => 'required',
      )
    ),
    'filenameprefix' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.filenameprefix',
      'config' => array(
        'type' => 'input',
        'size' => '48',
        'eval' => 'required',
      )
    ),
    'depth' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.depth',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array($l10n . ':tx_l10nmgr_cfg.depth.I.0', '0'),
          array($l10n . ':tx_l10nmgr_cfg.depth.I.1', '1'),
          array($l10n . ':tx_l10nmgr_cfg.depth.I.2', '2'),
          array($l10n . ':tx_l10nmgr_cfg.depth.I.3', '3'),
          array($l10n . ':tx_l10nmgr_cfg.depth.I.4', '100'),
          array($l10n . ':tx_l10nmgr_cfg.depth.I.-1', '-1'),
          //array($l10n . ':tx_l10nmgr_cfg.depth.I.-2', '-2')
        ),
        'size' => 1,
        'maxitems' => 1,
      )
    ),
    'pages' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.pages',
      //'displayCond' => 'FIELD:depth:<=:-2',
      'config' => array(
        'type' => 'group',
        'internal_type' => 'db',
        'allowed' => 'pages',
        'size' => 5,
        'maxitems' => 100
      )
    ),
    'displaymode' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.displaymode',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array($l10n . ':tx_l10nmgr_cfg.displaymode.I.0', '0'),
          array($l10n . ':tx_l10nmgr_cfg.displaymode.I.1', '1'),
          array($l10n . ':tx_l10nmgr_cfg.displaymode.I.2', '2'),
        ),
        'size' => 1,
        'maxitems' => 1,
      )
    ),
    'tablelist' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.tablelist',
      'config' => array(
        'type' => 'select',
        'special' => 'tables',
        'size' => '5',
        'autoSizeMax' => 50,
        'maxitems' => 100,
        'renderMode' => $GLOBALS['TYPO3_CONF_VARS']['BE']['accessListRenderMode'],
        'iconsInOptionTags' => 1,
      )
    ),
    'exclude' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.exclude',
      'config' => array(
        'type' => 'text',
        'cols' => '48',
        'rows' => '3',
      )
    ),
    'include' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.include',
      'config' => array(
        'type' => 'text',
        'cols' => '48',
        'rows' => '3',
      )
    ),
    'metadata' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.metadata',
      'config' => array(
        'readOnly' => 1,
        'type' => 'text',
        'cols' => '48',
        'rows' => '3',
      )
    ),
    'sourceLangStaticId' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.sourceLang',
      'config' => array(
        'type' => 'select',
        'items' => array(
          array('', 0),
        ),
        'foreign_table' => 'static_languages',
        'foreign_table_where' => 'AND static_languages.pid=0 ORDER BY static_languages.lg_name_en',
        'size' => 1,
        'minitems' => 0,
        'maxitems' => 1,
      )
    ),
    'incfcewithdefaultlanguage' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.incfcewithdefaultall',
      'config' => array(
        'type' => 'check',
        'default' => '0'
      )
    ),
    'pretranslatecontent' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.pretranslatecontent',
      'config' => array(
        'type' => 'check',
        'default' => '0'
      )
    ),
    'overrideexistingtranslations' => array(
      'exclude' => 1,
      'label' => $l10n . ':tx_l10nmgr_cfg.overrideexistingtranslations',
      'config' => array(
        'type' => 'check',
        'default' => '0'
      )
    )
  ),
  'types' => array(
    '0' => array('showitem' => 'title,filenameprefix;;;;2-2-2, depth;;;;3-3-3, pages, sourceLangStaticId, tablelist, exclude, include, metadata, displaymode, incfcewithdefaultlanguage, pretranslatecontent, overrideexistingtranslations')
  ),
  'palettes' => array(
    '1' => array('showitem' => '')
  )
);