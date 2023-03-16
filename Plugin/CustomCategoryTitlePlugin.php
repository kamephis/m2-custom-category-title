<?php
namespace Kamephis\CustomCategoryTitle\Plugin;

class CustomCategoryTitlePlugin
{
    public function afterGetName(\Magento\Catalog\Model\Category $subject, $result)
    {
        if ($subject->getCustomCategoryTitle()) {
            return $subject->getCustomCategoryTitle();
        }
        return $result;
    }
}
