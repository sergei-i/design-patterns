<?php

require 'functions.php';

spl_autoload_register('projectAutoload');

////Singleton
//$singletonFile = Singleton\FileSave::getInstance();
//$singletonFile->save(__DIR__);
//
//$singletonFile = Singleton\FileSave::getInstance();
//$singletonFile->save(__DIR__);

////Multiton
//$multitonFile = Multiton\FileSave::getInstance('user-logs');
//$multitonFile->save(__DIR__);
//
//$multitonFile = Multiton\FileSave::getInstance('system-logs');
//$multitonFile->save(__DIR__);
//
//$multitonFile = Multiton\FileSave::getInstance('system-logs');
//$multitonFile->save(__DIR__);

////StaticFactory
//$object = \StaticFactory\StaticFactory::create('\StaticFactory\Factory');
//$object->echo();

////FactoryMethod
//$file = new \FactoryMethod\FileSaveFactory('FileSaveFactory.txt');
//$file->createSaver()->save('Testing FactoryMethod...');
//
//$file = new \FactoryMethod\MysqlSaveFactory('127.0.0.1', 'root', '', 'patterns');
//$file->createSaver()->save("INSERT INTO `text`(`text`) VALUES ('Test patterns...')");

