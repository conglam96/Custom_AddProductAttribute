<?php
namespace Ex7\Attr\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
 
 
class FastOption extends AbstractSource
{
   
    public function getAllOptions()
    {
        $this->_options = [];
         $this->_options[]=['label'=>'Yes','value'=>'0'];
        $this->_options[]=['label'=>'No','value'=>'1'];
        return $this->_options;
    }
}