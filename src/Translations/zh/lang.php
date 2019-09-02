<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => '未完成工单',
  'nav-completed-tickets'            => '已完成工单',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => '主题',
  'table-owner'                      => '所有者',
  'table-status'                     => '状态',
  'table-last-updated'               => '上次更新',
  'table-priority'                   => '优先级',
  'table-agent'                      => '客服',
  'table-category'                   => '类别',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => '表中没有可用数据',
  'table-info'                       => '显示从 _START_ 到 _END_ 的共 _TOTAL_ 条数据',
  'table-info-empty'                 => '显示从0到0的共0条数据',
  'table-info-filtered'              => '(从 _MAX_ 条数据中筛选)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => '显示 _MENU_ 数据',
  'table-loading-results'            => '正在加载...',
  'table-processing'                 => '处理中...',
  'table-search'                     => '搜索:',
  'table-zero-records'               => '未找到匹配值',
  'table-paginate-first'             => '第一个',
  'table-paginate-last'              => '最后一个',
  'table-paginate-next'              => '下一个',
  'table-paginate-prev'              => '上一个',
  'table-aria-sort-asc'              => ': 以升序排列',
  'table-aria-sort-desc'             => ': 以降序排列',

  'btn-back'                         => '返回',
  'btn-cancel'                       => '取消', // NEW
  'btn-close'                        => '关闭',
  'btn-delete'                       => '删除',
  'btn-edit'                         => '编辑',
  'btn-mark-complete'                => '标为完成',
  'btn-submit'                       => '提交',

  'agent'                            => '客服',
  'category'                         => '类别',
  'colon'                            => ': ',
  'comments'                         => '注释',
  'created'                          => '新建',
  'description'                      => '描述',
  'flash-x'                          => '×', // &times;
  'last-update'                      => '上次更新',
  'no-replies'                       => '没有回复.',
  'owner'                            => '所有者',
  'priority'                         => '优先级',
  'reopen-ticket'                    => '重新开启',
  'reply'                            => '回复',
  'responsible'                      => '责任',
  'status'                           => '状态',
  'subject'                          => '主题',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => '帮助页面',

// tickets/____
  'index-my-tickets'                 => '我的工单',
  'btn-create-new-ticket'            => '新建工单',
  'index-complete-none'              => '没有已完成工单',
  'index-active-check'               => '如果您找不到您的工单，不妨查看已完成的工单.',
  'index-active-none'                => '没有开启的工单,',
  'index-create-new-ticket'          => '新建工单',
  'index-complete-check'             => '如果您找不到您的工单，不妨查看已完成的工单.',

  'create-ticket-title'              => '新建工单表单',
  'create-new-ticket'                => '新建工单',
  'create-ticket-brief-issue'        => '工单简介',
  'create-ticket-describe-issue'     => '在这里详细描述您的问题',

  'show-ticket-title'                => '工单',
  'show-ticket-js-delete'            => '你确定删除: ',
  'show-ticket-modal-delete-title'   => '删除工单',
  'show-ticket-modal-delete-message' => '你确定要删除: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => '客服 :names 被添加为客服',
  'administrators-are-added-to-administrators'      => '管理员 :names 被添加为管理员', //New
  'agents-joined-categories-ok'                     => '加入类别成功',
  'agents-is-removed-from-team'                     => '从客服团队中移除客服\s :name ',
  'administrators-is-removed-from-team'             => '从管理员团队中移除管理员\s :name ', // New

// CategoriesController
  'category-name-has-been-created'   => '类别 :name 已创建!',
  'category-name-has-been-modified'  => '类别 :name 已修改!',
  'category-name-has-been-deleted'   => '类别 :name 已删除!',

// PrioritiesController
  'priority-name-has-been-created'   => '优先级 :name 已创建!',
  'priority-name-has-been-modified'  => '优先级 :name 已修改!',
  'priority-name-has-been-deleted'   => '优先级 :name 已删除!',
  'priority-all-tickets-here'        => '这里是所有与优先级相关的工单',

// StatusesController
  'status-name-has-been-created'   => '状态 :name 已创建!',
  'status-name-has-been-modified'  => '状态 :name 已修改!',
  'status-name-has-been-deleted'   => '状态 :name 已删除!',
  'status-all-tickets-here'        => '这里是所有与状态相关的工单',

// CommentsController
  'comment-has-been-added-ok'        => '成功发表评论',

// NotificationsController
  'notify-new-comment-from'          => '新评论表单 ',
  'notify-on'                        => ' 打开 ',
  'notify-status-to-complete'        => ' 要完成的状态',
  'notify-status-to'                 => ' 状态改为 ',
  'notify-transferred'               => ' 已交接 ',
  'notify-to-you'                    => ' 给您',
  'notify-created-ticket'            => ' 新建工单 ',
  'notify-updated'                   => ' 更新 ',

 // TicketsController
  'the-ticket-has-been-created'      => '工单已新建!',
  'the-ticket-has-been-modified'     => '工单已更改!',
  'the-ticket-has-been-deleted'      => '工单 :name 已删除!',
  'the-ticket-has-been-completed'    => '工单 :name 已完成!',
  'the-ticket-has-been-reopened'     => '工单 :name 已被重新打开!',
  'you-are-not-permitted-to-do-this' => '你没有权限执行此操作!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => '你没有权限访问此页面!',

];
