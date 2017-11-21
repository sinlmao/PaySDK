<?php
namespace Yurun\PaySDK\AlipayCrossBorder\Online\Notify;

use \Yurun\PaySDK\AlipayCrossBorder\Online\Notify\Base;

abstract class Pay extends Base
{
	/**
	 * 对通知进行验证，是否是正确的通知
	 * @return bool
	 */
	public function notifyVerify()
	{
		if(parent::notifyVerify())
		{
			$request = new \Yurun\PaySDK\AlipayCrossBorder\Online\NotifyVerify\Request;
			$request->notify_id = $this->data['notify_id'];
			return true === $this->sdk->execute($request);
		}
		else
		{
			return false;
		}
	}
}