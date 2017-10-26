# Conexco Bootstrap Boilerplate Theme

- **License**: GPL-3.0
- **Github**: <https://github.com/conexco/bootstrap-boilerplate-theme>

### Requirements
- Shopware 5.3 or newer

### Installation via Shopware Store
Open the plugin manager in your shop and search for `Conexco Bootstrap Boilerplate Theme`.
Then install and activate it.
After that open the theme manager and activate the theme for the shops where you want to use it

### Installation via Git
1.) go to your shop root directory and clone the theme into the plugin directory
```
git clone git@github.com:conexco/bootstrap-boilerplate-theme.git custom/plugins/CxoBootstrapBoilerplate
```

2.) install the plugin in the plugin manager or execute the following commands on the command line
```
php bin/console sw:plugin:refresh
php bin/console sw:plugin:install CxoBootstrapBoilerplate
php bin/console sw:plugin:activate CxoBootstrapBoilerplate
```

3.) to use the bootstrap boilerplate theme you have to activate it in the plugin manager in the shopware backend