<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('add two different customers to database');
$I->amOnPage('/');
$I->see('Our CRM');
