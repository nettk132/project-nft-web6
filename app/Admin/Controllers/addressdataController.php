<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\addressdata;

class addressdataController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'addresses';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new addressdata());

        $grid->column('address_id', __('Address id'));
        $grid->column('province', __('Province'));
        $grid->column('disctrict', __('Disctrict'));
        $grid->column('address_1', __('Address 1'));
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
        $show = new Show(addressdata::findOrFail($id));

        $show->field('address_id', __('Address id'));
        $show->field('province', __('Province'));
        $show->field('disctrict', __('Disctrict'));
        $show->field('address_1', __('Address 1'));
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
        $form = new Form(new addressdata());

        $form->text('province', __('Province'));
        $form->text('disctrict', __('Disctrict'));
        $form->text('address_1', __('Address 1'));

        return $form;
    }
}
