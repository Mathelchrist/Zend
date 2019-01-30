<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 29/01/19
 * Time: 15:59
 */

namespace Album\Controller;

use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{

    private $table;

    // Add this constructor:
    public function __construct(AlbumTable $table)
    {
        $this->table = $table;
    }

    public function indexAction()
    {

        return new ViewModel([
            'albums' => $this->table->fetchAll(),
        ]);
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

}
