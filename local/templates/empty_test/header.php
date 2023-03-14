<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Tender Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <link href="/local/templates/empty_test/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <?Asset::getInstance()->addJs("/local/templates/empty_test/js/jquery.min.js");?>
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <!--top nav start here-->
        <div class="mother-grid">
            <div class="container">
                <div class="temp-padd">
                    <div class="top-strip">
                        <div class="address">
                            <?global $filterContactInfo;
                            $filterContactInfo = [
                                    "IBLOCK_SECTION_ID" => "6"
                            ]
                            ?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list","contact_info",Array(
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "AJAX_MODE" => "Y",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "11",
                                    "NEWS_COUNT" => "4",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "ASC",
                                    "FILTER_NAME" => "filterContactInfo",
                                    "FIELD_CODE" => Array("ID"),
                                    "PROPERTY_CODE" => Array("TEXT","LINK"),
                                    'CACHE_TYPE' => "N"
                                )
                            );?>

                        </div>
                        <div class="social-icons">
                            <?global $filterSocialLink;
                            $filterSocialLink = [
                                "IBLOCK_SECTION_ID" => "5"
                            ]
                            ?>
                            <?$APPLICATION->IncludeComponent("bitrix:news.list","social_links",Array(
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "N",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "AJAX_MODE" => "Y",
                                    "IBLOCK_TYPE" => "content",
                                    "IBLOCK_ID" => "11",
                                    "NEWS_COUNT" => "4",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER2" => "ASC",
                                    "FILTER_NAME" => "filterSocialLink",
                                    "FIELD_CODE" => Array("ID"),
                                    "PROPERTY_CODE" => Array("CLASS","LINK"),
                                    'CACHE_TYPE' => "N"
                                )
                            );?>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--top nav end here-->
                    <!--title start here-->
                    <div class="title-main">
                        <a href=""><h1>Tender</h1></a>
                    </div>
                    <!--title end here-->
                    <!--header start here-->
                    <div class="header-container">
                        <div class="menu-header">
                        <?$APPLICATION->IncludeComponent("bitrix:menu","tender",Array(
                                "ROOT_MENU_TYPE" => "top",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "top",
                                "USE_EXT" => "Y",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "Y",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => ""
                            )
                        );?>
                        </div>



                        <div class="search-header">
                        <?$APPLICATION->IncludeComponent("bitrix:search.form","tender",Array(
                                "USE_SUGGEST" => "Y",
                                "PAGE" => "/search/index.php",
                                'CACHE_TYPE' => "N"
                            )
                        );?>
                        </div>

                        <div class="basket-header">
                            <a href="/personal/cart/"><img src="/upload/images/basket-item.png"></a>
                            <a href="/personal/order/list.php"><img src="/upload/images/order-list.png"></a>
                        </div>
                    </div>
                    <!--header end here-->
	
						