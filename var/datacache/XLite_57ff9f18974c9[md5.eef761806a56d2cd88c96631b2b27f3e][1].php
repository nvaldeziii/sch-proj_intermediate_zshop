<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":14:{s:19:"associationMappings";a:1:{s:4:"link";a:19:{s:9:"fieldName";s:4:"link";s:12:"targetEntity";s:59:"XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Link";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:6:"linkId";s:6:"unique";b:1;s:8:"nullable";b:1;s:8:"onDelete";s:7:"CASCADE";s:16:"columnDefinition";N;s:20:"referencedColumnName";s:2:"id";}}s:8:"mappedBy";N;s:10:"inversedBy";s:7:"storage";s:7:"cascade";a:0:{}s:13:"orphanRemoval";b:0;s:5:"fetch";i:2;s:4:"type";i:1;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:67:"XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Link\Storage";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:6:"linkId";s:2:"id";}s:20:"joinColumnFieldNames";a:1:{s:6:"linkId";s:6:"linkId";}s:24:"targetToSourceKeyColumns";a:1:{s:2:"id";s:6:"linkId";}}}s:11:"columnNames";a:7:{s:2:"id";s:2:"id";s:4:"path";s:4:"path";s:8:"fileName";s:8:"fileName";s:4:"mime";s:4:"mime";s:11:"storageType";s:11:"storageType";s:4:"size";s:4:"size";s:4:"date";s:4:"date";}s:13:"fieldMappings";a:7:{s:2:"id";a:10:{s:9:"fieldName";s:2:"id";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:8:"unsigned";b:1;}s:2:"id";b:1;s:10:"columnName";s:2:"id";}s:4:"path";a:8:{s:9:"fieldName";s:4:"path";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:512;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:4:"path";}s:8:"fileName";a:8:{s:9:"fieldName";s:8:"fileName";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:8:"fileName";}s:4:"mime";a:8:{s:9:"fieldName";s:4:"mime";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:128;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:4:"mime";}s:11:"storageType";a:8:{s:9:"fieldName";s:11:"storageType";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:1;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:11:"storageType";}s:4:"size";a:9:{s:9:"fieldName";s:4:"size";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:8:"unsigned";b:1;}s:10:"columnName";s:4:"size";}s:4:"date";a:9:{s:9:"fieldName";s:4:"date";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:8:"unsigned";b:1;}s:10:"columnName";s:4:"date";}}s:10:"fieldNames";a:7:{s:2:"id";s:2:"id";s:4:"path";s:4:"path";s:8:"fileName";s:8:"fileName";s:4:"mime";s:4:"mime";s:11:"storageType";s:11:"storageType";s:4:"size";s:4:"size";s:4:"date";s:4:"date";}s:15:"embeddedClasses";a:0:{}s:10:"identifier";a:1:{i:0;s:2:"id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:67:"XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Link\Storage";s:9:"namespace";s:59:"XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Link";s:5:"table";a:2:{s:4:"name";s:44:"xc_order_capost_parcel_shipment_link_storage";s:12:"originalName";s:41:"order_capost_parcel_shipment_link_storage";}s:14:"rootEntityName";s:67:"XLite\Module\XC\CanadaPost\Model\Order\Parcel\Shipment\Link\Storage";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:47:" Doctrine\ORM\Id\IdentityGenerator sequenceName";N;}s:13:"generatorType";i:4;s:18:"lifecycleCallbacks";a:3:{s:10:"prePersist";a:1:{i:0;s:17:"prepareBeforeSave";}s:9:"preUpdate";a:1:{i:0;s:17:"prepareBeforeSave";}s:9:"preRemove";a:1:{i:0;s:13:"prepareRemove";}}}