<?php
/*
PHP5 PHP7 共用 以 /home/httpd/htdocs/home/newportal/zmi/dev/class.basic.php 修改

Version	：1.2.10
Author	：陳志銘
Updated	：2022/07/07
*/
require(dirname(__FILE__) . '/basic.php');

class JTools extends basic{
    
    public $env, $appEnv, $systemPath, $webPath, $siteName, $pageTitle, $get, $post, $raw, $dbPrefix, $toastMessage, $modalMessage, $mailNoReply, $mailTemp1, $mailTemp2;

    function __construct($env = 'dev', $debug = false, $jimmy = 'prd'){
        parent::__construct($env, $debug, $jimmy);

        $this->systemPath = parent::responseSystemPath();
        $this->webPath = parent::responseWebPath();
    }

    public function dp1(){
		return parent::dp1();
	}

	public function dp2(){
		return parent::dp2();
	}

	public function dp3(){
		return parent::dp3();
	}

	public function dp4(){
		return parent::dp4();
	}

    public function dp5(){
		return parent::dp5();
	}

    public function dp7(){
		return parent::dp7();
	}

    public function mysql($host = '', $user = '', $password = '', $port = 3306, $dbName = ''){
        return parent::mysql($host, $user, $password, $port, $dbName);
	}

    public function pbx(){
        return parent::pbx();
    }

	public function vip(){
		return parent::vip();
	}

    public function www(){
        return parent::www();
    }

    public function mysqlBeginTrx($connection = false){
        return parent::mysqlBeginTrx($connection);
    }

    public function mysqlCommitTrx($connection = false){
        return parent::mysqlCommitTrx($connection);
    }

    public function mysqlLastInsertId($connection = false){
        return parent::mysqlLastInsertId($connection);
    }

    public function mysqlClose($connection = false){
        return parent::mysqlClose($connection);
    }

    public function checkMail($mail = ''){
        return parent::checkMail($mail);
    }

    public function checkId($id = ''){
        return parent::checkId($id);
    }

    public function checkCompanyId($id = ''){
        return parent::checkCompanyId($id);
    }

    public function diffDays($d1 = '', $d2 = ''){
		return parent::diffDays($d1, $d2);
	}
    
    public function getHeshHmac($input = '', $mode = 'sha256', $key = 'elifemall'){
        return parent::getHeshHmac($input, $mode, $key);
    }

    public function embedStoreSelect(){
        return parent::embedStoreSelect();
    }

    public function embedAddressSelect(){
        return parent::embedAddressSelect();
    }

    public function ftp($source = array(), $destination = array(), $ftpHost = '', $ftpPort = 21, $ftpUser = '', $ftpPassword = '', $mode = 1, $passive = 1){
        return parent::ftp($source, $destination, $ftpHost, $ftpPort, $ftpUser, $ftpPassword, $mode, $passive);
    }

    public function ftpDownload($source = array(), $destination = array(), $host = '', $user = '', $password = '', $port = 21){
        return parent::ftpDownload($source, $destination, $host, $user, $password, $port);
    }

    public function sftp($source = array(), $destination = array(), $host = '', $user = '', $password = '', $port = 22, $mode = ''){
        return parent::sftp($source, $destination, $host, $user, $password, $port, $mode);
    }

    public function sftpDownload($source = array(), $destination = array(), $host = '', $user = '', $password = '', $port = 22){
        return parent::sftpDownload($source, $destination, $host, $user, $password, $port);
    }

    public function ecAPI($api = '', $request = 'POST', $data = array(), $header = array(), $timeout = 120){
        return parent::ecAPI($api, $request, json_encode($data), $header, $timeout);
    }

    public function shopeeAPI2($api = '', $request = 'POST', $sign = array(), $get = array(), $post = array(), $header = array(), $timeout = 120){
        return parent::shopeeAPI2($api, $request, $sign, json_encode($get), json_encode($post), $header, $timeout);
    }
    
    public function jsCaptureImage($imagePath = '', $textName = 'j_ImageBase64', $width = 500, $height = 400, $view = 0){
        return parent::jsCaptureImage($imagePath, $textName, $width, $height, $view);
    }

