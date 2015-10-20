<?php

class MobWeb_ShippingMethodFields_Model_Observer
{
    public static $fields = array('pickup_store', 'pickup_date');

    public function salesQuoteSaveBefore(Varien_Event_Observer $observer)
    {
        foreach(self::$fields AS $field) {
            if($data = Mage::app()->getFrontController()->getRequest()->getParam($field)){
                $observer->getEvent()->getQuote()->setData($field, $data);
            }
        }
    }

    public function salesOrderPlaceBefore(Varien_Event_Observer $observer)
    {
        $order = $observer->getOrder();

        $fieldsAsString = '';
        foreach(self::$fields AS $field) {
            $label = ucwords(str_replace('_', ' ', $field));
            $value = ucwords($order->getData($field));

            $fieldsAsString .= sprintf('%s: %s, ', $label, $value);
        }
        $fieldsAsString = trim($fieldsAsString, ', ');

        $order->setShippingDescription(sprintf('%s (%s)', $order->getShippingDescription(), $fieldsAsString));

        Mage::log($order->getShippingDescription(), NULL, 'm3.txt');
    }
}