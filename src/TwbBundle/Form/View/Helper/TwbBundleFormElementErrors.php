<?php
namespace TwbBundle\Form\View\Helper;
class TwbBundleFormElementErrors extends \Zend\Form\View\Helper\FormElementErrors{
	protected $messageOpenFormat = '<div class="help-block"><span>';
	protected $messageCloseString = '</span></div>';
	protected $messageSeparatorString = '</span><span>';
}