<?php

require 'functions.php';

spl_autoload_register('projectAutoload');

////Singleton
//$singletonFile = Singleton\FileSave::getInstance();
//$singletonFile->save(__DIR__);
//
//$singletonFile = Singleton\FileSave::getInstance();
//$singletonFile->save(__DIR__);
//
////Multiton
//$multitonFile = Multiton\FileSave::getInstance('user-logs');
//$multitonFile->save(__DIR__);
//
//$multitonFile = Multiton\FileSave::getInstance('system-logs');
//$multitonFile->save(__DIR__);
//
//$multitonFile = Multiton\FileSave::getInstance('system-logs');
//$multitonFile->save(__DIR__);
//
////StaticFactory
//$object = \StaticFactory\StaticFactory::create('\StaticFactory\Factory');
//$object->echo();
//
////FactoryMethod
//$file = new \FactoryMethod\FileSaveFactory('FileSaveFactory.txt');
//$file->createSaver()->save('Testing FactoryMethod...');
//
//$file = new \FactoryMethod\MysqlSaveFactory('127.0.0.1', 'root', '', 'patterns');
//$file->createSaver()->save('Test patterns...');
//
////AbstractFactory
//function queryExecute(\AbstractFactory\DatabaseFactory $factory)
//{
//    $query = $factory->query();
//    $query->execute("INSERT INTO `messages` (`text`) VALUES ('Testing AbstractFactory...')");
//}
//
//queryExecute(new \AbstractFactory\MysqlDatabaseFactory('127.0.0.1', 'root', '', 'patterns'));
//queryExecute(new \AbstractFactory\SqliteDatabaseFactory('sqlite.db'));

//Builder
//function queryExecute(\Builder\SqlQueryBuilder $builder)
//{
//    return $builder
//        ->select(['id', 'text'])
//        ->from('messages')
//        ->where('id', '>', '1')
//        ->limit(10, 1)
//        ->getQuery();
//}
//
//$query = queryExecute(new \Builder\MysqlQueryBuilder());
//echo $query;

////Prototype
//$user = new \Prototype\User('User');
//$post = new \Prototype\Post('First post', 'Hello World', $user);
//$post->addComment('First comment');
//$copiedPost = clone $post;
//
//echo '<pre>';
//var_dump($post);
//var_dump($copiedPost);
//echo '</pre>';

