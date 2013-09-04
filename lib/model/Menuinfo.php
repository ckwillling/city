<?php

class Menuinfo extends BaseMenuinfo
{
  protected $level = 0;

  public function setLevel($lev)
  {
    $this->level = $lev;
  }

  public function getLevel()
  {
    return $this->level;
  }
}
