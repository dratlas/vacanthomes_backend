<?php
/* database constants */
define("DB_HOST", "localhost" ); 		// set database host
define("DB_USER", "" ); 			// create database user
define("DB_PASS", "" ); 				// create database password
define("DB_PORT", 3306);				// set database port
define("DB_NAME", "c4i_homes" ); 			// set database name
define("DB_CHARSET", "utf8" ); 			// set database charset
define("DB_DEBUGMODE", true ); 			// set database charset

define("ENCODING_JSON", "application/json");
define("ENCODING_XML", "application/xml");

/* actions for the USERS REST resource */
define("ACTION_GET_USER", 31);
define("ACTION_GET_USERS", 32);
define("ACTION_CREATE_USER", 33);
define("ACTION_UPDATE_USER", 34);
define("ACTION_DELETE_USER", 35);
define("ACTION_SEARCH_USERS", 36);
define("ACTION_AUTHENTICATE", 37);

/* actions for the PROPERTYS REST resource */
define("ACTION_GET_PROPERTY", 51);
define("ACTION_GET_PROPERTIES", 52);
define("ACTION_CREATE_PROPERTY", 53);
define("ACTION_DELETE_PROPERTY", 55);
define("ACTION_SEARCH_PROPERTIES", 56);

/* HTTP status codes 2xx*/
define("HTTPSTATUS_OK", 200);
define("HTTPSTATUS_CREATED", 201);
define("HTTPSTATUS_NOCONTENT", 204);

/* HTTP status codes 3xx (with slim the output is not produced i.e. echo statements are not processed) */
define("HTTPSTATUS_NOTMODIFIED", 304);

/* HTTP status codes 4xx */
define("HTTPSTATUS_BADREQUEST", 400);
define("HTTPSTATUS_UNAUTHORIZED", 401);
define("HTTPSTATUS_FORBIDDEN", 403);
define("HTTPSTATUS_NOTFOUND", 404);
define("HTTPSTATUS_REQUESTTIMEOUT", 408);
define("HTTPSTATUS_TOKENREQUIRED", 499);

/* HTTP status codes 5xx */
define("HTTPSTATUS_INTSERVERERR", 500);

define("TIMEOUT_PERIOD", 120);

/* general message */
define("GENERAL_MESSAGE_LABEL", "message");
define("GENERAL_SUCCESS_MESSAGE", "success");
define("GENERAL_ERROR_MESSAGE", "error");
define("GENERAL_NOCONTENT_MESSAGE", "no-content");
define("GENERAL_NOTMODIFIED_MESSAGE", "not modified");
define("GENERAL_INTERNALAPPERROR_MESSAGE", "internal app error");
define("GENERAL_CLIENT_ERROR", "client error: modify the request");
define("GENERAL_INVALIDTOKEN_ERROR", "Invalid token");
define("GENERAL_APINOTEXISTING_ERROR", "Api is not existing");
define("GENERAL_RESOURCE_CREATED", "Resource has been created");
define("GENERAL_RESOURCE_UPDATED", "Resource has been updated");
define("GENERAL_RESOURCE_DELETED", "Resource has been deleted");

define("GENERAL_FORBIDDEN", "Request is ok but action is forbidden");
define("GENERAL_INVALIDBODY", "Request is ok but transmitted body is invalid");

define("GENERAL_WELCOME_MESSAGE", "Welcome to DIT web-services");
define("GENERAL_INVALIDROUTE", "Requested route does not exist");


/* representation of a new user in the DB */
define("TABLE_USER_NAME_LENGTH", 25);
define("TABLE_USER_SURNAME_LENGTH", 25);
define("TABLE_USER_EMAIL_LENGTH", 50);
define("TABLE_USER_PASSWORD_LENGTH", 40);

/* representation of a new PROPERTY in the DB  */
define("TABLE_PROPERTY_TYPE_LENGTH", 20);

?>
