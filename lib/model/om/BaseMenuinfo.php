<?php

/**
 * Base class that represents a row from the 'menuinfo' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Aug 18 19:18:25 2013
 *
 * @package    lib.model.om
 */
abstract class BaseMenuinfo extends BaseObject  implements Persistent {


  const PEER = 'MenuinfoPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        MenuinfoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the menuname field.
	 * Note: this column has a database default value of: 'null'
	 * @var        string
	 */
	protected $menuname;

	/**
	 * The value for the menutype field.
	 * @var        int
	 */
	protected $menutype;

	/**
	 * The value for the menu_link field.
	 * Note: this column has a database default value of: '1'
	 * @var        string
	 */
	protected $menu_link;

	/**
	 * The value for the parent_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $parent_id;

	/**
	 * The value for the shopinfo_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $shopinfo_id;

	/**
	 * @var        Shopinfo
	 */
	protected $aShopinfo;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseMenuinfo object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->menuname = 'null';
		$this->menu_link = '1';
		$this->parent_id = 0;
		$this->shopinfo_id = 0;
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [menuname] column value.
	 * 
	 * @return     string
	 */
	public function getMenuname()
	{
		return $this->menuname;
	}

	/**
	 * Get the [menutype] column value.
	 * 
	 * @return     int
	 */
	public function getMenutype()
	{
		return $this->menutype;
	}

	/**
	 * Get the [menu_link] column value.
	 * 
	 * @return     string
	 */
	public function getMenuLink()
	{
		return $this->menu_link;
	}

	/**
	 * Get the [parent_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentId()
	{
		return $this->parent_id;
	}

	/**
	 * Get the [shopinfo_id] column value.
	 * 
	 * @return     int
	 */
	public function getShopinfoId()
	{
		return $this->shopinfo_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = MenuinfoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [menuname] column.
	 * 
	 * @param      string $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setMenuname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->menuname !== $v || $v === 'null') {
			$this->menuname = $v;
			$this->modifiedColumns[] = MenuinfoPeer::MENUNAME;
		}

