<?php

namespace Spotted\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SpottedUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
