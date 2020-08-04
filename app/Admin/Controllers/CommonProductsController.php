<?php

//商品管理抽象类

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFill;
use Encore\Admin\Grid;
use Encore\Admin\Form;
use Encore\Admin\Controllers\AdminController;


abstract class CommonProductsController extends AdminController
{
	// 定义一个抽象方法，返回当前管理的商品类型
    abstract public function getProductType();

    protected function grid()
    {
        $grid = new Grid(new Product());

        // 筛选出当前类型的商品，默认 ID 倒序排序
        $grid->model()->where('type', $this->getProductType())->orderBy('id', 'desc');
        // 调用自定义方法
        $this->customGrid($grid);

        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

        return $grid;
    }

    // 定义一个抽象方法，各个类型的控制器将实现本方法来定义列表应该展示哪些字段
    abstract protected function customGrid(Grid $grid);

    protected function form()
    {
        $form = new Form(new Product());

        //其他
        $form->radio('gtype', '上架')->options(['1' => '月配商品', '0'=> '一次配送'])->default('0');
        $form->multipleSelect('weekday', '收花日期')->options([1 => '周一', 2 => '周二', 6 => '周六']);
        $form->multipleSelect('saleregion', '可售地区')->options([1 => '江浙沪', 2 => '京津冀', 3 => '粤闽湘赣琼', 4 => '全国']);
        $form->multipleImage('pictures', '轮播图片')->sortable()->removable();
        $data = ProductFill::query()->where('on_sale', true)->pluck('title', 'id');
        $form->multipleSelect('test', '加购')->options($data);

        // 在表单页面中添加一个名为 type 的隐藏字段，值为当前商品类型
        $form->hidden('type')->value($this->getProductType());
        $form->text('title', '商品名称')->rules('required');
        $form->select('category_id', '类目')->options(function ($id) {
            $category = Category::find($id);
            if ($category) {
                return [$category->id => $category->full_name];
            }
        })->ajax('/admin/api/categories?is_directory=0');
        $form->image('image', '封面图片')->rules('required|image');
        $form->quill('description', '商品描述')->rules('required');
        $form->radio('on_sale', '上架')->options(['1' => '是', '0' => '否'])->default('0');

        // 调用自定义方法
        $this->customForm($form);

        $form->hasMany('skus', '商品 SKU', function (Form\NestedForm $form) {
            $form->text('title', 'SKU 名称')->rules('required');
            $form->text('description', 'SKU 描述')->rules('required');
            $form->text('price', '单价')->rules('required|numeric|min:0.01');
            $form->text('stock', '剩余库存')->rules('required|integer|min:0');
            $form->text('spec', 'SKU 编码')->rules('required');
            $form->text('times', '配送次数')->rules('required|numeric|min:1');
            $form->image('spec_img', 'SKU 图片');
        });

        // 放在 SKU 下面
        $form->hasMany('properties', '商品属性', function (Form\NestedForm $form) {
            $form->text('name', '属性名')->rules('required');
            $form->text('value', '属性值')->rules('required');
        });
        $form->saving(function (Form $form) {
            $form->model()->price = collect($form->input('skus'))->where(Form::REMOVE_FLAG_NAME, 0)->min('price') ?: 0;
        });

        return $form;
    }

    // 定义一个抽象方法，各个类型的控制器将实现本方法来定义表单应该有哪些额外的字段
    abstract protected function customForm(Form $form);
}