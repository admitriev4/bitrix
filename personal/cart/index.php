<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>
<? $APPLICATION->SetPageProperty("title", "Корзина"); ?>
<div class="search-page-container">
<?$APPLICATION->IncludeComponent(
    "bitrix:sale.basket.basket",
    "tender",
    Array(
        "ACTION_VARIABLE" => "action",
        "AUTO_CALCULATION" => "Y",
        "TEMPLATE_THEME" => "red",
        "COLUMNS_LIST" => array("PROPERTY_NO_IMG","NAME","PRICE","QUANTITY","DELETE"),
        "COMPONENT_TEMPLATE" => "tender",
        "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
        "GIFTS_CONVERT_CURRENCY" => "N",
        "GIFTS_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_HIDE_NOT_AVAILABLE" => "N",
        "GIFTS_MESS_BTN_BUY" => "Выбрать",
        "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
        "GIFTS_PAGE_ELEMENT_COUNT" => "4",
        "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
        "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "",
        "GIFTS_SHOW_DISCOUNT_PERCENT" => "N",
        "GIFTS_SHOW_IMAGE" => "N",
        "GIFTS_SHOW_NAME" => "N",
        "GIFTS_SHOW_OLD_PRICE" => "N",
        "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
        "GIFTS_PLACE" => "BOTTOM",
        "HIDE_COUPON" => "Y",
        "OFFERS_PROPS" => array("SIZES_SHOES","SIZES_CLOTHES"),
        "PATH_TO_ORDER" => "/personal/order/",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "QUANTITY_FLOAT" => "N",
        "SET_TITLE" => "Y",
        "USE_GIFTS" => "N",
        "USE_PREPAYMENT" => "N",
        "SHOW_FILTER" => "Y",

    )
);?>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
