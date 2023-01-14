##RisecommerceAutoLanguageSwitcher


##Support: 
version - 1.0.1

##How to install Extension

Method I)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/AutoLanguageSwitcher
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/AutoLanguageSwitcher'

Method II)

Using Composer

composer require risecommerce/magento-2-auto-language-switcher:1.0.1

#Enable Extension:
- php bin/magento module:enable Risecommerce_AutoLanguageSwitcher
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_AutoLanguageSwitcher
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
