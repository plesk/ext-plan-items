<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

class Modules_PlanItemsExample_PlanItems extends pm_Hook_PlanItems
{
    public function getPlanItems()
    {
        return Modules_PlanItemsExample_Config::getPlanItems();
    }
}
