<?php
declare(strict_types=1);

/**
 * PureEntitiesX: Mob AI Plugin for PMMP
 * Copyright (C)  2018 RevivalPMMP
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace revivalpmmp\pureentities\entity;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;

class Enderman extends MonsterPEX{
	// TODO: Add item in hand options.

	const NETWORK_ID = self::ENDERMAN;

	public function getName() : string{
		return "Enderman";
	}

	public function getDrops() : array{
		if($this->lastDamageCause instanceof EntityDamageByEntityEvent){
			return [Item::get(Item::ENDER_PEARL, 0, mt_rand(0,1))];
		}
		return [];
	}

}
