<?php die(); ?>          0O:34:"Doctrine\ORM\Mapping\ClassMetadata":13:{s:19:"associationMappings";a:4:{s:11:"newsMessage";a:19:{s:9:"fieldName";s:11:"newsMessage";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:15:"news_message_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:20:"referencedColumnName";s:2:"id";}}s:7:"cascade";a:0:{}s:10:"inversedBy";s:9:"cleanURLs";s:12:"targetEntity";s:38:"XLite\Module\XC\News\Model\NewsMessage";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:20:"XLite\Model\CleanURL";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:15:"news_message_id";s:2:"id";}s:20:"joinColumnFieldNames";a:1:{s:15:"news_message_id";s:15:"news_message_id";}s:24:"targetToSourceKeyColumns";a:1:{s:2:"id";s:15:"news_message_id";}s:13:"orphanRemoval";b:0;}s:4:"page";a:19:{s:9:"fieldName";s:4:"page";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:7:"page_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:20:"referencedColumnName";s:2:"id";}}s:7:"cascade";a:0:{}s:10:"inversedBy";s:9:"cleanURLs";s:12:"targetEntity";s:38:"XLite\Module\CDev\SimpleCMS\Model\Page";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:20:"XLite\Model\CleanURL";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:7:"page_id";s:2:"id";}s:20:"joinColumnFieldNames";a:1:{s:7:"page_id";s:7:"page_id";}s:24:"targetToSourceKeyColumns";a:1:{s:2:"id";s:7:"page_id";}s:13:"orphanRemoval";b:0;}s:7:"product";a:19:{s:9:"fieldName";s:7:"product";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:10:"product_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:20:"referencedColumnName";s:10:"product_id";}}s:7:"cascade";a:0:{}s:10:"inversedBy";s:9:"cleanURLs";s:12:"targetEntity";s:19:"XLite\Model\Product";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:20:"XLite\Model\CleanURL";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:10:"product_id";s:10:"product_id";}s:20:"joinColumnFieldNames";a:1:{s:10:"product_id";s:10:"product_id";}s:24:"targetToSourceKeyColumns";a:1:{s:10:"product_id";s:10:"product_id";}s:13:"orphanRemoval";b:0;}s:8:"category";a:19:{s:9:"fieldName";s:8:"category";s:11:"joinColumns";a:1:{i:0;a:6:{s:4:"name";s:11:"category_id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:20:"referencedColumnName";s:11:"category_id";}}s:7:"cascade";a:0:{}s:10:"inversedBy";s:9:"cleanURLs";s:12:"targetEntity";s:20:"XLite\Model\Category";s:5:"fetch";i:2;s:4:"type";i:2;s:8:"mappedBy";N;s:12:"isOwningSide";b:1;s:12:"sourceEntity";s:20:"XLite\Model\CleanURL";s:15:"isCascadeRemove";b:0;s:16:"isCascadePersist";b:0;s:16:"isCascadeRefresh";b:0;s:14:"isCascadeMerge";b:0;s:15:"isCascadeDetach";b:0;s:24:"sourceToTargetKeyColumns";a:1:{s:11:"category_id";s:11:"category_id";}s:20:"joinColumnFieldNames";a:1:{s:11:"category_id";s:11:"category_id";}s:24:"targetToSourceKeyColumns";a:1:{s:11:"category_id";s:11:"category_id";}s:13:"orphanRemoval";b:0;}}s:11:"columnNames";a:2:{s:2:"id";s:2:"id";s:8:"cleanURL";s:8:"cleanURL";}s:13:"fieldMappings";a:2:{s:2:"id";a:10:{s:9:"fieldName";s:2:"id";s:4:"type";s:7:"integer";s:5:"scale";i:0;s:6:"length";N;s:6:"unique";b:0;s:8:"nullable";b:0;s:9:"precision";i:0;s:7:"options";a:1:{s:8:"unsigned";b:1;}s:2:"id";b:1;s:10:"columnName";s:2:"id";}s:8:"cleanURL";a:8:{s:9:"fieldName";s:8:"cleanURL";s:4:"type";s:6:"string";s:5:"scale";i:0;s:6:"length";i:255;s:6:"unique";b:0;s:8:"nullable";b:1;s:9:"precision";i:0;s:10:"columnName";s:8:"cleanURL";}}s:10:"fieldNames";a:2:{s:2:"id";s:2:"id";s:8:"cleanURL";s:8:"cleanURL";}s:15:"embeddedClasses";a:0:{}s:10:"identifier";a:1:{i:0;s:2:"id";}s:21:"isIdentifierComposite";b:0;s:4:"name";s:20:"XLite\Model\CleanURL";s:9:"namespace";s:11:"XLite\Model";s:5:"table";a:3:{s:4:"name";s:13:"xc_clean_urls";s:7:"indexes";a:1:{s:8:"cleanURL";a:1:{s:7:"columns";a:1:{i:0;s:8:"cleanURL";}}}s:12:"originalName";s:10:"clean_urls";}s:14:"rootEntityName";s:20:"XLite\Model\CleanURL";s:11:"idGenerator";O:33:"Doctrine\ORM\Id\IdentityGenerator":1:{s:47:" Doctrine\ORM\Id\IdentityGenerator sequenceName";N;}s:13:"generatorType";i:4;}