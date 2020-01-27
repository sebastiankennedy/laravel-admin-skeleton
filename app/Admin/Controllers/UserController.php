<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->id('ID');
        $grid->name('用户名');
        $grid->email('邮箱');
        $grid->email_verified_at('已验证邮箱')->display(
            function ($value) {
                return $value ? '是' : '否';
            }
        );
        $grid->created_at('注册时间');

        // 不在页面显示「新建」按钮
        $grid->disableCreateButton();

        // 不在页面显示「编辑」按钮
        $grid->disableActions();
        $grid->tools(
            function ($tools) {
                // 禁用批量删除按钮
                $tools->batch(
                    function ($batch) {
                        $batch->disableDelete();
                    }
                );
            }
        );

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param  mixed  $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }
}
