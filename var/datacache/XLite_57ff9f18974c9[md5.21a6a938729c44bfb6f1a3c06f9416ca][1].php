<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":13:{s:19:"associationMappings";a:4:{s:13:"addressFields";a:15:{s:9:"fieldName";s:13:"addressFields";s:8:"mappedBy";s:7:"address";s:12:"targetEntity";s:29:"XLite\Model\AddressFieldValue";s:7:"cascade";a:5:{i:0;s:6:"remove";i:1;s:7:"persist";i:2;s:7:"refresh";i:3;s:5:"merge";i:4;s:6:"detach";}s:13:"orphanRemoval";b:0;s:5:"fetch";i:2;s:4:"type";i:4;s:10:"inversedBy";N;s:12:"isOwningSide";b:0;s:12:"sourceEntity";s:19:"XLite\Model\Address";s:15:"isCascadeRemove";b:1;s:16:"isCascadePersist";b:1;s:16:"isCascadeRefresh";b:1;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;}s:7:"profile";a:19:{s:9:"fieldName";s:7:"profile";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:10:"profile_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:7:"CASCADE";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:10:"profile_id";}}s:7:"cascade";a:3:{i:0;s:7:"persist";i:1;s:5:"merge";i:2;s:6:"detach";}s:10:"inversedBy";s:9:"addresses";s:12:"targetEntity";s:19:"XLite\Model\Profile";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:19:"XLite\Model\Address";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:1;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;s:24:"sourceToTargetKeyColumns";a:1:{s:10:"profile_id";s:10:"profile_id";}s:20:"joinColumnFieldNames";a:1:{s:10:"profile_id";s:10:"profile_id";}s:24:"targetToSourceKeyColumns";a:1:{s:10:"profile_id";s:10:"profile_id";}s:13:"orphanRemoval";b:0;}s:5:"state";a:19:{s:9:"fieldName";s:5:"state";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:8:"state_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:8:"SET NULL";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:8:"state_id";}}s:7:"cascade";a:2:{i:0;s:5:"merge";i:1;s:6:"detach";}s:10:"inversedBy";N;s:12:"targetEntity";s:17:"XLite\Model\State";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:19:"XLite\Model\Address";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;s:24:"sourceToTargetKeyColumns";a:1:{s:8:"state_id";s:8:"state_id";}s:20:"joinColumnFieldNames";a:1:{s:8:"state_id";s:8:"state_id";}s:24:"targetToSourceKeyColumns";a:1:{s:8:"state_id";s:8:"state_id";}s:13:"orphanRemoval";b:0;}s:7:"country";a:19:{s:9:"fieldName";s:7:"country";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:12:"country_code";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:8:"SET NULL";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:4:"code";}}s:7:"cascade";a:2:{i:0;s:5:"merge";i:1;s:6:"detach";}s:10:"inversedBy";N;s:12:"targetEntity";s:19:"XLite\Model\Country";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:19:"XLite\Model\Address";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:1;s:15:"isCascadeDetach";b:1;s:24:"sourceToTargetKeyColumns";a:1:{s:12:"country_code";s:4:"code";}s:20:"joinColumnFieldNames";a:1:{s:12:"country_code";s:12:"country_code";}s:24:"targetToSourceKeyColumns";a:1:{s:4:"code";s:12:"country_code";}s:13:"orphanRemoval";b:0;}}s:11:"columnNames";a:5:{s:10:"is_billing";s:10:"is_billing";s:11:"is_shipping";s:11:"is_shipping";s:6:"isWork";s:6:"isWork";s:10:"address_id";s:10:"address_id";s:12:"address_type";s:12:"address_type";}s:13:"fieldMappings";a:5:{s:10:"is_billing";a:8:{s:9:"fieldName";s:10:"is_billing";s:4:"type";s:7:"boolean";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:10:"is_billing";}s:11:"is_shipping";a:8:{s:9:"fieldName";s:11:"is_shipping";s:4:"type";s:7:"boolean";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:11:"is_shipping";}s:6:"isWork";a:8:{s:9:"fieldName";s:6:"isWork";s:4:"type";s:7:"boolean";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:6:"isWork";}s:10:"address_id";a:9:{s:9:"fieldName";s:10:"address_id";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:2:"id";b:1;s:10:"columnName";s:10:"address_id";}s:12:"address_type";a:9:{s:9:"fieldName";s:12:"address_type";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:1;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:5:"fixed";b:1;}s:10:"columnName";s:12:"address_type";}}s:10:"fieldNames";a:5:{s:10:"is_billing";s:10:"is_billing";s:11:"is_shipping";s:11:"is_shipping";s:6:"isWork";s:6:"isWork";s:10:"address_id";s:10:"address_id";s:12:"address_type";s:12:"address_type";}s:15:"embeddedClasses";a:0:{}s:10:"identifier";a:1:{i:0;s:10:"address_id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:19:"XLite\Model\Address";s:9:"namespace";s:11:"XLite\Model";s:5:"table";a:3:{s:4:"name";s:20:"xc_profile_addresses";s:7:"indexes";a:2:{s:10:"is_billing";a:1:{s:7:"columns";a:1:{i:0;s:10:"is_billing";}}s:11:"is_shipping";a:1:{s:7:"columns";a:1:{i:0;s:11:"is_shipping";}}}s:12:"originalName";s:17:"profile_addresses";}s:14:"rootEntityName";s:19:"XLite\Model\Address";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:47:" Doctrine\ORM\Id\IdentityGenerator sequenceName";N;}s:13:"generatorType";i:4;}