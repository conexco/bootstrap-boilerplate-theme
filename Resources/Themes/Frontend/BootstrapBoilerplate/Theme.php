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
     * Helper function to add default theme
     *
     * @param ArrayCollection $collection
     */
    public function createConfigSets(ArrayCollection $collection)
    {
        $themeDefaults = array(
            'swf-brand-primary' => '#D9400B',
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
