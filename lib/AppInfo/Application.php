<?php
namespace OCA\User_ISPConfig\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap
{
	public function __construct()
	{
		parent::__construct('user_ispconfig');
	}

	public function boot(IBootContext $context): void
	{
		// Backward compatibility: existing config.php user_backends entries
		// reference the backend by its pre-0.6.0 global class name.
		if (!class_exists('OC_User_ISPCONFIG', false))
			class_alias(\OCA\User_ISPConfig\UserISPConfig::class, 'OC_User_ISPCONFIG');
	}

	public function register(IRegistrationContext $context): void
	{
	}
}
