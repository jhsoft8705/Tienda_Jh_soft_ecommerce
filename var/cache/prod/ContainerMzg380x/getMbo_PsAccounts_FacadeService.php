<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.ps_accounts.facade' shared service.

return $this->services['mbo.ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['mbo.ps_accounts.installer']) ? $this->services['mbo.ps_accounts.installer'] : ($this->services['mbo.ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.2.5'))) && false ?: '_'});
