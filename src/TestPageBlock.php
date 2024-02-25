<?php

namespace Jaymeh\FilamentDynamicBuilder;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Jaymeh\FilamentDynamicBuilder\Abstracts\PageBlockAbstract;

class TestPageBlock extends PageBlockAbstract
{

    protected $label = 'Arrow List';
    protected $name = 'arrowList';
    protected $view = 'awdisblocks::arrowList';

    protected function fields()
    {
        return [
            Checkbox::make('Reduce bottom space'),
            TextInput::make('Heading'),
            Textarea::make('Copy'),
            Repeater::make('List Items')
                ->schema(
                    [
                        TextInput::make('Text'),
                    ]
                ),
        ];
        // return [
        //     BooleanField::make('Reduce bottom space'),
        //     TextField::make('Heading')
        //         ->translatable(),
        //     TextareaField::make('Copy')
        //         ->translatable(),
        //     FlexibleField::make('List Items')
        //         ->fullWidth()
        //         ->collapsed()
        //         ->button('Add List Item')
        //         ->addLayout(
        //             'List Item',
        //             'list_item',
        //             [
        //                 TextField::make('Text')
        //                     ->translatable(),
        //             ]
        //     ),
        // ];
    }

}
