<?php

/*
 * Setting descriptions
 *
 * See Seeds/SettingsTableSeeder.php
 */

$codemirrorVersion = Kordy\Ticketit\Helpers\Cdn::CodeMirror;
$summernoteVersion = Kordy\Ticketit\Helpers\Cdn::Summernote;

return [

    'main_route' => '<p><b>Ticketit 主路径</b>: 从哪里访问工单系统 (例如： <code>http://url/tickets</code>)</p>', 'admin_route' => '<p><b>Ticketit 管理路径</b>: 从哪里访问工单管理面板 (例如： <code>http://url/tickets-admin</code>)</p>', 'master_template' => '<p><b>模板继承</b>: 要继承的主视图模板</p>', 'email.template' => '<p><b>模板继承</b>: 要继承的邮件模板</p>', 'email.header' => '<p><img src="http://i.imgur.com/5aJjuZL.jpg"/></p>', 'email.signoff' => '<p><img src="http://i.imgur.com/jONMwgF.jpg"/></p>', 'email.signature' => '<p><img src="http://i.imgur.com/coi3R63.jpg"/></p>', 'email.dashboard' => '<p><img src="http://i.imgur.com/qzNzJD4.jpg"/></p>', 'email.google_plus_link' => '<p><b>Toogle 图标地址</b>: 空或字符串</p><p><img src="http://i.imgur.com/fzyxfSg.jpg"/></p>', 'email.facebook_link' => '<p><b>Toogle 图标地址</b>: 空或字符串</p><p><img src="http://i.imgur.com/FQQzr98.jpg"/></p>', 'email.twitter_link' => '<p><b>Toogle 图标地址</b>: 空或字符串</p><p><img src="http://i.imgur.com/5JmkrF1.jpg"/></p>', 'email.footer' => '', 'email.footer_link' => '', 'email.color_body_bg' => '<p><img src="http://i.imgur.com/KTF7rEJ.jpg"/></p>', 'email.color_header_bg' => '<p><img src="http://i.imgur.com/wenw5H5.jpg"/></p>', 'email.color_content_bg' => '<p><img src="http://i.imgur.com/7r8dAFj.jpg"/></p>', 'email.color_footer_bg' => '<p><img src="http://i.imgur.com/KTjkdSN.jpg"/></p>', 'email.color_button_bg' => '<p><img src="http://i.imgur.com/0TbGIyt.jpg"/></p>', 'default_status_id' => '<p>新建工单的默认状态</p>', 'default_close_status_id' => '<p>完成工单的默认状态</p>', 'default_reopen_status_id' => '<p>重新打开的工单的默认状态</p>', 'paginate_items' => '<p><b>每页展示数</b>: 用于一般的分页.</p>', 'length_menu' => '<p><b>每页展示数</b>: 用于工单表</p>', 'status_notification' => <<<'ENDHTML'
			<p>
				<b>状态通知</b>: 当工单状态改变是发送电子邮件通知工单的所有者/客服
			</p>

			<p>
				默认为发送通知: <code>1</code><br>
				不发送通知: <code>0</code>
			</p>
ENDHTML

    , 'comment_notification' => <<<'ENDHTML'
			<p>
				<b>评论通知</b>: 当有新评论时发送通知
			</p>

			<p>
				默认为发送通知: <code>1</code><br>
				不发送通知: <code>0</code>
			</p>
ENDHTML

    , 'queue_emails' => <<<'ENDHTML'
			<p>
				使用队列发送电子邮件 (Mail::queue 而不是 Mail::send).
				请注意： Mail::queue 需要提前配置 <a target="_blank" href="http://laravel.com/docs/master/queues">http://laravel.com/docs/master/queues</a>
			</p>

			<p>
				默认为不使用队列: <code>0</code><br>
				使用队列: <code>1</code>
			</p>
ENDHTML

    , 'assigned_notification' => <<<'ENDHTML'
			<p><b>客服通知</b>: 通知客服新工单分配或工单移交信息 (包括自动分配和手动分配)</p>

			<p>
				不通知客服: <code>0</code><br>
				通知客服: <code>1</code>
			</p>
ENDHTML

    , 'agent_restrict' => <<<'ENDHTML'
			<p><b>客服限制</b>: 限制客服只能访问分配的工单</p>

			<p>
				限制客服只能访问分配的工单: <code>1</code>
			</p>
ENDHTML

    , 'close_ticket_perm' => '<p><b>永久关闭工单</b>: 谁有权限关闭工单</p>', 'reopen_ticket_perm' => '<p><b>重新永久打开工单</b>: 谁有权限重新永久打开工单</p>', 'delete_modal_type' => <<<'ENDHTML'
			<p><b>删除确认</b>: 选择确认删除是使用的确认消息类型</p>

			<p>选项: <code>内置</code>, <code>弹窗</code></p>
ENDHTML

    /* ------------------ JS EDITOR ------------------ */, 'editor_enabled' => <<<'ENDHTML'
			<p>在文本编辑区域启用 summernote 编辑器</p>

			<p>
				禁用: <code>0</code><br>
				启用: <code>1</code>
			</p>
ENDHTML

    , 'include_font_awesome' => <<<'ENDHTML'
			<p>如果 Font-awesome css 已经在 ticketit 的外部被引入, 应该将这个选项设置为 <code>0</code></p>

			<p>
				不引入: <code>0</code><br>
				引入: <code>1</code>
			</p>
ENDHTML

    , 'summernote_locale' => <<<"ENDHTML"
			<p>
				summernote js 文本编辑器应当使用哪种语言<br>
				如果设定值为 <code>laravel</code>, 则将使用 <code>config/app.php</code> 中 locale       的设置
			</p>

			<p>示例: <code>hu-HU</code> 则使用匈牙利语</p>

			<p>请参考<a target="_blank" href="https://cdnjs.com/libraries/summernote/$summernoteVersion">这里</a>的可用语言设置</p>
ENDHTML

    , 'editor_html_highlighter' => <<<'ENDHTML'
			<p>是否要引入 codemirror 语法高亮</p>

			<p><a target="_blank" href="http://summernote.org/examples/#codemirror-as-codeview">http://summernote.org/examples/#codemirror-as-codeview</a></p>

			<p>
				不引入: <code>0</code><br>
				引入: <code>1</code>
			</p>
ENDHTML

    , 'codemirror_theme' => <<<'ENDHTML'
			<p>语法高亮的主题</p>

			<p>可用主题请参考<a target="_blank" href="https://cdnjs.com/libraries/codemirror/$codemirrorVersion">这里</a></p>
ENDHTML

    , 'summernote_options_json_file' => <<<'ENDHTML'
			<p>
				通过JSON来设定 summernote js 编辑器的默认值<br>
				请参考<a target="_blank" href="http://summernote.org/deep-dive/#initialization-options">这里</a>
			的可用选项</p>

			<p>这里设置JSON配置文件在项目中的相对路径</p>
ENDHTML

    , 'purifier_config' => <<<'ENDHTML'
			<p>设置允许使用的HTML标签</p>
			<p>
				修改这个设置将会覆盖设置的<a target="_blank" href="https://github.com/mewebstudio/Purifier/blob/master/config/purifier.php">这些文件</a><br>
				通过运行命令 <code>php artisan vendor:publish</code> 并修改文件 <code>config/purifier.php</code>可以实现相同的效果
			</p>

			<p>完整文档: <a target="_blank" href="http://htmlpurifier.org/docs">http://htmlpurifier.org/docs</a></p>
ENDHTML

    , 'routes' => <<<'ENDHTML'
			<p>设置自定义路由文件</p>
			<p>
				如果你需要更改任何Ticketit的组件，这很有用
			</p>
ENDHTML

    , 'bootstrap_version' => <<<'ENDHTML'
			<p>Laravel 5.6+ 的默认CSS库为Bootstrap 4. 在这里你可以设置 Ticketit 使用的Bootstrap版本. 允许的值为 <code>3</code> 和 <code>4</code>.
			</p>
ENDHTML

];
