<?php die(); ?>          0O:31:"Doctrine\ORM\Query\ParserResult":3:{s:45:" Doctrine\ORM\Query\ParserResult _sqlExecutor";O:44:"Doctrine\ORM\Query\Exec\SingleSelectExecutor":2:{s:17:" * _sqlStatements";s:880:"SELECT x0_.useClasses AS useClasses_0, x0_.ogMeta AS ogMeta_1, x0_.useCustomOG AS useCustomOG_2, x0_.category_id AS category_id_3, x0_.lpos AS lpos_4, x0_.rpos AS rpos_5, x0_.enabled AS enabled_6, x0_.show_title AS show_title_7, x0_.depth AS depth_8, x0_.pos AS pos_9, x0_.root_category_look AS root_category_look_10, x0_.metaDescType AS metaDescType_11, x0_.xcPendingExport AS xcPendingExport_12, x0_.lastUsage AS lastUsage_13, x0_.parent_id AS parent_id_14 FROM xc_categories x0_ LEFT JOIN xc_category_translations x1_ ON x0_.category_id = x1_.id AND (x1_.code = ?) LEFT JOIN xc_category_membership_links x3_ ON x0_.category_id = x3_.category_id LEFT JOIN xc_memberships x2_ ON x2_.membership_id = x3_.membership_id WHERE x0_.enabled = ? AND x2_.membership_id IS NULL AND x0_.category_id <> ? AND (x0_.lpos BETWEEN 1 AND 9) AND (x0_.rpos BETWEEN 10 AND 16) ORDER BY x0_.lpos ASC";s:20:" * queryCacheProfile";N;}s:50:" Doctrine\ORM\Query\ParserResult _resultSetMapping";O:35:"Doctrine\ORM\Query\ResultSetMapping":17:{s:7:"isMixed";b:0;s:8:"isSelect";b:1;s:8:"aliasMap";a:1:{s:1:"c";s:20:"XLite\Model\Category";}s:11:"relationMap";a:0:{}s:14:"parentAliasMap";a:0:{}s:13:"fieldMappings";a:14:{s:12:"useClasses_0";s:10:"useClasses";s:8:"ogMeta_1";s:6:"ogMeta";s:13:"useCustomOG_2";s:11:"useCustomOG";s:13:"category_id_3";s:11:"category_id";s:6:"lpos_4";s:4:"lpos";s:6:"rpos_5";s:4:"rpos";s:9:"enabled_6";s:7:"enabled";s:12:"show_title_7";s:10:"show_title";s:7:"depth_8";s:5:"depth";s:5:"pos_9";s:3:"pos";s:21:"root_category_look_10";s:18:"root_category_look";s:15:"metaDescType_11";s:12:"metaDescType";s:18:"xcPendingExport_12";s:15:"xcPendingExport";s:12:"lastUsage_13";s:9:"lastUsage";}s:14:"scalarMappings";a:0:{}s:12:"typeMappings";a:1:{s:12:"parent_id_14";s:7:"integer";}s:14:"entityMappings";a:1:{s:1:"c";N;}s:12:"metaMappings";a:1:{s:12:"parent_id_14";s:9:"parent_id";}s:14:"columnOwnerMap";a:15:{s:12:"useClasses_0";s:1:"c";s:8:"ogMeta_1";s:1:"c";s:13:"useCustomOG_2";s:1:"c";s:13:"category_id_3";s:1:"c";s:6:"lpos_4";s:1:"c";s:6:"rpos_5";s:1:"c";s:9:"enabled_6";s:1:"c";s:12:"show_title_7";s:1:"c";s:7:"depth_8";s:1:"c";s:5:"pos_9";s:1:"c";s:21:"root_category_look_10";s:1:"c";s:15:"metaDescType_11";s:1:"c";s:18:"xcPendingExport_12";s:1:"c";s:12:"lastUsage_13";s:1:"c";s:12:"parent_id_14";s:1:"c";}s:20:"discriminatorColumns";a:0:{}s:10:"indexByMap";a:0:{}s:16:"declaringClasses";a:14:{s:12:"useClasses_0";s:20:"XLite\Model\Category";s:8:"ogMeta_1";s:20:"XLite\Model\Category";s:13:"useCustomOG_2";s:20:"XLite\Model\Category";s:13:"category_id_3";s:20:"XLite\Model\Category";s:6:"lpos_4";s:20:"XLite\Model\Category";s:6:"rpos_5";s:20:"XLite\Model\Category";s:9:"enabled_6";s:20:"XLite\Model\Category";s:12:"show_title_7";s:20:"XLite\Model\Category";s:7:"depth_8";s:20:"XLite\Model\Category";s:5:"pos_9";s:20:"XLite\Model\Category";s:21:"root_category_look_10";s:20:"XLite\Model\Category";s:15:"metaDescType_11";s:20:"XLite\Model\Category";s:18:"xcPendingExport_12";s:20:"XLite\Model\Category";s:12:"lastUsage_13";s:20:"XLite\Model\Category";}s:18:"isIdentifierColumn";a:0:{}s:17:"newObjectMappings";a:0:{}s:24:"metadataParameterMapping";a:0:{}}s:51:" Doctrine\ORM\Query\ParserResult _parameterMappings";a:3:{s:3:"lng";a:1:{i:0;i:0;}s:7:"enabled";a:1:{i:0;i:1;}s:6:"rootId";a:1:{i:0;i:2;}}}