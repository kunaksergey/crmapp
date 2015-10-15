<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('?r=site/docs');
$I->see( 'Документация', 'h1');
$I->seeLargeBodyOfText();