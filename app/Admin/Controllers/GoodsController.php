<?php

namespace App\Admin\Controllers;

use App\Model\ApigoodsModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\ApigoodsModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ApigoodsModel);

        $grid->column('goods_id', __('商品编号'));
        $grid->column('goods_name', __('商品名称'));
        $grid->column('goods_img', __('商品照片'))->image();
        $grid->column('goods_desc', __('商品描述'));
        $grid->column('goods_price', __('商品价格'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(ApigoodsModel::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_name', __('Goods name'));
        $show->field('goods_img', __('Goods img'));
        $show->field('goods_desc', __('Goods desc'));
        $show->field('goods_price', __('Goods price'));
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
        $form = new Form(new ApigoodsModel);

        $form->text('goods_name', __('Goods name'));
        $form->image('goods_img', __('Goods img'));
        $form->text('goods_desc', __('Goods desc'));
        $form->number('goods_price', __('Goods price'));

        return $form;
    }
}
