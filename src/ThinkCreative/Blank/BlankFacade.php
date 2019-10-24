<?php 

namespace Thinkcreative\Blank;

use Illuminate\Suppoort\Facades\Facade;

class BlankFacade extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'package-name';
	}

}