		return $this;
	} // setMenuname()

	/**
	 * Set the value of [menutype] column.
	 * 
	 * @param      int $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setMenutype($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->menutype !== $v) {
			$this->menutype = $v;
			$this->modifiedColumns[] = MenuinfoPeer::MENUTYPE;
		}

		return $this;
	} // setMenutype()

	/**
	 * Set the value of [menu_link] column.
	 * 
	 * @param      string $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setMenuLink($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->menu_link !== $v || $v === '1') {
			$this->menu_link = $v;
			$this->modifiedColumns[] = MenuinfoPeer::MENU_LINK;
		}

		return $this;
	} // setMenuLink()

	/**
	 * Set the value of [parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v || $v === 0) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = MenuinfoPeer::PARENT_ID;
		}

		return $this;
	} // setParentId()

	/**
	 * Set the value of [shopinfo_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Menuinfo The current object (for fluent API support)
	 */
	public function setShopinfoId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->shopinfo_id !== $v || $v === 0) {
			$this->shopinfo_id = $v;
			$this->modifiedColumns[] = MenuinfoPeer::SHOPINFO_ID;
		}

		if ($this->aShopinfo !== null && $this->aShopinfo->getId() !== $v) {
			$this->aShopinfo = null;
		}

		return $this;
	} // setShopinfoId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array(MenuinfoPeer::MENUNAME,MenuinfoPeer::MENU_LINK,MenuinfoPeer::PARENT_ID,MenuinfoPeer::SHOPINFO_ID))) {
				return false;
			}

			if ($this->menuname !== 'null') {
				return false;
			}

			if ($this->menu_link !== '1') {
				return false;
			}

			if ($this->parent_id !== 0) {
				return false;
			}

			if ($this->shopinfo_id !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->menuname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->menutype = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->menu_link = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->parent_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->shopinfo_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 6; // 6 = MenuinfoPeer::NUM_COLUMNS - MenuinfoPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Menuinfo object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aShopinfo !== null && $this->shopinfo_id !== $this->aShopinfo->getId()) {
			$this->aShopinfo = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuinfoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = MenuinfoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aShopinfo = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseMenuinfo:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuinfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			MenuinfoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseMenuinfo:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseMenuinfo:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MenuinfoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseMenuinfo:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			MenuinfoPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aShopinfo !== null) {
				if ($this->aShopinfo->isModified() || $this->aShopinfo->isNew()) {
					$affectedRows += $this->aShopinfo->save($con);
				}
				$this->setShopinfo($this->aShopinfo);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = MenuinfoPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = MenuinfoPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += MenuinfoPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aShopinfo !== null) {
				if (!$this->aShopinfo->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aShopinfo->getValidationFailures());
				}
			}


			if (($retval = MenuinfoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MenuinfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMenuname();
				break;
			case 2:
				return $this->getMenutype();
				break;
			case 3:
				return $this->getMenuLink();
				break;
			case 4:
				return $this->getParentId();
				break;
			case 5:
				return $this->getShopinfoId();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = MenuinfoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMenuname(),
			$keys[2] => $this->getMenutype(),
			$keys[3] => $this->getMenuLink(),
			$keys[4] => $this->getParentId(),
			$keys[5] => $this->getShopinfoId(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MenuinfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMenuname($value);
				break;
			case 2:
				$this->setMenutype($value);
				break;
			case 3:
				$this->setMenuLink($value);
				break;
			case 4:
				$this->setParentId($value);
				break;
			case 5:
				$this->setShopinfoId($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MenuinfoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMenuname($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMenutype($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setMenuLink($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setParentId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setShopinfoId($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(MenuinfoPeer::DATABASE_NAME);

		if ($this->isColumnModified(MenuinfoPeer::ID)) $criteria->add(MenuinfoPeer::ID, $this->id);
		if ($this->isColumnModified(MenuinfoPeer::MENUNAME)) $criteria->add(MenuinfoPeer::MENUNAME, $this->menuname);
		if ($this->isColumnModified(MenuinfoPeer::MENUTYPE)) $criteria->add(MenuinfoPeer::MENUTYPE, $this->menutype);
		if ($this->isColumnModified(MenuinfoPeer::MENU_LINK)) $criteria->add(MenuinfoPeer::MENU_LINK, $this->menu_link);
		if ($this->isColumnModified(MenuinfoPeer::PARENT_ID)) $criteria->add(MenuinfoPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(MenuinfoPeer::SHOPINFO_ID)) $criteria->add(MenuinfoPeer::SHOPINFO_ID, $this->shopinfo_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MenuinfoPeer::DATABASE_NAME);

		$criteria->add(MenuinfoPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Menuinfo (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setMenuname($this->menuname);

		$copyObj->setMenutype($this->menutype);

		$copyObj->setMenuLink($this->menu_link);

		$copyObj->setParentId($this->parent_id);

		$copyObj->setShopinfoId($this->shopinfo_id);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Menuinfo Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     MenuinfoPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new MenuinfoPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Shopinfo object.
	 *
	 * @param      Shopinfo $v
	 * @return     Menuinfo The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setShopinfo(Shopinfo $v = null)
	{
		if ($v === null) {
			$this->setShopinfoId(0);
		} else {
			$this->setShopinfoId($v->getId());
		}

		$this->aShopinfo = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Shopinfo object, it will not be re-added.
		if ($v !== null) {
			$v->addMenuinfo($this);
		}

		return $this;
	}


	/**
	 * Get the associated Shopinfo object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Shopinfo The associated Shopinfo object.
	 * @throws     PropelException
	 */
	public function getShopinfo(PropelPDO $con = null)
	{
		if ($this->aShopinfo === null && ($this->shopinfo_id !== null)) {
			$c = new Criteria(ShopinfoPeer::DATABASE_NAME);
			$c->add(ShopinfoPeer::ID, $this->shopinfo_id);
			$this->aShopinfo = ShopinfoPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aShopinfo->addMenuinfos($this);
			 */
		}
		return $this->aShopinfo;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aShopinfo = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseMenuinfo:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseMenuinfo::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseMenuinfo