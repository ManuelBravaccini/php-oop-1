<?php
class Movie
{
    public $name;
    public $director;
    public $genre;
    public $metaDataList;

    public function __construct($_name, $_director, $_genre, MetaData $_metaDataList)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->metaDataList = $_metaDataList;
    }
}
