# Magento 2 Custom Category Title Module

This is a Magento 2 module that adds a custom category title attribute to categories, and allows users to set a custom category title in the Magento admin category settings.

## Installation

To install this module, follow these steps:

1. Clone the repository: `git clone https://github.com/kamephis/m2-custom-category-title.git`
2. Run the following commands from your Magento 2 installation's root directory:

### Composer installation
```sh
composer require kamephis/custom-category-title
```

### Activate the module
```sh
php bin/magento module:enable Kamephis_CustomCategoryTitle
php bin/magento setup:upgrade
php bin/magento cache:clean
```

##Usage

To use this module, follow these steps:

1. Log in to the Magento admin panel.
2. Navigate to the Categories page.
3. Edit a category and look for the "Custom Category Title" field.
4. Enter a custom category title if desired.
5. Save the category.

If a custom category title is entered, it will be used instead of the default category name.

##Configuration

This module does not have any configuration options.

##Troubleshooting

If the module does not appear to be working, try the following steps:

1. Clear the Magento cache: php bin/magento cache:clean.
2. Check that the module is enabled: php bin/magento module:status Kamephis_CustomCategoryTitle.
3. Check that the custom_category_title attribute was created in the catalog_eav_attribute table of your Magento database.
4. If you are still having issues, please create a new issue in the module's GitHub repository.

## License

This module is licensed under the GNU GENERAL PUBLIC LICENSE. See the LICENSE file for details.


