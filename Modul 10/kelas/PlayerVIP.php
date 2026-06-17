<?php

require_once('AkunGame.php');

class PlayerVIP extends AkunGame
{
    protected $vipLevel;

    // constructor child
    public function __construct($username, $level, $diamond, $vipLevel)
    {
        parent::__construct($username, $level, $diamond);

        $this->vipLevel = $vipLevel;
    }

    // getter vip
    public function getVipLevel()
    {
        return $this->vipLevel;
    }

    // bonus diamond
    public function bonusDiamond()
    {
        $this->diamond += 1000;
    }

    // override method parent
    public function statusAkun()
    {
        return "Plater VIP";
    }

    public function tampilInfo()
    {
        return parent::tampilInfo() .
        " | Status VIP : " . $this->vipLevel;
    }
}

?>