# MobWeb_ShippingMethodFields extension for Magento

This extension adds two new optional fields to the "Shipping Method" checkout step.

The values of these fields are saved as part of the order data and displayed as part of the shipping method title.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

Copy the file *app/design/frontend/default/default/template/checkout/onepage/shipping_method/additional.phtml* to your design package's scope, e.g. *app/design/frontend/MY_PACKAGE/MY_THEME/template/checkout/onepage/shipping_method/additional.phtml*.

## Configuration

You will probably also have to customize the display and behaviour of the new fields, for example:

- Showing and hiding the fields, depending on the currently selected shipping method
- Making the fields optional or required, again depending on the selected shipping method
- Styling the fields and placing them in the proper position

These are the default fields:

- pickup_store
- pickup_date

Just search and replace for these values to add your own custom field names.

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).