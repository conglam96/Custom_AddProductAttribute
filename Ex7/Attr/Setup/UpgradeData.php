<?php
namespace Ex7\Attr\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use PHPUnit\Framework\Constraint\IsTrue;

class UpgradeData implements UpgradeDataInterface
{
    private $eavSetupFactory;

    public function __construct(
        EavSetupFactory $eavSetupFactory
    )
    {
        $this->eavSetupFactory=$eavSetupFactory;
    }

    public function upgrade(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
       

        if(version_compare($context->getVersion(),'1.0.5','<'))
        {
            $eavSetup=$this->eavSetupFactory->create(
                ['setup'=>$setup]
            );
    
            $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'label_of_attribute',
                [
                   'type'=>'text',
                   'backend'=>'',
                   'frontend'=>'Ex7\Attr\Model\Attribute\Frontend\Values',
                   'label'=>'Label of attribute',
                   'input'=>'text',
                   'class'=>'',
                   'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => '',
                    'is_html_allowed_on_front'=>true,
                    'visible_on_front'=>true
    
                ]
            )
            ->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'suplier',
                [
                    'type'=>'text',
                   'backend'=>'',
                   'frontend'=>'Ex7\Attr\Model\Attribute\Frontend\Values',
                   'label'=>'Suplier infomation',
                   'input'=>'textarea',
                   'class'=>'',
                   'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => true,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => ''
                ]
            )
    
            ->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'additional_order',
                [
                    'type'=>'text',
                   'backend'=>'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                   'frontend'=>'Ex7\Attr\Model\Attribute\Frontend\Values',
                   'label'=>'Order addtional (if has)',
                   'input'=>'textarea',
                   'class'=>'',
                   'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => true,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => '',
                    'wysiwyg_enabled' => true,
                    'is_html_allowed_on_front' => true,
                ]
            )
    
            ->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'provinces',
                [
                    'group'                 => 'General',
                    'label'                 => 'Choose your province',
                    'input'                 => 'select',
                    'type'                  => 'varchar',
                    'source'                =>'Ex7\Attr\Model\Config\Product\Options',
                    'frontend'              =>'Ex7\Attr\Model\Attribute\Frontend\Values',
                    'backend'               =>'',
                    'required'              =>false,
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'is_used_in_grid'       =>false,
                    'is_visible_in_grid'       =>false,
                    'is_filterable_in_grid'       =>false,
                    'visible'=>true,
                    'is_html_allowed_on_front'=>true,
                    'visible_on_front'=>true
                ]
            )
    
            ->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'external_accessories',
                [
                    'group'=>'General',
                    'label'=>'Choose your external accessories',
                    'type'=>'text',
                    'input'=>'multiselect',
                    'source'=>'Ex7\Attr\Model\Config\Product\Accessories',
                    'required'=>false,
                    'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'used_in_product_listing'=>true,
                    'backend'=>'',
                    'visible_on_front'=>true
                ]
    
            )
           ->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'fast_delivery',
                [
                    'group'=>'General',
                    'label'=>'Fast delivery ?',
                    'type'=>'text',
                    'input'=>'select',
                    'source'=>'Ex7\Attr\Model\Config\Product\FastOption',
                    'required'=>false,
                    'global'=>\Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'used_in_product_listing'=>true,
                    'backend'=>'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
                    'visible_on_front'=>true
                ]
    
            );
        }
    }
}