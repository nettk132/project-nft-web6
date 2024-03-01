<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\nftdata;

class nftdataControllers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'nft';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new nftdata());

        $grid->column('nft_id', __('Nft id'));
        $grid->column('catagory_id', __('Catagory id'));
        $grid->column('name', __('Name'));
        $grid->column('creator', __('Creator'));
        $grid->column('desc', __('Desc'));
        $grid->column('Owned_by', __('Owned by'));
        $grid->column('price', __('Price'));
        $grid->column('image', __('Image'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(nftdata::findOrFail($id));

        $show->field('nft_id', __('Nft id'));
        $show->field('catagory_id', __('Catagory id'));
        $show->field('name', __('Name'));
        $show->field('creator', __('Creator'));
        $show->field('desc', __('Desc'));
        $show->field('Owned_by', __('Owned by'));
        $show->field('price', __('Price'));
        $show->field('image', __('Image'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new nftdata());

        $form->text('catagory_id', __('Catagory id'));
        $form->text('name', __('Name'));
        $form->text('creator', __('Creator'));
        $form->text('desc', __('Desc'));
        $form->text('Owned_by', __('Owned by'));
        $form->decimal('price', __('Price'));
        $form->image('image', __('Image'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
