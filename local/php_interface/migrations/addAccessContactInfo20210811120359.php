<?php

namespace Sprint\Migration;


class addAccessContactInfo20210811120359 extends Version
{
    protected $description = "";

    protected $moduleVersion = "3.28.7";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('сontact_information', 'content');
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'administrators' => 'X',
  'everyone' => 'R',
));

    }

    public function down()
    {
        //your code ...
    }
}
