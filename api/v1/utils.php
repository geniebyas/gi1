1xx - Informational Responses:

100: Continue
101: Switching Protocols
102: Processing
2xx - Success:

200: OK
201: Created
202: Accepted
204: No Content
206: Partial Content
3xx - Redirection:

300: Multiple Choices
301: Moved Permanently
302: Found (Moved Temporarily)
304: Not Modified
307: Temporary Redirect
4xx - Client Errors:

400: Bad Request
401: Unauthorized
403: Forbidden
404: Not Found
405: Method Not Allowed
409: Conflict
429: Too Many Requests
5xx - Server Errors:

500: Internal Server Error
501: Not Implemented
502: Bad Gateway
503: Service Unavailable
504: Gateway Timeout

API Template
<?php
include 'config/connection.php';

try{
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uid'])){

}else{
    echo json_encode(array("response" => "Invalid Request","code"=>400));

}
}catch(Exception $e){
    echo json_encode(array("response" => $e->getMessage(),"code"=>$e->getCode()));
}

?>