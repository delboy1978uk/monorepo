<?php

use Bone\App\AppPackage;
use Bone\BoneDoctrine\BoneDoctrinePackage;
use Bone\BoneUserApi\BoneUserApiPackage;
use Bone\Mail\MailPackage;
use Bone\Notification\PushToken\PushNotificationPackage;
use Bone\OAuth2\BoneOAuth2Package;
use Bone\OpenApi\OpenApiPackage;
use Bone\Paseto\PasetoPackage;
use Bone\Settings\SettingsPackage;
use Bone\User\BoneUserPackage;
use Bone\VendorDev\VendorDevPackage;
use Del\Generator\GeneratorPackage;
use Del\Person\PersonPackage;
use Del\UserPackage;

return [
    'packages' => [
        MailPackage::class,
        BoneDoctrinePackage::class,
        PasetoPackage::class,
        PersonPackage::class,
        UserPackage::class,
        BoneUserPackage::class,
        BoneOAuth2Package::class,
        OpenApiPackage::class,
        BoneUserApiPackage::class,
        PushNotificationPackage::class,
        SettingsPackage::class,
        AppPackage::class,
    ],
];
