<?php

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
    protected $extend = 'BootstrapResponsive';

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
    protected $author = 'conexco';

    /**
     * License of the theme source code.
     *
     * @var string
     */
    protected $license = 'commercial';

    /**
     * Javascript files which will be used in the theme.
     *
     * @var array
     */
    protected $javascript = array(

    );

    /**
     * Css files which will be used in the theme.
     *
     * @var array
     */
    protected $css = array(

    );

    /**
     * Helper function to add default theme
     *
     * @param ArrayCollection $collection
     */
    public function createConfigSets(ArrayCollection $collection)
    {
        $themeDefaults = array(
            'swf-brand-primary' => '#D9400B',
            'swf-gray' => '#F5F5F8',
            'swf-gray-light' => 'lighten(@swf-gray, 1%)',
            'swf-gray-dark' => 'darken(@swf-gray, 10%)',
            'swf-body-bg' => '#FFFFFF',
            'swf-text-color' => '#5F7285',
            'swf-panel-default-heading-bg' => 'transparent',
            'swf-price-default-color' => '@swf-gray-dark',
            'swf-heading-text-color' => '@swf-text-color',
            'swf-dropdown-link-color' => '@swf-text-color',
            'swf-font-family-base' => '"Open Sans", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;',
            'swf-footer-bg' => '@swf-body-bg',
            'swf-footer-border' => '@swf-gray-light',
            'swf-footer-color' => '@swf-text-color',
            'swf-border-radius-base' => '3px',
            'sidebarFilter' => 'false',
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
