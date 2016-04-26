# PocketApps Language
Easy-to-use string management library to assist with easy localization

## Setup
1. Download the source code or clone the repo (git clone)
2. Include the language.php file in your project
3. Initialize the class:  
    `include_once 'path/to/language.php';`
4. Create a new instance of the class (You can use any prefix for your language file):  
    `$language = new pocketapps_language('en');`
5. Retrieve a string (Translatable)  
    `echo $language->get('APP_NAME');`
6. Retrieve a string (Untranslatable)  
    `echo $language->get('APP_NAME', false);`

Check out the example directory for a working example of this framework

## Contact Us
1. Visit our website - [https://www.pocketapps.co.za](https://www.pocketapps.co.za)
2. Send us an email - [support@pocketapps.co.za](mailto:support@pocketapps.co.za)
2. Like us on [Facebook](http://facebook.com/PocketAppsSoftware)
3. Follow us on [Twitter](https://twitter.com/MyPocketApps)