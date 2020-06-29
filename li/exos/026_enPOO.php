<?php



class Robber
{
  /** @var int */
  public $id;
  /** @var null|Vault */
  public $vault;

  public function __construct($id)
  {
    $this->id = $id;
  }
}

class Vault
{
  /** @var int */
  public $id;
  /** @var int */
  public $unlockTime = 0;
  /** @var bool */
  public $is_done = false;
  /** @var null|Robber */
  public $robber;

  public function __construct($id, $unlockTime)
  {
    $this->unlockTime = $unlockTime;
  }
}

class Game
{
  /** @var Robber[] */
  public $robbers = [];
  /** @var Vault[] */
  public $vaults = [];
  /** @var int */
  public $totalTime = 0;

  public function init()
  {
    foreach ($this->robbers as $idRobber => $robber) {
      if ($this->vaults[$idRobber]) {
        $vault         = $this->vaults[$idRobber];
        $vault->robber = $robber;
        $robber->vault = $vault;
      }
    }
  }

  public function setNbRobbers($nbRobbers)
  {
    for ($i = 0; $i < $nbRobbers; ++$i) {
      $idRobber        = count($this->robbers);
      $this->robbers[] = new Robber($idRobber);
    }
  }

  public function createVault($c, $n)
  {
    $idVault        = count($this->vaults);
    $time           = pow(5, $c - $n) * pow(10, $n);
    $this->vaults[] = new Vault($idVault, $time);
  }

  public function isDone()
  {
    $done = true;
    foreach ($this->vaults as $vault) {
      $done = ($done && $vault->is_done);
    }

    return $done;
  }

  public function nextStep()
  {
    if (getenv('local')) {
      $this->printState();
    }
    $fastestVault = $this->getFastestUsedVault();
    $freeRobbers  = $this->spendTime($fastestVault->unlockTime);
    foreach ($freeRobbers as $robber) {
      $this->assignRobber($robber);
    }
  }

  public function printState()
  {
    $output = '';
    foreach ($this->vaults as $vault) {
      $output .= sprintf('(%5d ', $vault->unlockTime).($vault->robber ? sprintf('| R%2d', $vault->robber->id) : '     ').') ';
    }

    echo $output."\n<br>";
  }

  private function getFastestUsedVault()
  {
    /** @var null|Vault $minVault */
    $minVault = null;
    foreach ($this->vaults as $vault) {
      if (null === $minVault && $vault->robber) {
        $minVault = $vault;
      } elseif ($minVault && $vault->robber && $vault->unlockTime < $minVault->unlockTime) {
        $minVault = $vault;
      }
    }

    return $minVault;
  }

  private function spendTime($time)
  {
    $this->totalTime += $time;
    $freeRobbers = [];
    foreach ($this->vaults as $vault) {
      if ($vault->robber) {
        $vault->unlockTime -= $time;
        assert($vault->unlockTime >= 0);
        if (0 === $vault->unlockTime) {
          $vault->is_done       = true;
          $freeRobbers[]        = $vault->robber;
          $vault->robber->vault = null;
          $vault->robber        = null;
        }
      }
    }

    return $freeRobbers;
  }

  private function assignRobber(Robber $robber)
  {
    foreach ($this->vaults as $vault) {
      if (false === $vault->is_done && null === $vault->robber) {
        $robber->vault = $vault;
        $vault->robber = $robber;

        break;
      }
    }
  }
}

$game = new Game();

if (getenv('local')) {
  $robbers = 2;
  $vaults  = 4;
  $v       = [
    [3, 1],
    [3, 2],
    [4, 0],
    [4, 0],
  ];
  foreach ($v as [$c, $n]) {
    $game->createVault($c, $n);
  }
} else {
  fscanf(STDIN, '%d', $robbers);
  fscanf(STDIN, '%d', $vaults);
  for ($i = 0; $i < $vaults; ++$i) {
    fscanf(STDIN, '%d %d', $c, $n);
    $game->createVault($c, $n);
  }
}

$game->setNbRobbers($robbers);

$game->init();
while (false === $game->isDone()) {
  $game->nextStep();
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo $game->totalTime;
