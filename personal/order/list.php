<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Список заказов");
?>
    <div class="search-page-container">
        <?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.list","",Array(
                "STATUS_COLOR_PSEUDO_CANCELLED" => "red",
                "PATH_TO_DETAIL" => "detail.php?ID=#ID#",
                "PATH_TO_COPY" => "/personal/cart/",
                "PATH_TO_CANCEL" => "cancel.php?ID=#ID#",
                "PATH_TO_BASKET" => "/personal/cart/",
                "PATH_TO_PAYMENT" => "payment.php",
                "ORDERS_PER_PAGE" => 20,
                "SET_TITLE" => "Y",
                "SAVE_IN_SESSION" => "Y",
                "NAV_TEMPLATE" => "",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_GROUPS" => "Y",
                "HISTORIC_STATUSES" => "F",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ID" => $ID
            )
        );?>
    </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

