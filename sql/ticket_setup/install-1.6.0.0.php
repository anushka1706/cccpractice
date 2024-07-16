<?php

$installer = $this;
$installer->startSetup();

$ticket = $installer->getConnection()
    ->newTable($installer->getTable('ticket/ticket'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'id')
    ->addColumn('assigned_user', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'assigned_user')
    ->addColumn('assigned_user', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'assigned_user')
    ->addColumn('priority', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'priority')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'status')
    ->addColumn('assigned_by', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'assigned_by')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'created_at')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'updated_at');
$installer->getConnection()->createTable($ticket);

$comments = $installer->getConnection()
    ->newTable($installer->getTable('ticket/comments'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('ticket_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
    ), 'id')
    ->addColumn('comment', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => false,
    ), 'comment')
    ->addColumn('user_id', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
    ), 'user_id')
    ->addColumn('created_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'created_at')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        'nullable'  => false,
    ), 'updated_at');
$installer->getConnection()->createTable($comments);

$status = $installer->getConnection()
    ->newTable($installer->getTable('ticket/status'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('status_code', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'status_code')
    ->addColumn('status_label', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
        'nullable'  => false,
    ), 'status_label')
    ->addColumn('status_color', Varien_Db_Ddl_Table::TYPE_VARCHAR,255, array(
        'nullable'  => false,
    ), 'status_color');
$installer->getConnection()->createTable($status);


$installer->endSetup();
