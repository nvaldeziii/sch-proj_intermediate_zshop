<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":13:{s:19:"associationMappings";a:1:{s:5:"owner";a:19:{s:9:"fieldName";s:5:"owner";s:12:"targetEntity";s:25:"XLite\Model\LanguageLabel";s:10:"inversedBy";s:12:"translations";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:2:"id";s:20:"referencedColumnName";s:8:"label_id";s:8:"nullable";b:1;s:6:"unique";b:0;s:8:"onDelete";s:7:"CASCADE";s:16:"columnDefinition";N;}}s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:36:"XLite\Model\LanguageLabelTranslation";s:5:"fetch";i:2;s:7:"cascade";a:0:{}s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:2:"id";s:8:"label_id";}s:20:"joinColumnFieldNames";a:1:{s:2:"id";s:2:"id";}s:24:"targetToSourceKeyColumns";a:1:{s:8:"label_id";s:2:"id";}s:13:"orphanRemoval";b:0;}}s:11:"columnNames";a:3:{s:5:"label";s:5:"label";s:8:"label_id";s:8:"label_id";s:4:"code";s:4:"code";}s:13:"fieldMappings";a:3:{s:5:"label";a:8:{s:9:"fieldName";s:5:"label";s:4:"type";s:4:"text";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:10:"columnName";s:5:"label";}s:8:"label_id";a:9:{s:9:"fieldName";s:8:"label_id";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:2:"id";b:1;s:10:"columnName";s:8:"label_id";}s:4:"code";a:9:{s:9:"fieldName";s:4:"code";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:2;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:5:"fixed";b:1;}s:10:"columnName";s:4:"code";}}s:10:"fieldNames";a:3:{s:5:"label";s:5:"label";s:8:"label_id";s:8:"label_id";s:4:"code";s:4:"code";}s:15:"embeddedClasses";a:0:{}s:10:"identifier";a:1:{i:0;s:8:"label_id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:36:"XLite\Model\LanguageLabelTranslation";s:9:"namespace";s:11:"XLite\Model";s:5:"table";a:3:{s:4:"name";s:30:"xc_language_label_translations";s:7:"indexes";a:2:{s:2:"ci";a:1:{s:7:"columns";a:2:{i:0;s:4:"code";i:1;s:2:"id";}}s:2:"id";a:1:{s:7:"columns";a:1:{i:0;s:2:"id";}}}s:12:"originalName";s:27:"language_label_translations";}s:14:"rootEntityName";s:36:"XLite\Model\LanguageLabelTranslation";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:47:" Doctrine\ORM\Id\IdentityGenerator sequenceName";N;}s:13:"generatorType";i:4;}