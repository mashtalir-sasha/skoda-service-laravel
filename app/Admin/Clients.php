<?php

use App\Clients;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Clients::class, function (ModelConfiguration $model) {

	$model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Наши клиенты');
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
                        AdminFormElement::images('images', 'Логотипы')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Clients::class, 4)
    ->setIcon('fa fa-picture-o');