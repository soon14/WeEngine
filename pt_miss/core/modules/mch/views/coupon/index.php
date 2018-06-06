<?php
defined('YII_RUN') or exit('Access Denied');

/**
 * Created by IntelliJ IDEA.
 * User: luwei
 * Date: 2017/8/24
 * Time: 10:18
 */

use yii\widgets\LinkPager;

/* @var \app\models\Coupon[] $list */

$urlManager = Yii::$app->urlManager;
$this->title = '优惠券管理';
$this->params['active_nav_group'] = 7;
?>

<div class="main-nav" flex="cross:center dir:left box:first" style="display: none">
    <div>
        <nav class="breadcrumb rounded-0 mb-0" flex="cross:center">
            <a class="breadcrumb-item" href="<?= $urlManager->createUrl(['mch/store/index']) ?>">我的商城</a>
            <span class="breadcrumb-item active"><?= $this->title ?></span>
        </nav>
    </div>
    <div>
        <?= $this->render('/layouts/nav-right') ?>
    </div>
</div>
<div class="main-body p-3">
    <a class="btn btn-primary mb-3" href="<?= $urlManager->createUrl(['mch/coupon/edit']) ?>">添加优惠券</a>
    <table class="table table-bordered bg-white">
        <thead>
        <tr>
            <th>ID</th>
            <th>优惠券名称</th>
            <th>最低消费金额（元）</th>
            <th>优惠方式</th>
            <th>有效时间</th>
            <th>数量</th>
            <th>加入领券中心</th>
            <th>排序</th>
            <th>操作</th>
        </tr>
        </thead>
        <?php foreach ($list as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->min_price ?></td>
                <td>
                    <div>优惠：<?= $item->discount_type == 2 ? $item->sub_price.'元' : '--' ?></div>
                    <!--<div>折扣：<?= $item->discount_type == 1 ? $item->discount : '--' ?></div>-->
                </td>
                <td>
                    <?php if ($item->expire_type == 1): ?>
                        <span>领取<?= $item->expire_day ?>天过期</span>
                    <?php else: ?>
                        <span><?= date('Y-m-d',$item->begin_time) ?>-<?= date('Y-m-d',$item->end_time) ?></span>
                    <?php endif; ?>
                </td>
                <td>
                    <div>总数量：<?= ($item->total_count == -1) ? "无限制" : $item->total_count ?></div>
                    <div>剩余数量：<?= ($item->total_count == -1) ? "无限制" : ($item->total_count - $item->count) ?></div>
                </td>
                <td><?= ($item->is_join == 1) ? "不加入" : "加入" ?></td>
                <td><?=$item->sort?></td>
                <td>
                    <a class="btn btn-sm btn-primary"
                       href="<?= $urlManager->createUrl(['mch/coupon/edit', 'id' => $item->id]) ?>">编辑</a>
                    <a class="btn btn-sm btn-primary"
                       href="<?= $urlManager->createUrl(['mch/coupon/send', 'id' => $item->id]) ?>">发放</a>
                    <a class="btn btn-sm btn-danger delete-confirm"
                       href="<?= $urlManager->createUrl(['mch/coupon/delete', 'id' => $item->id]) ?>">删除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script>
    $(document).on("click", ".delete-confirm", function () {
        var url = $(this).attr("href");
        $.myConfirm({
            content: "确认删除？",
            confirm: function () {
                $.myLoading();
                $.ajax({
                    url: url,
                    dataType: "json",
                    success: function (res) {
                        if (res.code == 0) {
                            location.reload();
                        } else {
                            $.myLoadingHide();
                            $.myAlert({
                                content: res.msg,
                            });
                        }
                    }
                });
            },
        });
        return false;
    });
</script>