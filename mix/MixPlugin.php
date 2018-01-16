<?php
/**
 * Craft Mix
 *
 * @author    mister bk! GmbH
 * @copyright Copyright (c) 2017-2018 mister bk! GmbH
 * @link      https://www.mister-bk.de/
 */

namespace Craft;

class MixPlugin extends BasePlugin
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
         return 'Mix';
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return 'Helper plugin for Laravel Mix in Craft CMS templates';
    }

    /**
     * @inheritdoc
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/mister-bk/craft-mix/blob/master/README.md';
    }

    /**
     * @inheritdoc
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/mister-bk/craft-mix/master/releases.json';
    }

    /**
     * @inheritdoc
     */
    public function getVersion()
    {
        return '1.1.2';
    }

    /**
     * @inheritdoc
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @inheritdoc
     */
    public function getDeveloper()
    {
        return 'mister bk! GmbH';
    }

    /**
     * @inheritdoc
     */
    public function getDeveloperUrl()
    {
        return 'https://www.mister-bk.de/';
    }

    /**
     * @inheritdoc
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @inheritdoc
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.mix.twigextensions.MixTwigExtension');

        return new MixTwigExtension();
    }

    /**
     * @inheritdoc
     */
    protected function defineSettings()
    {
        return [
            'publicPath' => [
                AttributeType::String,
                'default' => 'public'
            ],
            'assetPath' => [
                AttributeType::String,
                'default' => 'assets'
            ]
        ];
    }

    /**
     * @return mixed
     */
    public function getSettingsHtml()
    {
       return craft()->templates->render(
           'mix/settings',
           ['settings' => $this->getSettings()]
       );
    }
}
