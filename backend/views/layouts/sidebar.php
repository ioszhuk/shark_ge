<?php

use \backend\widgets\MetronicSidebar;
use yii\helpers\Html;

?>
<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">

        <!-- SIDEBAR START -->
		<?= MetronicSidebar::widget([
			'items' => [
				[
					'label' => 'Контент',
					'template' => 'submenu',
					'icon' => 'flaticon-tool',
					'url' => 'javascript:;',
					'items' => [
						[
							'label' => 'Главная стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/home-page'],
						],
						[
							'label' => 'Помощь стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/help-page'],
						],
						[
							'label' => 'Клиентам стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/client-page'],
						],
						[
							'label' => 'Водителям стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/driver-page'],
						],
						[
							'label' => 'Комментарии стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/testimonials-page'],
						],
						[
							'label' => 'Контакты стр.',
							'template' => 'single',
							'icon' => 'flaticon-tool',
							'url' => ['settings/contacts-page'],
						],
					],
				],

				[
					'label' => 'Города',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['city/index'],
				],
				[
					'label' => 'Клиенты',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['client/index'],
				],
				[
					'label' => 'Водители',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['driver/index'],
				],
				[
					'label' => 'Отзывы',
					'template' => 'single',
					'icon' => 'flaticon-tool',
					'url' => ['testimonial/index'],
				],

			]
		]) ?>
        <!-- SIDEBAR END -->

    </div>
    <!-- END: Aside Menu -->

</div>
<!-- END: Left Aside -->