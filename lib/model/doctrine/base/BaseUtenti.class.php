<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Utenti', 'doctrine');

/**
 * BaseUtenti
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nome
 * @property string $cognome
 * @property Indirizzo $Indirizzo
 * 
 * @method integer   getId()        Returns the current record's "id" value
 * @method string    getNome()      Returns the current record's "nome" value
 * @method string    getCognome()   Returns the current record's "cognome" value
 * @method Indirizzo getIndirizzo() Returns the current record's "Indirizzo" value
 * @method Utenti    setId()        Sets the current record's "id" value
 * @method Utenti    setNome()      Sets the current record's "nome" value
 * @method Utenti    setCognome()   Sets the current record's "cognome" value
 * @method Utenti    setIndirizzo() Sets the current record's "Indirizzo" value
 * 
 * @package    sf2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUtenti extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('utenti');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('nome', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cognome', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Indirizzo', array(
             'local' => 'indirizzo_id',
             'foreign' => 'id'));
    }
}