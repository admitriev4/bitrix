<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Подробнее о заказе");
?>
    <div class="search-page-container">
        <?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.detail","",Array(
                "PATH_TO_LIST" => "/personal/order/list.php",
                "PATH_TO_CANCEL" => "/personal/order/cancel.php?ID=#ID#",
                "PATH_TO_PAYMENT" => "/personal/order/payment.php",
                "PATH_TO_COPY" => "/personal/order/",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_GROUPS" => "Y",
                "SET_TITLE" => "Y",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "PICTURE_WIDTH" => "110",
                "PICTURE_HEIGHT" => "110",
                "PICTURE_RESAMPLE_TYPE" => "1",
                "CUSTOM_SELECT_PROPS" => array(),
                "PROP_1" => Array(),
                "PROP_2" => Array(),
                "ID" => $ID
            )
        );?>
    </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>