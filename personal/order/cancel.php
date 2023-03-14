<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отмена заказа");
?>
    <div class="search-page-container">
        <?$APPLICATION->IncludeComponent("bitrix:sale.personal.order.cancel","",Array(
                "PATH_TO_LIST" => "/personal/order/list.php",
                "PATH_TO_DETAIL" => "/personal/order/detail.php?ID=#ID#",
                "SET_TITLE" => "Y",
                "ID" => $ID
            )
        );?>
    </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>