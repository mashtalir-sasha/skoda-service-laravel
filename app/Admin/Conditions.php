<?php

use App\Conditions;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Conditions::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Условия');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Имя'),
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
                AdminFormElement::textarea('text', 'Текст (перенос строки через <br>)')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::textarea('textUkr', 'Текст (перенос рядка через <br>)')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        AdminFormElement::text('name', 'Имя')->required(),
                        $tabs
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Conditions::class, 7)
    ->setIcon('fa fa-list-alt ');