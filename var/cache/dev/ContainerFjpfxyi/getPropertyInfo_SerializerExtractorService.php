<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_info.serializer_extractor' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\PropertyInfo\\Extractor\\SerializerExtractor.php';

return $this->services['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(${($_ = isset($this->services['serializer.mapping.class_metadata_factory']) ? $this->services['serializer.mapping.class_metadata_factory'] : $this->load(__DIR__.'/getSerializer_Mapping_ClassMetadataFactoryService.php')) && false ?: '_'});
