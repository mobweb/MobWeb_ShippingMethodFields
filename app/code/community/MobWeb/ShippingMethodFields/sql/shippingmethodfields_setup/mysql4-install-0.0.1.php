<?php

$installer = $this;
$installer->startSetup();

$setup = new Mage_Sales_Model_Resource_Setup('core_setup');

$pickupStoreAttribute = array(
    'type' => 'varchar',
    'label' => 'Pickup Store',
    'global' => 1,
    'required' => 0,
    'user_defined' => 0,
    'visible_on_front' => 0
);

$setup->addAttribute('order', 'pickup_store', $pickupStoreAttribute);
$setup->addAttribute('quote', 'pickup_store', $pickupStoreAttribute);

$pickupDateAttribute = array(
    'type' => 'varchar',
    'label' => 'Pickup Date',
    'global' => 1,
    'required' => 0,
    'user_defined' => 0,
    'visible_on_front' => 0
);

$setup->addAttribute('order', 'pickup_date', $pickupDateAttribute);
$setup->addAttribute('quote', 'pickup_date', $pickupDateAttribute);

$setup->endSetup();