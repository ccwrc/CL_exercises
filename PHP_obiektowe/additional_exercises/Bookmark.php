<?php

class Bookmark {
    public $pageNumber;

    public function __construct($pageNumber) {
        $this->setPageNumber($pageNumber);
    }

    public function setPageNumber($pageNumber) {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    public function getPageNumber() {
        return $this->pageNumber;
    }

}