    public function jwtEncode($payload = array(), $privateKey = 'elifemall', $mode = 'HS256'){
        return parent::jwtEncode($payload, $privateKey, $mode);
    }

    public function jwtDecode($jwt = '', $privateKey = 'elifemall', $mode = 'HS256'){
        return parent:: jwtDecode($jwt, $privateKey, $mode);
    }

    public function generatePDF($html = '', $title = '', $footer = '', $download = 1, $filename = '', $orientation = 'P', $format = 'A4', $password = '', $fontsize = 10){
        return parent::generatePDF($html, $title, $footer, $download, $filename, $orientation, $format, $password, $fontsize);
    }

    public function generateCSV($data = array(), $filename = 'CSV', $delimiter = ','){
        
        return parent::generateCSV($data, $filename, $delimiter);
	}

    public function generateCSVStart($filename = ''){
        return parent::generateCSVStart($filename);
    }

    public function generateCSVData($data = array(), $delimiter = ','){
        return parent::generateCSVData($data, $delimiter);
    }

    public function generateCSVEnd(){
        return parent::generateCSVEnd();
    }

    public function generateXLSX($data = array(), $filename = 'XLSX', $autoWidth = false){
        return parent::generateXLSX($data, $filename, $autoWidth);
    }

    public function generateRandomString($length = 5){
        return parent::generateRandomString($length);
    }

    public function convertSerial($serial = '', $length = 10, $similar = 1){
        return parent::convertSerial($serial, $length, $similar);
    }

    public function sapRFC($rfc = '', $import = array(), $export = array(), $table = array(), $client = NULL){
		return parent::sapRFC($rfc, $import, $export, $table, $client);
	}

    public function readCSV($src = '', $encoding = 'UTF-8', $delimiter = ','){
		return parent::readCSV($src, $encoding, $delimiter);
	}

    public function readXLS($src = ''){
		return parent::readXLS($src);
	}

    public function readXLSX($src = ''){
		return parent::readXLSX($src);
	}

    //系統
    public function getDebugTrace($object = 0, $limit = 0){
        return parent::getDebugTrace($object, $limit);
    }
    
    public function getPathList($fullPath = ''){
        return parent::getPathList($fullPath);
    }

    //圖片類
    public function getExif($srcFile = ''){
        return parent::getExif($srcFile);
    }
    
    public function getImageSize($srcFile = ''){
        return parent::getImageSize($srcFile);
    }

    public function imageWatermark($srcFile = '', $watermark = '', $x = 0, $y = 0){
        return parent::imageWatermark($srcFile, $watermark, $x, $y);
    }

    public function generateBarCode($text = '', $show_text = 1, $width = 1, $height = 50, $code = '39'){
        return parent::generateBarCode($text, $show_text, $width, $height, $code);
    }

    /*public function generateSignature($text, $frame = 1, $mode = 'square'){
        return parent::generateSignature($text, $frame, $mode);
    }

    public function generateQRCard($empno, $width = 100, $logo = null){
        return parent::generateQRCard($empno, $width, $logo);
    }*/

    public function generateQRCode($content = '', $logo = 1, $logo_url = '', $size = 5, $level = 1){
        return parent::generateQRCode($content, $logo, $logo_url, $size, $level);
    }

    public function image2Text($array = array('ImagePath' => '', 'Lang' => '', 'Range' => array())){
        return parent::image2Text($array);
    }

    public function graphicsText($text = '', $font_color = '', $font_size = 12, $angle = 0, $opacity = 1, $bg_color = '', $width = 0, $height = 0){
        return parent::graphicsText($text, $font_color, $font_size, $angle, $opacity, $bg_color, $width, $height);
    }

    public function webPage2Image($url = '', $format = 'jpg', $bgColor = NULL, $width = NULL, $height = NULL, $top = NULL, $left = NULL, $clipWidth = NULL, $clipHeight = NULL){
        return parent::webPage2Image($url, $format, $bgColor, $width, $height, $top, $left, $clipWidth, $clipHeight);
    }

    public function imgResizeOrientation($srcFile = '', $width = 100, $height = NULL, $orientation = NULL){
        return parent::imgResizeOrientation($srcFile, $width, $height, $orientation);
    }

