<?php

namespace Spoyntersmith\LaravelBackpackHelpDocs\Http\Controllers\Admin;

use Spoyntersmith\LaravelBackpackHelpDocs\Http\Requests\HelpDocRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HelpDocCrudController
 *
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HelpDocCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\Spoyntersmith\LaravelBackpackHelpDocs\Models\HelpDoc::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/help-doc');
        CRUD::setEntityNameStrings('help doc', 'help docs');
        $this->crud->setShowView('backpack-help-docs::show-help-doc');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->column('name');
        $this->crud->column('plain_content');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->removeAllButtons();
        config(['elfinder.disks' => ['help-docs']]);

        CRUD::setValidation(HelpDocRequest::class);

        $this->crud->field('name');

        $this->crud->addField([
            'name'    => 'content',
            'label'   => 'Content',
            'type'    => 'tinymce',
            'options' => [
                'plugins' => 'image,link,media',
                'height'  => 500,
                'removed_menuitems' => 'newdocument',
                'file_picker_types' => 'image',
                'images_upload_base_path' => '/help-doc-images',
            ],
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation() {
        $this->crud->set('show.setFromDb', false);
        $this->crud->column('name');
        $this->crud->column('content')->type('textarea')->attributes([
            'escaped' => false,
        ])->wrapper(['class' => 'w-100']);
        $this->crud->removeAllButtons();
    }
}
