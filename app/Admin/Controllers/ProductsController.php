<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\ProductFill;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Widgets\Tab;

class ProductsController extends CommonProductsController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    //protected $title = 'App\Models\Product';
    protected $title = '商品';

    public function getProductType()
    {
        return Product::TYPE_NORMAL;
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function customGrid(Grid $grid)
    {
        $grid->model()->with(['category']);
        $grid->id('ID')->sortable();
        $grid->title('商品名称');
        $grid->column('category.name', '类目');
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->price('价格');
        $grid->rating('评分');
        $grid->sold_count('销量');
        $grid->review_count('评论数');
    }

    /**
     * Make a show builder. 无用可以删掉
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('on_sale', __('On sale'));
        $show->field('rating', __('Rating'));
        $show->field('sold_count', __('Sold count'));
        $show->field('review_count', __('Review count'));
        $show->field('price', __('Price'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */

    protected function customForm(Form $form)
    {
        // 普通商品没有额外的字段，因此这里不需要写任何代码
    }
}
