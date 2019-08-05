<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from /home/jon/local/civicrm-buildkit/build/dmaster/sites/all/modules/civicrm/tools/extensions/com.megaphonetech.fastactionlinks/xml/schema/CRM/Fastactionlinks/FastActionLink.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a5bcd6718dbda13fbfb5863e35bfa675)
 */

/**
 * Database access object for the FastActionLink entity.
 */
class CRM_Fastactionlinks_DAO_FastActionLink extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_fast_action_link';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique FastActionLink ID
   *
   * @var int
   */
  public $id;

  /**
   * Which profile this link is associated with.  NULL indicates "default search".
   *
   * @var int
   */
  public $uf_group_id;

  /**
   * The action associated with this link. E.g. addToGroup, removeFromGroup.
   *
   * @var string
   */
  public $action_type;

  /**
   * This is the displayed text for the link.
   *
   * @var string
   */
  public $label;

  /**
   * An internal description of this link.
   *
   * @var string
   */
  public $description;

  /**
   * This is the text in the success message when the link is clicked.
   *
   * @var string
   */
  public $success_message;

  /**
   * This is the text displayed when you hover the mouse over the link.  It's a good place to put instructions.
   *
   * @var string
   */
  public $hovertext;

  /**
   * If the action requires an entity ID, it is stored here.
   *
   * @var int
   */
  public $action_entity_id;

  /**
   * Should this link be disabled and the corresponding search result dimmed on click?
   *
   * @var bool
   */
  public $dim_on_use;

  /**
   * Pop up a confirmation box when clicking this link?
   *
   * @var bool
   */
  public $confirm;

  /**
   * Is this link currently active?  If not, do not show.
   *
   * @var bool
   */
  public $is_active;

  /**
   * Controls order in which links appear.
   *
   * @var int
   */
  public $weight;

  /**
   * What template do we want to show these links on?
   *
   * @var string
   */
  public $location;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_fast_action_link';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'uf_group_id', 'civicrm_uf_group', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Unique FastActionLink ID'),
          'required' => TRUE,
          'where' => 'civicrm_fast_action_link.id',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'uf_group_id' => [
          'name' => 'uf_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Profile ID'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Which profile this link is associated with.  NULL indicates "default search".'),
          'where' => 'civicrm_fast_action_link.uf_group_id',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Fastactionlinks_PseudoConstant::searchViews',
          ],
        ],
        'action_type' => [
          'name' => 'action_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Action Type'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('The action associated with this link. E.g. addToGroup, removeFromGroup.'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_fast_action_link.action_type',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Fastactionlinks_PseudoConstant::actionTypes',
          ],
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Label'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('This is the displayed text for the link.'),
          'required' => TRUE,
          'maxlength' => 32,
          'size' => CRM_Utils_Type::MEDIUM,
          'where' => 'civicrm_fast_action_link.label',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Description'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('An internal description of this link.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_fast_action_link.description',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'success_message' => [
          'name' => 'success_message',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Success Message'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('This is the text in the success message when the link is clicked.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_fast_action_link.success_message',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'hovertext' => [
          'name' => 'hovertext',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Hover Text'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('This is the text displayed when you hover the mouse over the link.  It\'s a good place to put instructions.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_fast_action_link.hovertext',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'action_entity_id' => [
          'name' => 'action_entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Action Entity ID'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('If the action requires an entity ID, it is stored here.'),
          'where' => 'civicrm_fast_action_link.action_entity_id',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'dim_on_use' => [
          'name' => 'dim_on_use',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Dim on Use'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Should this link be disabled and the corresponding search result dimmed on click?'),
          'where' => 'civicrm_fast_action_link.dim_on_use',
          'default' => '1',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'confirm' => [
          'name' => 'confirm',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Confirm'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Pop up a confirmation box when clicking this link?'),
          'where' => 'civicrm_fast_action_link.confirm',
          'default' => '0',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Action Link Is Active'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Is this link currently active?  If not, do not show.'),
          'where' => 'civicrm_fast_action_link.is_active',
          'default' => '1',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Order'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('Controls order in which links appear.'),
          'required' => TRUE,
          'where' => 'civicrm_fast_action_link.weight',
          'default' => '1',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
        'location' => [
          'name' => 'location',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Fastactionlinks_ExtensionUtil::ts('Location'),
          'description' => CRM_Fastactionlinks_ExtensionUtil::ts('What template do we want to show these links on?'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_fast_action_link.location',
          'table_name' => 'civicrm_fast_action_link',
          'entity' => 'FastActionLink',
          'bao' => 'CRM_Fastactionlinks_DAO_FastActionLink',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'fast_action_link', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'fast_action_link', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
