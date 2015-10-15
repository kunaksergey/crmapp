<?php
return [
	'id'=>'crmapp',
	'bootstrap'=>['debug'],
	'basePath'=>realpath(__DIR__.'/../'),
	/*'viewPath'*/ //этого свойтва пока нет
'components'=>[
	'authManager'=>[
		'class'=>'yii\rbac\DbManager',
		'defaultRoles'=>['guest'],
	],
	'mail'=>[
		'class'=>yii\swiftmailer\Mailer::className(),
		'messageConfig'=>[
			'charset' => 'UTF-8',
			'from' => 'noreply@crmapp.me'
			],
		'transport'=>[
			'class' => 'Swift_MailTransport',
		],
	],

	'user'=>[
	'identityClass'=>'app\models\user\UserRecord'
	],
	  'response'=>[
	  	  'formatters'=>[
	  	  	'yaml'=>[
	  	  		'class'=>'app\utilities\YamlResponseFormatter'
	  	  	]
	  	  ]
	  ],
	  'request'=>[
	  		'cookieValidationKey'=>'kunak905',
	  ],
	  'view'=>[
	  		'renderers'=>[
	  			'md'=>[
	  				'class'=>'app\utilities\MarkdownRenderer'
	  			]
	  		],
	  	/*'theme'=>[
	  		'class'=>yii\base\Theme::className(),
	  		'basePath'=>'@app/themes/snowy'
	  		]*/
	  ],
	  'db' => require(__DIR__.'/db.php'),
	  /*'urlManager'=>[
	  	'enablePrettyUrl'=>true,
	  	'showScriptName'=>false
	  ]	*/
	],
	'modules'=>[
	 	'gii'=>[
	 		'class'=>'yii\gii\Module',
	 		'allowedIPs'=>['*']
	 	],
	 	'firstlevel'=>[
	 		'class'=>'app\utilities\FirstModule',
	 		'modules'=>[
	 			'secondlevel'=>[
	 				'class'=>'app\utilities\SecondModule',
	 			]
	 		]
	 	],
	 	'debug'=>[
	 		'class'=>'yii\debug\Module'
	 	],
	 	'api'=>[
	 		'class'=>'app\api\ApiModule'
	 	]
	],
	'extensions' => require(__DIR__.'/../vendor/yiisoft/extensions.php'),
	
];