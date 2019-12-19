<?php
declare(strict_types=1);
namespace FormalBearsDemo\Module;

use BEAR\Package\PackageModule;
use FormalBearsDemo\Module\HttpClient\HttpClientModule;
use FormalBearsDemo\Module\TodoList\TodoListModule;
use FormalBearsDemo\Module\UserList\UserListModule;
use FormalBears\Framework\Module\AbstractAppModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule);
        $this->install(new UserListModule($this->registry));
        $this->install(new TodoListModule($this->registry));
        $this->install(new HttpClientModule);
    }

    /**
     * @return string
     */
    protected function getAppNamespace(): string
    {
        return 'FormalBearsDemo';
    }

    /**
     * @return string
     */
    protected function getAppDir(): string
    {
        return dirname(__DIR__, 2);
    }

    /**
     * @return string
     */
    protected function getConfigExtension(): string
    {
        return '.yaml';
    }
}