    public function homeWS($params = array()){
        return parent::homeWS($params);
    }

    public function cutString($input = '', $start = '', $end = ''){
        return parent::cutString($input, $start, $end);
    }

    public function app($app = ''){
        return parent::app($app);
    }

    //完整路徑
	public function zip($filename = '', $files = array()){
        return parent::zip($filename, $files);
    }

    public function unzip($source = '', $savePath = ''){
        return parent::unzip($source, $savePath);
    }

    public function array2XML($array = array()){
        return parent::array2XML($array);
    }

    public function xml2Json($xml = ''){
        return parent::xml2Json($xml);
    }

    public function sendSMS($immediately = 0, $mtel, $name, $message, $no = '', $senddate = '', $sendhour = ''){
        return parent::sendSMS($immediately, $mtel, $name, $message, $no, $senddate, $sendhour);
    }

    public function sendSMSResult($mtel = '', $no = ''){
        return parent::sendSMSResult($mtel, $no);
    }

    public function appExist($appName){
        return parent::appExist($appName);
    }

    public function cryptionEncode($data = array('key' => '', 'data' => '', 'method' => '')){
        return parent::cryptionEncode($data);
    }

    public function cryptionDecode($data = array('key' => '', 'data' => '', 'method' => '')){
        return parent::cryptionDecode($data);
    }

    public function encrypt($key = '', $value = ''){
        return parent::encrypt($key, $value);
    }

    public function encrypt2($key = '', $data = '', $mode = ''){
        return parent::encrypt2($key, $data, $mode);
    }

    public function decrypt($key = '', $value = ''){
        return parent::decrypt($key, $value);
    }

    public function decrypt2($key = '', $data = '', $mode = ''){
        return parent::decrypt2($key, $data, $mode);
    }

    public function getCouponMailBody($content = array('CardId', 'Name', 'MarketingName', 'CouponMoney', 'SendDate', 'StartDate', 'EndDate')){
        return parent::getCouponMailBody($content);
    }

    public function sendMail($isHtml = true, $to, $subject, $body, $cc = '', $bcc = '', $from = '', $fromMail = ''){
        return parent::sendMail($isHtml, $to, $subject, $body, $cc, $bcc, $from, $fromMail);
    }

    public function attSendMail($isHtml = true, $to = '', $subject = '', $body = '', $cc = '', $bcc = '', $att = array(), $from = '', $fromMail = ''){
        return parent::attSendMail($isHtml, $to, $subject, $body, $cc, $bcc, $att, $from, $fromMail);
    }

    public function image2base64($path = ''){
        return parent::image2base64($path);
    }

    public function base642file($base64 = '', $output = ''){
        return parent::base642file($base64, $output);
    }

    public function stringFull2Half($input = '', $type = 'P'){
		return parent::stringFull2Half($input, $type);
	}

    public function postBody($uri = '', $userpassword = '', $post = '', $header = array(), $request = '', $timeout = 120){
        return parent::postBody($uri, $userpassword, $post, $header, $request, $timeout);
    }

    public function postSSLBody($uri = '', $userpassword = '', $post = '', $header = array(), $request = '', $ssl = array(), $timeout = 120){
        return parent::postSSLBody($uri, $userpassword, $post, $header, $request, $ssl, $timeout);
    }

    public function getBody($uri = '', $userpassword = '', $post = '', $header = array(), $request = '', $timeout = 120){
        return parent::getBody($uri, $userpassword, $post, $header, $request, $timeout);
    }

    public function isJson($json = ''){
        return parent::isJson($json);
    }

    public function unicode2UTF8($struct = array()){
        return parent::unicode2UTF8($struct);
    }

    public function printPre($array = array()){
        return parent::printPre($array);
    }

    public function getMTime(){
        return parent::getMTime();
    }

    public function getNTime(){
        return parent::getNTime();
    }

    public function getIP(){
        return parent::getIP();
    }

    public function getHost(){
        return parent::getHost();
    }

    public function getBrowser(){
        return parent::getBrowser();
    }

    public function formAction($path = ''){
        return parent::formAction($path);
    }
    
    public function formToken($method = 'GET', $id = ''){
        return parent::formToken($method, $id);
    }

