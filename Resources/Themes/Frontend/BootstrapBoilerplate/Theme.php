<?php

/**
*   Conexco Bootstrap Boilerplate Theme
*   Copyright (C) 2017, conexco UG (haftungsbeschränkt) & Co. KG
*
*   This program is free software: you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation, either version 3 of the License, or
*   (at your option) any later version.
*
*   This program is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

namespace Shopware\Themes\BootstrapBoilerplate;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form as Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme
{
    /**
     * Defines the extended Theme.
     *
     * @var string
     */
    protected $extend = 'BootstrapExtension';

    /**
     * Defines the human readable theme name which is displayed in the backend.
     *
     * @var string
     */
    protected $name = 'BootstrapBoilerplate';

    /**
     * Allows to define a description text for the theme.
     *
     * @var string
     */
    protected $description = 'Conexco Bootstrap Boilerplate Theme';

    /**
     * Name of the theme author.
     *
     * @var string
     */
    protected $author = 'conexco - the e-commerce experts';

    /**
     * License of the theme source code.
     *
     * @var string
     */
    protected $license = 'GNU GPLv3';

    /**
     * Javascript files which will be used in the theme.
     *
     * @var array
     */
    protected $javascript = array(
        'vendors/js/philter.js',
        'src/js/custom.js'
    );

    /**
     * Css files which will be used in the theme.
     *
     * @var array
     */
    protected $css = array(

    );

    public function createConfig(Form\Container\TabContainer $container)
    {
        $container->addTab($this->createCustomerTab());
    }

    private function createCustomerTab()
    {
        $tab = $this->createTab(
            'customer-config',
            'Kunden Konfiguration',
            array(
                'attributes' => array(
                    'layout' => 'anchor',
                    'autoScroll' => true,
                ),
            )
        );

        $tab->addElement($this->createHeadingsFieldset());

        return $tab;
    }

    private function createHeadingsFieldset()
    {   
        $fieldset = $this->createFieldSet(
            'headings',
            'Überschriften',
            array(
                'attributes' => array(
                    'defaults' => array(
                        'labelWidth' => 200,
                        'margin' => '5 15 5 0',
                    )
                )
            )
        );

        $fieldset->addElement(
            $this->createNumberField(
                'swf-headings-font-weight',
                'Schriftschnitt Überschrift',
                '600'
            )
        );

        return $fieldset;
    }

    /**
     * Helper function to add default theme
     *
     * @param ArrayCollection $collection
     */
    public function createConfigSets(ArrayCollection $collection)
    {
        $themeDefaults = array(
            'swf-brand-primary' => '#D9400B',
            'swf-gray' => '#5F7285',
            'swf-gray-light' => '#F5F5F8',
            'swf-gray-dark' => 'darken(@swf-gray, 15%)',
            'swf-body-bg' => '#FFFFFF',
            'swf-text-color' => '@swf-gray',
            'swf-panel-default-heading-bg' => 'transparent',
            'swf-price-default-color' => '@swf-gray-dark',
            'swf-heading-text-color' => '@swf-text-color',
            'swf-dropdown-link-color' => '@swf-text-color',
            'swf-font-family-base' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;',
            'swf-footer-bg' => '@swf-body-bg',
            'swf-footer-border' => '@swf-gray-light',
            'swf-footer-color' => '@swf-text-color',
            'swf-border-radius-base' => '3px',
            'swf-border-radius-large' => '3px',
            'swf-border-radius-small' => '3px',
            'sidebarFilter' => 'false',
            'swf-headings-font-weight' => '600',
        );

        $set = new ConfigSet();
        $set->setName('BootstrapBoilerplateTheme')->setDescription(
            'Aktiviert das Bootstrap Boilerplate Theme'
        )->setValues(
            $themeDefaults
        );
        $collection->add($set);
    }
}
