<?php
/**
 * 定义api报错
 * @author gaobinzhan <gaobinzhan@gmail.com>
 */


namespace App\ExceptionCode;


/**
 * Class ApiCode
 * @package App\ExceptionCode
 */
class ApiCode
{
    //基本错误码 0～1000
    const AUTH_ERROR = 401;
    const NO_PERMISSION_PROCESS = 402;
    const NO_DATA_AVAILABLE = 403;

    //用户错误码 3000～3999

    const
        USER_NOT_FOUND = 3001,
        USER_ID_INVALID = 3002,
        USER_EMAIL_ALREADY_USE = 3003,
        USER_PASSWORD_ERROR = 3004,
        USER_CREATE_APPLICATION_FAIL = 3005,
        USER_APPLICATION_SET_READ_FAIL = 3006,
        USER_INFO_MODIFY_FAIL = 3007,
        USER_APPLICATION_NOT_FOUND = 3008,
        USER_APPLICATION_PROCESSED = 3009,
        USER_APPLICATION_TYPE_WRONG = 3010,
        USER_IN_VIDEO_CALL = 3011;


    const FRIEND_GROUP_CREATE_FAIL = 4001,
        FRIEND_GROUP_NOT_FOUND = 4002,
        FRIEND_NOT_FOUND = 4003,
        FRIEND_NOT_ADD_SELF = 4004,
        FRIEND_RELATION_ALREADY = 4005,
        FRIEND_CALL_IN_PROGRESS = 4006,
        FRIEND_GROUP_CAN_NOT_DELETE = 4007,
        FRIEND_RELATION_NOT_FOUND = 4008;

    const GROUP_CREATE_FAIL = 5001,
        GROUP_NOT_FOUND = 5002,
        GROUP_RELATION_CREATE_FAIL = 5010,
        GROUP_RELATION_ALREADY = 5011,
        GROUP_FULL = 5012,
        GROUP_NOT_MEMBER = 5013;


    // ext 9000~9999
    const
        JWT_PRIVATE_KEY_EMPTY = 9001,
        JWT_PUBLIC_KEY_EMPTY = 9002,
        JWT_ALG_EMPTY = 9003,
        CONFIG_NOT_FOUND = 9005,
        FILE_DOES_NOT_EXIST = 9006,
        ERR_ALI_MAIL_CONFIG = 9007,
        MAIL_SENDING_LIMIT = 9008,
        MAIL_SEND_FAIL = 9009,
        VERIFY_CODE_ERROR = 9010,
        VERIFY_CODE_IS_INVALID = 9011,
        VERiFY_CODE_USED = 9012;

    public static $errorMessages = [


        self::AUTH_ERROR => 'Authorization has been denied for this request !',
        self::NO_PERMISSION_PROCESS => 'No permission to process !',
        self::NO_DATA_AVAILABLE => 'No data available !',


        self::USER_NOT_FOUND => 'User not found!',
        self::USER_ID_INVALID => 'The user id is invalid !',
        self::USER_EMAIL_ALREADY_USE => 'This mailbox is already in use !',
        self::USER_PASSWORD_ERROR => 'User password input error !',
        self::USER_CREATE_APPLICATION_FAIL => 'Failed to create user application !',
        self::USER_APPLICATION_SET_READ_FAIL => 'application set to read failed',
        self::USER_INFO_MODIFY_FAIL => 'Failed to modify user information !',
        self::USER_APPLICATION_NOT_FOUND => 'Application information does not exist !',
        self::USER_APPLICATION_PROCESSED => 'Application information has been processed !',
        self::USER_APPLICATION_TYPE_WRONG => 'Wrong application type !',
        self::USER_IN_VIDEO_CALL => '您正在视频通话中！', // You are in a video call


        self::FRIEND_GROUP_CREATE_FAIL => 'Friend group creation failed !',
        self::FRIEND_GROUP_NOT_FOUND => 'Friend group not found !',
        self::FRIEND_NOT_FOUND => 'Friend not found!',
        self::FRIEND_NOT_ADD_SELF => 'You can\'t add yourself as a friend !',
        self::FRIEND_RELATION_ALREADY => 'You\'re already friends !',
        self::FRIEND_CALL_IN_PROGRESS => '对方正在视频通话中', // Video call in progress
        self::FRIEND_GROUP_CAN_NOT_DELETE => 'There are friends under this group that cannot be deleted !',

        self::GROUP_CREATE_FAIL => 'Group creation failed !',
        self::GROUP_NOT_FOUND => 'Group not found !',
        self::GROUP_RELATION_CREATE_FAIL => 'Group relation creation failed !',
        self::GROUP_RELATION_ALREADY => 'You\'re already a member of the group !',
        self::GROUP_FULL => 'Group full !',
        self::GROUP_NOT_MEMBER => 'You are not a member of this group !',
        self::FRIEND_RELATION_NOT_FOUND => 'No friends found !',

        self::JWT_PRIVATE_KEY_EMPTY => 'The private key is invalid !',
        self::JWT_PUBLIC_KEY_EMPTY => 'The public key is invalid !',
        self::JWT_ALG_EMPTY => 'The alg is invalid !',
        self::CONFIG_NOT_FOUND => 'Configuration not found !',
        self::FILE_DOES_NOT_EXIST => 'File does not exist !',
        self::ERR_ALI_MAIL_CONFIG => 'AliYun mail config not found !',
        self::MAIL_SENDING_LIMIT => 'Mail sending limit !',
        self::MAIL_SEND_FAIL => 'Mail send fail !',
        self::VERIFY_CODE_ERROR => 'Verification code error !',
        self::VERIFY_CODE_IS_INVALID => 'Verification code is invalid !',
        self::VERiFY_CODE_USED => 'Verification code used !'
    ];
}
