<?php

return [

 /*
  *  Constants
  */
  'nav-settings'                  => '设置',
  'nav-agents'                    => '客服',
  'nav-dashboard'                 => '面板',
  'nav-categories'                => '类别',
  'nav-priorities'                => '优先级',
  'nav-statuses'                  => '状态',
  'nav-configuration'             => '配置',
  'nav-administrator'             => '管理员',  //new

  'table-hash'                    => '#',
  'table-id'                      => 'ID',
  'table-name'                    => '姓名',
  'table-action'                  => '操作',
  'table-categories'              => '类别',
  'table-join-category'           => '加入类别',
  'table-remove-agent'            => '从客服中删除',
  'table-remove-administrator'    => '从管理员中删除', // New

  'table-slug'                    => '固定网址',
  'table-default'                 => '默认值',
  'table-value'                   => '设置值',
  'table-lang'                    => '语言',
  'table-edit'                    => '编辑',

  'btn-back'                      => '返回',
  'btn-delete'                    => '删除',
  'btn-edit'                      => '编辑',
  'btn-join'                      => '加入',
  'btn-remove'                    => '移除',
  'btn-submit'                    => '提交',
  'btn-save'                      => '保存',
  'btn-update'                    => '更新',

  'colon'                         => ': ',

 /*
  *  Page specific
  */

// tickets-admin/____
  'index-title'                         => '工单系统',
  'index-empty-records'                 => '没有工单',
  'index-total-tickets'                 => '所有的工单',
  'index-open-tickets'                  => '新建工单',
  'index-closed-tickets'                => '关闭工单',
  'index-performance-indicator'         => '绩效指标',
  'index-periods'                       => '期间',
  'index-3-months'                      => '3个月',
  'index-6-months'                      => '6个月',
  'index-12-months'                     => '12个月',
  'index-tickets-share-per-category'    => '共享给所有类别的工单',
  'index-tickets-share-per-agent'       => '共享给所有客服的工单',
  'index-categories'                    => '类别',
  'index-category'                      => '类别',
  'index-agents'                        => '客服',
  'index-agent'                         => '客服',
  'index-administrators'                => '管理员',  //new
  'index-administrator'                 => '管理员',  //new
  'index-users'                         => '用户',
  'index-user'                          => '用户',
  'index-tickets'                       => '工单',
  'index-open'                          => '开启',
  'index-closed'                        => '关闭',
  'index-total'                         => '总计',
  'index-month'                         => '月',
  'index-performance-chart'             => '完成工单平均天数',
  'index-categories-chart'              => '不同类型的工单分布',
  'index-agents-chart'                  => '不同客服的工单分布',

// tickets-admin/agent/____
  'agent-index-title'             => '客服管理',
  'btn-create-new-agent'          => '新建客服',
  'agent-index-no-agents'         => '没有客服, ',
  'agent-index-create-new'        => '添加客服',
  'agent-create-title'            => '添加客服',
  'agent-create-add-agents'       => '添加客服',
  'agent-create-no-users'         => '没有普通账号，请先创建普通用户。',
  'agent-create-select-user'      => '请选择要添加为客服的账号',

// tickets-admin/administrators/____
  'administrator-index-title'                   => '管理管理员',  //new
  'btn-create-new-administrator'                => '新建管理员',  //new
  'administrator-index-no-administrators'       => '没有管理员, ',  //new
  'administrator-index-create-new'              => '添加管理员',  //new
  'administrator-create-title'                  => '添加管理员',  //new
  'administrator-create-add-administrators'     => '添加管理员',  //new
  'administrator-create-no-users'               => '没有普通账号，请先创建普通账号.',  //new
  'administrator-create-select-user'            => '请选择要添加为管理员的普通账号',  //new

// tickets-admin/category/____
  'category-index-title'          => '类别管理',
  'btn-create-new-category'       => '新建新类别',
  'category-index-no-categories'  => '没有类别, ',
  'category-index-create-new'     => '新建新类别',
  'category-index-js-delete'      => '你确定要删除类别: ',
  'category-create-title'         => '新建新类别',
  'category-create-name'          => '名称',
  'category-create-color'         => '颜色',
  'category-edit-title'           => '编辑: :name',

// tickets-admin/priority/____
  'priority-index-title'          => '优先级管理',
  'btn-create-new-priority'       => '新建优先级',
  'priority-index-no-priorities'  => '没有优先级, ',
  'priority-index-create-new'     => '新建优先级',
  'priority-index-js-delete'      => '你确定要删除这个优先级: ',
  'priority-create-title'         => '新建优先级',
  'priority-create-name'          => '名称',
  'priority-create-color'         => '颜色',
  'priority-edit-title'           => '编辑优先级: :name',

// tickets-admin/status/____
  'status-index-title'            => '状态管理',
  'btn-create-new-status'         => '新建状态',
  'status-index-no-statuses'      => '没有状态,',
  'status-index-create-new'       => '新建状态',
  'status-index-js-delete'        => '你确定要删除状态: ',
  'status-create-title'           => '新建状态',
  'status-create-name'            => '名称',
  'status-create-color'           => '颜色',
  'status-edit-title'             => '编辑状态: :name',

// tickets-admin/configuration/____
  'config-index-title'            => '配置设定',
  'config-index-subtitle'         => '设置',
  'btn-create-new-config'         => '新建配置',
  'config-index-no-settings'      => '没有配置,',
  'config-index-initial'          => '初始',
  'config-index-tickets'          => '工单',
  'config-index-notifications'    => '通知',
  'config-index-permissions'      => '权限',
  'config-index-editor'           => '编辑', //Added: 2016.01.14
  'config-index-other'            => '其他',
  'config-create-title'           => '新建全局配置',
  'config-create-subtitle'        => '新建配置',
  'config-edit-title'             => '编辑全局配置',
  'config-edit-subtitle'          => '编辑配置',
  'config-edit-id'                => 'ID',
  'config-edit-slug'              => '固定网址',
  'config-edit-default'           => '默认值',
  'config-edit-value'             => '设置值',
  'config-edit-language'          => '语言',
  'config-edit-unserialize'       => '获取，更新数组的值',
  'config-edit-serialize'         => '获取，更新数组的值（序列化）',
  'config-edit-should-serialize'  => '序列化', //Added: 2016-01-16
  'config-edit-eval-warning'      => '这个选项需要调用 eval()函数!
  									  如果您禁用了 eval()函数，或者您不了解本功能，请不要使用本功能!
  									  运行的程序:', //Added: 2016-01-16
  'config-edit-reenter-password'  => '重新输入密码', //Added: 2016-01-16
  'config-edit-auth-failed'       => '密码错误', //Added: 2016-01-16
  'config-edit-eval-error'        => '无效值', //Added: 2016-01-16
  'config-edit-tools'             => '工具:',

];
