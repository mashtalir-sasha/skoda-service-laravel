<?php

use App\Reviews;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Reviews::class, function (ModelConfiguration $model) {

    $model->setTitle('Отзывы');
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

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('name', 'Имя')->required(),
                        AdminFormElement::textarea('text', 'Текст отзыва (перенос строки через <br>)')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Reviews::class, 5)
    ->setIcon('fa fa-comments');