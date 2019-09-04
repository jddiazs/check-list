<?php

/**
 * BaseCriteria
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int        $id                          Type: integer, primary key
 * @property string     $name                        Type: string(255)
 * @property int        $check_list_id               Type: integer
 * @property double     $weight                      Type: double
 * @property CheckList  $CheckList                   
 *  
 * @method int          getId()                      Type: integer, primary key
 * @method string       getName()                    Type: string(255)
 * @method int          getCheckListId()             Type: integer
 * @method double       getWeight()                  Type: double
 * @method CheckList    getCheckList()               
 *  
 * @method Criteria     setId(int $val)              Type: integer, primary key
 * @method Criteria     setName(string $val)         Type: string(255)
 * @method Criteria     setCheckListId(int $val)     Type: integer
 * @method Criteria     setWeight(double $val)       Type: double
 * @method Criteria     setCheckList(CheckList $val) 
 *  
 * @package    check-list
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCriteria extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('criteria');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('check_list_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('weight', 'double', null, array(
             'type' => 'double',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('CheckList', array(
             'local' => 'check_list_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}