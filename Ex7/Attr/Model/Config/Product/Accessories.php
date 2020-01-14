<?php
namespace Ex7\Attr\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
 
 
class Accessories extends AbstractSource
{
   
    public function getAllOptions()
    {
        $this->_options = [];
        $this->_options[]=['label'=>'Meta;','value'=>'0'];
        $this->_options[]=['label'=>'Leather','value'=>'1'];
        $this->_options[]=['label'=>'Silk','value'=>'2'];
        $this->_options[]=['label'=>'Foo','value'=>'3'];
        $this->_options[]=['label'=>'Cotton','value'=>'4'];
        $this->_options[]=['label'=>'Golden','value'=>'5'];
        return $this->_options;
    }
}