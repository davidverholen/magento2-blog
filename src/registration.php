<?php
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    \DavidVerholen\Blog\Module::NAME,
    __DIR__
);
