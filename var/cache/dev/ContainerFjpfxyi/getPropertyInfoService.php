<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_info' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyInfoExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyInfoExtractor.php';

return $this->services['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['property_info.serializer_extractor']) ? $this->services['property_info.serializer_extractor'] : $this->load(__DIR__.'/getPropertyInfo_SerializerExtractorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
}, 3), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
}, 2), new RewindableGenerator(function () {
    return new \EmptyIterator();
}, 0), new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
}, 1));
