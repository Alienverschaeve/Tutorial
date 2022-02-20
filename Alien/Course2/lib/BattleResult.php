<?php
class BattleResult {
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;
// You can place ship in front of $winningShip and $losingShip as in Chapter 3 (not working here)
    public function __construct($usedJediPowers,  $winningShip,  $losingShip) {
        $this ->usedJediPowers= $usedJediPowers;
        $this -> winningShip = $winningShip;
        $this-> losingShip = $losingShip;

}
/* Rightclick-generate-getters - select all properties - OK*/
    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

}