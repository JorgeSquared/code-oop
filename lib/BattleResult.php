<?php


class BattleResult
{
	private $usedJediPowers;

	private $winningShip;

	private $losingShip;

	public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip)
	{
		$this->usedJediPowers = $usedJediPowers;
		$this->winningShip = $winningShip;
		$this->losingShip = $losingShip;
	}

	/**
	 * @return Ship
	 */
	public function getWinningShip()
	{
		return $this->winningShip;
	}

	/**
	 * @return boolean
	 */
	public function wereJediPowersUSed()
	{
		return $this->usedJediPowers;
	}

	/**
	 * @return Ship
	 */
	public function getLosingShip()
	{
		return $this->losingShip;
	}


}