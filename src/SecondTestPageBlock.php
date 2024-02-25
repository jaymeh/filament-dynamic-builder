<?php

namespace Jaymeh\FilamentDynamicBuilder;

use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class SecondTestPageBlock extends PageBlockAbstract
{

    protected $label = 'File Upload';
    protected $name = 'fileUpload';
    protected $view = 'awdisblocks::arrowList';

    protected function fields()
    {
        return [
            // SpatieMediaLibraryFileUpload::make('avatar'),
        ];
    }

}
