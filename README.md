
# How to install Rfmcube Custom API for Magento 2

There are 2 different solutions to install Rfmcube extensions:

- Solution #1. Install via Composer
- Solution #2: Ready to paste

## Important:
- We recommend you to duplicate your live store on a staging/test site and try installation on it in advanced.
- Back up Magento files and the store database.

## Solution #1. Install via Composer

Not yet published
<!---
Run the following command in Magento 2 root folder:

```
composer require rfmcube/customapi
php bin/magento setup:upgrade
```
-->

## Solution #2: Ready to paste

If you don't want to install via composer, you can use this way. 

- Download [the latest version here](https://github.com/rfmcube/rfmcube-magento2-customapi/archive/master.zip) 
- Extract `master.zip` file to `app/code/Rfmcube/Customapi`; You should create a folder path `app/code/Rfmcube/Customapi` if not exist.
- Go to Magento root folder and run upgrade command line to install `Rfmcube_Customapi`:

```
php bin/magento setup:upgrade
```

## FAQs

