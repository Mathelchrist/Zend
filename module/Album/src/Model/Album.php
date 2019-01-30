<?php
/**
 * Created by PhpStorm.
 * User: wilder6
 * Date: 29/01/19
 * Time: 16:51
 */

namespace Album\Model;


class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['artist']) ? $data['artist'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
    }
}