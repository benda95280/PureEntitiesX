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

use pocketmine\entity\projectile\ProjectileSource;
use pocketmine\item\Item;

class Ghast extends MonsterPEX implements ProjectileSource{
	const NETWORK_ID = self::GHAST;

	public function getName() : string{
		return "Ghast";
	}

	public function getDrops() : array{
		return [Item::get(Item::GUNPOWDER, 0, mt_rand(0, 2))];
	}

	public function getMaxHealth() : int{
		return 10;
	}

}
