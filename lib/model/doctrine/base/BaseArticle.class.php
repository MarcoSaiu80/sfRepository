<?php

/**
 * BaseArticle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $content
 * @property Doctrine_Collection $Comments
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getTitle()    Returns the current record's "title" value
 * @method clob                getContent()  Returns the current record's "content" value
 * @method Doctrine_Collection getComments() Returns the current record's "Comments" collection
 * @method Article             setId()       Sets the current record's "id" value
 * @method Article             setTitle()    Sets the current record's "title" value
 * @method Article             setContent()  Sets the current record's "content" value
 * @method Article             setComments() Sets the current record's "Comments" collection
 * 
 * @package    sf2
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArticle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('blog_article');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('content', 'clob', null, array(
             'type' => 'clob',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Comment as Comments', array(
             'local' => 'id',
             'foreign' => 'article_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}