    public function selectArea($id = 'area', $class = ''){
		return parent::selectArea($id, $class);
	}

	public function selectStoreDept($id = 'store_dept', $class = ''){
		return parent::selectStoreDept($id, $class);
	}

	public function selectStore($id = 'store', $class = ''){
		return parent::selectStore($id, $class);
	}

	public function selectDeliveryType($id = 'delivery_type', $class = ''){
		return parent::selectDeliveryType($id, $class);
	}

	public function selectSdept($id = 'sdept', $class = ''){
		return parent::selectSdept($id, $class);
	}

	public function selectSdeptClas($id = 'sdept_clas', $class = ''){
		return parent::selectSdeptClas($id, $class);
	}

	public function selectSdeptSclas($id = 'sdept_sclas', $class = ''){
		return parent::selectSdeptSclas($id, $class);
	}

	public function selectSdeptM($id = 'sdeptM', $class = ''){
		return parent::selectSdeptM($id, $class);
	}

	public function selectPM($id = 'pm', $class = ''){
		return parent::selectPM($id, $class);
	}

	public function selectACC($id = 'acc', $class = ''){
		return parent::selectACC($id, $class);
	}

    public function pagination($count = 0, $pagerow = 0){
        return parent::pagination($count, $pagerow);
    }

    public function ckeditor4($id = 'editor1', $content = '', $width = '100%', $height = 250, $config = array()){
        return parent::ckeditor4($id, $content, $width, $height, $config);
    }

    public function phpHeader($contentType = '', $arg1 = '', $arg2 = ''){
        return parent::phpHeader($contentType, $arg1, $arg2);
    }
    
    public function htmlHeadV1($siteName = '', $meta = '', $js = array()){
        return parent::htmlHeadV1($siteName, $meta, $js);
    }

    public function htmlHead($siteName = '', $meta = ''){
        return parent::htmlHead($siteName, $meta);
    }

    public function htmlHead3($siteName = '', $meta = ''){
        return parent::htmlHead3($siteName, $meta);
    }

    public function htmlLoading($content = ''){
        return parent::htmlLoading($content);
    }

    public function homeHead3($siteName = '', $meta = ''){
        return parent::homeHead3($siteName, $meta);
    }

    public function homeHead4($siteName = '', $meta = ''){
        return parent::homeHead4($siteName, $meta);
    }

    public function homeTopBar($title = '', $style = ''){
        return parent::homeTopBar($title, $style);
    }

    public function homeFooter($content = '', $style = ''){
        return parent::homeFooter($content, $style);
    }

    public function cdnHead($siteName = '', $meta = ''){
        return parent::cdnHead($siteName, $meta);
    }

    public function webHead($siteName = '', $meta = ''){
        return parent::webHead($siteName, $meta);
    }

    public function webTopBar($title = '', $style = ''){
        return parent::webTopBar($title, $style);
    }

    public function accordionMenu($accordionArray = array()){
        return parent::accordionMenu($accordionArray);
    }

    public function navBar($rightText = '', $homepage = '', $style = '', $navBarMenu = array()){
        return parent::navBar($rightText, $homepage, $style, $navBarMenu);
    }

    public function webNavBar($rightText = '', $homepage = '', $style = ''){
        return parent::webNavBar($rightText, $homepage, $style);
    }

    public function webFooter($content = '', $style = ''){
        return parent::webFooter($content, $style);
    }

    public function htmlFrame($src = '', $id = 'iframe-page', $height = ''){
		return parent::htmlFrame($src, $id, $height);
	}

    public function loadHTML($id = 'load-html', $class = ''){
		return parent::loadHTML($id, $class);
	}

    public function htmlFooter($content = ''){
        return parent::htmlFooter($content);
    }

    //常用主檔
    public function getInvoiceType($yyyymmdd = '', $invoice = ''){
        return parent::getInvoiceType($yyyymmdd, $invoice);
    }
	public function getEmp($empno = 'AZZZA'){
		return parent::getEmp($empno);
	}
	
	public function getDept($depno = ''){
		return parent::getDept($depno);
	}

