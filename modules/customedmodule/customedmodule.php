<?php
/**
 * Created by PhpStorm.
 * User: pengdeng
 * Date: 11/15/16
 * Time: 3:14 PM
 */
if (!defined('_PS_VERSION_') {
    exit;
}

class Customedmodule extends Module {
    public function __construct($name, Context $context)
    {
        $this->name = 'mymodule';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Coloseo';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('My module');
        $this->description = $this->l('Description of my module.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (!parent::install())
            return false;
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall() || Configuration::deleteByName("mymodule"))
            return false;
        return true;
    }


}