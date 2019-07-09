<?php

use App\Titles;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Titles::class, function (ModelConfiguration $model) {

    $model->setTitle('Первый екран (слайды)');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Подзаголовок'),
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
                AdminFormElement::text('title', 'Заголовок (Выделить цветом через <span></span>)')->required(),
                AdminFormElement::textarea('text', 'Подзаголовок')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('titleUkr', 'Заголовок (Виділити кольором через <span></span>)')->required(),
                AdminFormElement::textarea('textUkr', 'Підзаголовок')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs,
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('image', 'Картинка'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Titles::class, 1)
    ->setIcon('fa fa-list-alt');