	public function getSDept($sdept = '', $iclas = '0', $isclas = '0'){
		return parent::getSDept($sdept, $iclas, $isclas);
	}

    public function getProduct($count = 1, $sdept = '', $clas = '', $sclas = ''){
        return parent::getProduct($count, $sdept, $clas, $sclas);
    }

    public function getSKU($sku = '0', $sapStock = 0){
		return parent::getSKU($sku, $sapStock);
	}

    public function getDeliverOrder($NoOrMtel = ''){
        return parent::getDeliverOrder($NoOrMtel);
    }

    public function getRepair($NoOrMtel = ''){
        return parent::getRepair($NoOrMtel);
    }

    public function getRepairCode(){
        return parent::getRepairCode();
    }

    public function getNoSKU(){
        return parent::getNoSKU();
    }

    public function getCouponStatus(){
        return parent::getCouponStatus();
    }

    public function getCouponSendStatus(){
        return parent::getCouponSendStatus();
    }

    public function get0800Case($NoOrMtelOrCardId = ''){
        return parent::get0800Case($NoOrMtelOrCardId);
    }

	public function getSaleDept($storedepno = ''){
		return parent::getSaleDept($storedepno);
	}
    
    public function getMember($cardid = 'AZZZA', $trx = 0){
		return parent::getMember($cardid, $trx);
	}

    public function getPM($sdept = ''){
		return parent::getPM($sdept);
	}

    public function getDeptLevel($depno = ''){
        return parent::getDeptLevel($depno);
    }

	public function getAccounting($depno = ''){
		return parent::getAccounting($depno);
	}
    
    public function getApsupp($venno = '', $type = 'V'){
		return parent::getApsupp($venno, $type);
	}

    public function getAddress($addr1 = '', $addr2 = ''){
        return parent::getAddress($addr1, $addr2);
    }

    public function getWelfareLevel($level = ''){
        return parent::getWelfareLevel($level);
    }

    public function getBank($search = ''){
        return parent::getBank($search);
    }

    public function getOrder($orderno = '宅配單編號', $year = ''){
        return parent::getOrder($orderno, $year);
    }
    
    public function getFaker($count = 1, $language = 'zh_TW'){
        return parent::getFaker($count, $language);
    }

    public function getURI(){
        return parent::getURI();
    }

    public function textMask($text = '', $mask = '*', $qty = 1){
        return parent::textMask($text, $mask, $qty);
    }

    public function wordSplit($text = '', $mode = ''){//mode：full || search
        return parent::wordSplit($text, $mode);
    }

    public function addressSplit($address = ''){
        return parent::addressSplit($address);
    }

    //DB
    public function tableDelete($dbDotTable = '', $columnData = array()){
        return parent::tableDelete($dbDotTable, $columnData);
    }
    
    public function tableInsert($dbDotTable = '', $columnData = array()){
		return parent::tableInsert($dbDotTable, $columnData);
	}

    public function tableInsertUpdate($dbDotTable = '', $columnData = array(), $offset = 9999){
		return parent::tableInsertUpdate($dbDotTable, $columnData, $offset);
	}

	public function tableUpdate($dbDotTable = '', $columnData = array(), $offset = 9999){
		return parent::tableUpdate($dbDotTable, $columnData, $offset);
	}

    public function tableInsertColumn($array = array()){
		return parent::tableInsertColumn($array);
	}

	public function tableInsertValues($array = array()){
		return parent::tableInsertValues($array);
	}

	public function tableUpdateColumn($array = array(), $offset = 0){
		return parent::tableUpdateColumn($array, $offset);
	}

	public function tableUpsert($array = array(), $offset = 0){
		return parent::tableUpsert($array, $offset);
	}

    public function tableInSQL($array = array()){
        return parent::tableInSQL($array);
	}

    public function removeEmoji($string = ''){
		return parent::removeEmoji($string);
	}

    public function setSiteName($name){
		$this->siteName = $name;
	}
	
	public function setTitle($title = ''){
		$this->pageTitle = $title;
	}

	public function setGet($uriArray = array()){
		$this->get = (array) $uriArray;
	}

	public function setPost($postArray = array()){
		$this->post = (array) $postArray;
	}

    public function __destruct(){
        //
    }
}
