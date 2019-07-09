<?php

use App\Contacts;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Contacts::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Контакты');
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
                AdminFormElement::text('addr', 'Адрес')->required(),
                AdminFormElement::textarea('timetable', 'Режим работы')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('addrUkr', 'Адреса')->required(),
                AdminFormElement::textarea('timetableUkr', 'Режим роботи')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs,
                        AdminFormElement::text('facebook', 'Facebook'),
                        AdminFormElement::text('youtube', 'YouTube'),
                        AdminFormElement::text('instagram', 'Instagram'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('phone-top', 'Телефон в меню (ХХХ) ХХХ ХХ ХХ')->required(),
                        AdminFormElement::text('phone1', 'Телефон 1 (ХХХ) ХХХ ХХ ХХ'),
                        AdminFormElement::text('phone2', 'Телефон 2 (ХХХ) ХХХ ХХ ХХ'),
                        AdminFormElement::text('phone3', 'Телефон 3 (ХХХ) ХХХ ХХ ХХ'),
                        AdminFormElement::text('phone4', 'Телефон 4 (ХХХ) ХХХ ХХ ХХ'),
                        AdminFormElement::text('fax', 'Факс (ХХХ) ХХХ ХХ ХХ'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('longitude', 'Долгота')->required(),
                        AdminFormElement::text('latitude', 'Широта')->required()
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Contacts::class, 6)
    ->setIcon('fa fa-info');