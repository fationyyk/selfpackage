<?php
namespace fationyyk\selfpackage;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        
        $installer = new PluginInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
