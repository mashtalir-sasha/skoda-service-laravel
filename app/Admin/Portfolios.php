<?php

use App\Portfolios;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Portfolios::class, function (ModelConfiguration $model) {

    $model->setTitle('Наши кейсы');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('numb')->setLabel('Номер П/П'),
            AdminColumn::image('image')->setLabel('Картинка'),
            AdminColumn::text('created_at')->setLabel('Дата создания'),
            AdminColumn::text('updated_at')->setLabel('Дата изменения'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $tabs = AdminDisplay::tabbed([
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::textarea('text', 'Текст')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::textarea('textUkr', 'Текст')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                    	AdminFormElement::text('numb', 'Номер П/П')->required(),
                        $tabs
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Картинка')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Portfolios::class, 3)
    ->setIcon('fa fa-briefcase');