<?php

namespace App\Entity;


class Type
{
	const Type_Fire = 0;
	const Type_Water = 1;
	const Type_Green = 2;
	const Type_Normal = 3;



//Cette fonction return la force du type de pokemon contre un autre type
public function StrongAgain ($Type, $Type_Attack)
{
	switch ($Type)
	{
		case self::Type_Fire:
		return self::Type_Plant === $Type_Attack ? true : false;
		break;
		case self::Type_Water:
		return self::Type_Fire === $Type_Attack ? true : false;
		break;
		case self::Type_Green:
		return self::Type_Water === $Type_Attack ? true : false;
		break;
		case self::Type_Normal:
		return self::Type_Normal === $Type_Attack ? true : false;
		break;

	}

}
//Cette fonction return la faiblesse du type de pokemon contre un autre type
public function WeakAgain ($Type, $Type_Defence)
{
switch ($Type)
	{
		case self::Type_Fire:
		return self::Type_Water === $Type_Attack ? true : false;
		break;
		case self::Type_Water:
		return self::Type_Green === $Type_Attack ? true : false;
		break;
		case self::Type_Green:
		return self::Type_Fire === $Type_Attack ? true : false;
		break;
		return;

	}


}
}



