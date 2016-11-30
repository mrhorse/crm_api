<?php

namespace Torchbox\Thankq;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;


class ContainerManager {
  /**
   * @var ContainerBuilder
   */
  private $container;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->container = new ContainerBuilder();
    $this->register();
  }

  private function register()
  {
    $fileLocator = new FileLocator(__DIR__);
    $loader = new YamlFileLoader($this->container, $fileLocator);
    $loader->load('services.yml');
  }

  /**
   * @return ContainerBuilder
   */
  public function getContainer()
  {
    return $this->container;
  }
}
