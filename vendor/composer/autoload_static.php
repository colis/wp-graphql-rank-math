<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit205b926eb7f297aebfca5f0f7dd8a7d2
{
    public static $files = array (
        'd93954ca8a74d7e67246db741a580590' => __DIR__ . '/../..' . '/access-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\RankMath\\' => 19,
        ),
        'A' => 
        array (
            'AxeWP\\GraphQL\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\RankMath\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'AxeWP\\GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src',
        ),
    );

    public static $classMap = array (
        'AxeWP\\GraphQL\\Abstracts\\ConnectionType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/ConnectionType.php',
        'AxeWP\\GraphQL\\Abstracts\\EnumType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/EnumType.php',
        'AxeWP\\GraphQL\\Abstracts\\FieldsType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/FieldsType.php',
        'AxeWP\\GraphQL\\Abstracts\\InputType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/InputType.php',
        'AxeWP\\GraphQL\\Abstracts\\InterfaceType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/InterfaceType.php',
        'AxeWP\\GraphQL\\Abstracts\\MutationType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/MutationType.php',
        'AxeWP\\GraphQL\\Abstracts\\ObjectType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/ObjectType.php',
        'AxeWP\\GraphQL\\Abstracts\\Type' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/Type.php',
        'AxeWP\\GraphQL\\Abstracts\\UnionType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Abstracts/UnionType.php',
        'AxeWP\\GraphQL\\Helper\\Helper' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Helper/Helper.php',
        'AxeWP\\GraphQL\\Interfaces\\GraphQLType' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/GraphQLType.php',
        'AxeWP\\GraphQL\\Interfaces\\Hookable' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/Hookable.php',
        'AxeWP\\GraphQL\\Interfaces\\TypeWithConnections' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithConnections.php',
        'AxeWP\\GraphQL\\Interfaces\\TypeWithFields' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithFields.php',
        'AxeWP\\GraphQL\\Interfaces\\TypeWithInputFields' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithInputFields.php',
        'AxeWP\\GraphQL\\Interfaces\\TypeWithInterfaces' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Interfaces/TypeWithInterfaces.php',
        'AxeWP\\GraphQL\\Traits\\TypeNameTrait' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Traits/TypeNameTrait.php',
        'AxeWP\\GraphQL\\Traits\\TypeResolverTrait' => __DIR__ . '/..' . '/axepress/wp-graphql-plugin-boilerplate/src/Traits/TypeResolverTrait.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\RankMath\\Admin\\Settings\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings/Settings.php',
        'WPGraphQL\\RankMath\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/CoreSchemaFilters.php',
        'WPGraphQL\\RankMath\\Fields\\RootQuery' => __DIR__ . '/../..' . '/src/Fields/RootQuery.php',
        'WPGraphQL\\RankMath\\Main' => __DIR__ . '/../..' . '/src/Main.php',
        'WPGraphQL\\RankMath\\Model\\ContentNodeSeo' => __DIR__ . '/../..' . '/src/Model/ContentNodeSeo.php',
        'WPGraphQL\\RankMath\\Model\\ContentTypeSeo' => __DIR__ . '/../..' . '/src/Model/ContentTypeSeo.php',
        'WPGraphQL\\RankMath\\Model\\Seo' => __DIR__ . '/../..' . '/src/Model/Seo.php',
        'WPGraphQL\\RankMath\\Model\\Settings' => __DIR__ . '/../..' . '/src/Model/Settings.php',
        'WPGraphQL\\RankMath\\Model\\TermNodeSeo' => __DIR__ . '/../..' . '/src/Model/TermNodeSeo.php',
        'WPGraphQL\\RankMath\\Model\\UserSeo' => __DIR__ . '/../..' . '/src/Model/UserSeo.php',
        'WPGraphQL\\RankMath\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\ArticleTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ArticleTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\BulkEditingTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/BulkEditingTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\ImagePreviewSizeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/ImagePreviewSizeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\KnowledgeGraphTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/KnowledgeGraphTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\RobotsMetaValueEnum' => __DIR__ . '/../..' . '/src/Type/Enum/RobotsMetaValueEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\SeoRatingEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SeoRatingEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\SeoScorePositionEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SeoScorePositionEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\SeoScoreTemplateTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SeoScoreTemplateTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\SnippetTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/SnippetTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\Enum\\TwitterCardTypeEnum' => __DIR__ . '/../..' . '/src/Type/Enum/TwitterCardTypeEnum.php',
        'WPGraphQL\\RankMath\\Type\\WPInterface\\BaseSeoFields' => __DIR__ . '/../..' . '/src/Type/WPInterface/BaseSeoFields.php',
        'WPGraphQL\\RankMath\\Type\\WPInterface\\MetaSettingWithArchive' => __DIR__ . '/../..' . '/src/Type/WPInterface/MetaSettingWithArchive.php',
        'WPGraphQL\\RankMath\\Type\\WPInterface\\MetaSettingWithRobots' => __DIR__ . '/../..' . '/src/Type/WPInterface/MetaSettingWithRobots.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\AdvancedRobotsMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/AdvancedRobotsMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\ContentNodeSeo' => __DIR__ . '/../..' . '/src/Type/WPObject/ContentNodeSeo.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\JsonLd' => __DIR__ . '/../..' . '/src/Type/WPObject/JsonLd.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\NodeSeo' => __DIR__ . '/../..' . '/src/Type/WPObject/NodeSeo.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\SeoScore' => __DIR__ . '/../..' . '/src/Type/WPObject/SeoScore.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/General.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Breadcrumbs' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/General/Breadcrumbs.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\FrontendSeoScore' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/General/FrontendSeoScore.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Links' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/General/Links.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\General\\Webmaster' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/General/Webmaster.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\AuthorArchiveMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/AuthorArchiveMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\ContentTypeMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/ContentTypeMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\DateArchiveMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/DateArchiveMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\GlobalMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/GlobalMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\HomepageMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/HomepageMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\LocalMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/LocalMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\SocialMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/SocialMeta.php',
        'WPGraphQL\\RankMath\\Type\\WPObject\\Settings\\Meta\\TaxonomyMeta' => __DIR__ . '/../..' . '/src/Type/WPObject/Settings/Meta/TaxonomyMeta.php',
        'WPGraphQL\\RankMath\\Utils\\Paper' => __DIR__ . '/../..' . '/src/Utils/Paper.php',
        'WPGraphQL\\RankMath\\Utils\\Utils' => __DIR__ . '/../..' . '/src/Utils/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit205b926eb7f297aebfca5f0f7dd8a7d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit205b926eb7f297aebfca5f0f7dd8a7d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit205b926eb7f297aebfca5f0f7dd8a7d2::$classMap;

        }, null, ClassLoader::class);
    }
}
