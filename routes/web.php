<?php
$router->get('/',function(){
    return "<h2 align='center'>React Site API</h2>";
});
$router->get('/ClientReview',['middleware'=>'auth','uses'=>'ClientReviewController@onALLSelect']);
$router->post('/ContactSend',['middleware'=>'auth','uses'=>'ContactController@onContactSend']);
$router->get('/ChartData', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);

$router->get('/CourseHome',['middleware'=>'auth','uses'=>'CourseController@onSelectFour']);
$router->get('/CourseAll',['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);
$router->get('/CourseDetails/{courseID}',['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);
$router->get('/Footer',['middleware'=>'auth','uses'=>'FooterController@onSelectAll']);
$router->get('/InformationEtc',['middleware'=>'auth','uses'=>'InformationEtcController@onSelectAll']);
$router->get('/Service',['middleware'=>'auth','uses'=>'ServiceController@onSelectAll']);


$router->get('/ProjectHome',['middleware'=>'auth','uses'=>'ProjectController@onSelectThree']);
$router->get('/ProjectAll',['middleware'=>'auth','uses'=>'ProjectController@onSelectAll']);
$router->get('/ProjectDetails/{projectID}',['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);

$router->get('/VideoHome',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectVideo']);
$router->get('/TotalProjectAndClientHome',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectProjectClientHome']);
$router->get('/TechDesHome',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectTechDesHome']);
$router->get('/HomeTopTitle',['middleware'=>'auth','uses'=>'HomeEtcController@onSelectHomeTopTitle']);


