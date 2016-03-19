<?php
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    \DavidVerholen\Blog\Module::NAME,
    implode(DIRECTORY_SEPARATOR, [__DIR__, 'src'])
);
