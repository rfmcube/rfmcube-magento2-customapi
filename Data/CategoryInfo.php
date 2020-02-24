<?php

namespace Rfmcube\Customapi\Data;

class CategoryInfo {

    protected $id;
    protected $parentId;
    protected $name;
    protected $tree;

    /**
     *
     * @return integer
     */
    function getId() {
        return $this->id;
    }

    /**
     *
     * @return integer
     */
    function getParentId() {
        return $this->parentId;
    }

    /**
     *
     * @return string
     */
    function getName() {
        return $this->name;
    }

    /**
     *
     * @return integer[]
     */
    function getTree() {
        return $this->tree;
    }

    /**
     *
     * @param int $id
     * @return
     */
    function setId($id) {
        $this->id = $id;
    }

    /**
     *
     * @param int $parentId
     * @return
     */
    function setParentId($parentId) {
        $this->parentId = $parentId;
    }

    /**
     *
     * @param string $name
     * @return
     */
    function setName($name) {
        $this->name = $name;
    }

    /**
     *
     * @param integer[] $tree
     * @return
     */
    function setTree($tree) {
        $this->tree = $tree;
    }

}
