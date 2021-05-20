<?php


class BattleResult
{
	private $usedJediPowers;

	private $winningShip;

	private $losingShip;

	public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
	{
		$this->usedJediPowers = $usedJediPowers;
		$this->winningShip = $winningShip;
		$this->losingShip = $losingShip;
	}

	/**
	 * @return Ship|null
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
	 * @return Ship|null
	 */
	public function getLosingShip()
	{
		return $this->losingShip;
	}

	public function isThereAWinner()
	{
		return $this->getWinningShip() !== null;
	}


}