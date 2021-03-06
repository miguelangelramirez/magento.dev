<?php

class Smartwave_All_Model_System_Config_Source_Design_Font_Family_Groupcustomgoogle
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'custom',
				  'label' => Mage::helper('all')->__('Custom...')),
			array('value' => 'google',
				  'label' => Mage::helper('all')->__('Google Fonts...')),
            
            array('value' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif',
                  'label' => Mage::helper('all')->__('"Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif')),
			array('value' => 'Arial, "Helvetica Neue", Helvetica, sans-serif',
				  'label' => Mage::helper('all')->__('Arial, "Helvetica Neue", Helvetica, sans-serif')),
			array('value' => 'Georgia, serif',
				  'label' => Mage::helper('all')->__('Georgia, serif')),
			array('value' => '"Lucida Sans Unicode", "Lucida Grande", sans-serif',
				  'label' => Mage::helper('all')->__('"Lucida Sans Unicode", "Lucida Grande", sans-serif')),
			array('value' => '"Palatino Linotype", "Book Antiqua", Palatino, serif',
				  'label' => Mage::helper('all')->__('"Palatino Linotype", "Book Antiqua", Palatino, serif')),
			array('value' => 'Tahoma, Geneva, sans-serif',
				  'label' => Mage::helper('all')->__('Tahoma, Geneva, sans-serif')),
			array('value' => '"Trebuchet MS", Helvetica, sans-serif',
				  'label' => Mage::helper('all')->__('"Trebuchet MS", Helvetica, sans-serif')),
			array('value' => 'Verdana, Geneva, sans-serif',
				  'label' => Mage::helper('all')->__('Verdana, Geneva, sans-serif')),
        );
    }
}