<?php
namespace Jleagle\BattleNet\Responses\Warcraft;

use Jleagle\BattleNet\Responses\BaseResponse;

class AchievementResponse extends BaseResponse
{
  public $id;
  public $title;
  public $points;
  public $description;
  public $reward;
  public $rewardItems;
  public $icon;
  public $criteria;
  public $accountWide;
  public $factionId;
}
