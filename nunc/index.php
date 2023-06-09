<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<? $APPLICATION->SetPageProperty("title", "Nunc"); ?>
    <div class="service">
        <?$APPLICATION->IncludeComponent("bitrix:news","news",Array(
                "DISPLAY_DATE" => "N",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "SEF_MODE" => "Y",
                "AJAX_MODE" => "Y",
                "IBLOCK_TYPE" => "content",
                "IBLOCK_ID" => "1",
                "NEWS_COUNT" => "20",
                "USE_SEARCH" => "N",
                "USE_RSS" => "N",
                "USE_RATING" => "N",
                "USE_CATEGORIES" => "N",
                "USE_REVIEW" => "N",
                "USE_FILTER" => "Y",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "ACTIVE_FROM",
                "SORT_ORDER2" => "DESC",
                "CHECK_DATES" => "Y",
                "PREVIEW_TRUNCATE_LEN" => "",
                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "LIST_FIELD_CODE" => Array(),
                "LIST_PROPERTY_CODE" => Array("PICTURE_URL"),
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "DISPLAY_NAME" => "Y",
                "META_KEYWORDS" => "-",
                "META_DESCRIPTION" => "-",
                "BROWSER_TITLE" => "-",
                "DETAIL_SET_CANONICAL_URL" => "Y",
                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                "DETAIL_FIELD_CODE" => Array(),
                "DETAIL_PROPERTY_CODE" => Array("PICTURE_URL"),
                "DETAIL_DISPLAY_TOP_PAGER" => "Y",
                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                "DETAIL_PAGER_TITLE" => "Страница",
                "DETAIL_PAGER_TEMPLATE" => "",
                "DETAIL_PAGER_SHOW_ALL" => "Y",
                "STRICT_SECTION_CHECK" => "Y",
                "SET_TITLE" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "ADD_ELEMENT_CHAIN" => "N",
                "SET_LAST_MODIFIED" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "N",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "USE_PERMISSIONS" => "N",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "Y",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "Y",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "FILTER_NAME" => "",
                "FILTER_FIELD_CODE" => Array(),
                "FILTER_PROPERTY_CODE" => Array(),
                "SEF_FOLDER" => "/nunc/",
                "SEF_URL_TEMPLATES" => Array(
                    "detail" => "#ELEMENT_CODE#/",
                    "news" => "/",
                    "section" => "#SECTION_ID#/",
                ),
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "USE_SHARE" => "N",
                "SHARE_HIDE" => "N",
                "SHARE_TEMPLATE" => "",
            )
        );?>

    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>