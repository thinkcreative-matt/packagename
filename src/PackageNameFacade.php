<?php 

namespace Thinkcreative\PackageName;

use Illuminate\Suppoort\Facades\Facade;

class PackageNameFacade extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'package-name';
	}

}
