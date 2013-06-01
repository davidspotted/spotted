<?php

namespace Spotted\RequestListenerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class SpottedRequestListenerBundle extends Bundle
{
	public function onKernelRequest(GetResponseEvent $event)
	{
		$request = $event->getRequest();
	
		if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $request->headers->get('user-agent')))
		{
			$request->setRequestFormat('mobile', 'text/html');
		}else {
			$request->setRequestFormat('html', 'text/html');
		}
	}
	
	private function setFormat (\Symfony\Component\HttpFoundation\Request $request, $format='html') {
		$request->setRequestFormat($format, 'text/html');
	}
}
