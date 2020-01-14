<?php
namespace Ex7\Attr\Model\Config\Product;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
 
 
class Options extends AbstractSource
{
    protected $optionFactory;
    public function getAllOptions()
    {
        $this->_options = [];
        $this->_options[] = ['label' => 'Hà Nội', 'value' => '29'];
        $this->_options[] = ['label' => 'Vĩnh Phúc', 'value' => '88'];
        $this->_options[] = ['label' => 'Nam Định', 'value' => '18'];
        $this->_options[] = ['label' => 'Thái Bình', 'value' => '17'];
        $this->_options[] = ['label' => 'Hải Dương', 'value' => '34'];
        $this->_options[] = ['label' => 'Ninh Bình', 'value' => '35'];
        return $this->_options;
    }
}