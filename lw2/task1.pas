PROGRAM HttpResponse(INPUT, OUTPUT);
USES
  DOS;
BEGIN {HttpResponse}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('Request Method: ', GetEnv('REQUEST_METHOD'));
  WRITELN('Query String: ', GetEnv('QUERY_STRING'));
  WRITELN('Content Lenght: ', GetEnv('CONTENT_LENGTH'));
  WRITELN('HTTP User Agent: ', GetEnv('HTTP_USER_AGENT'));
  WRITELN('HTTP Host: ', GetEnv('HTTP_HOST'))
END. {HttpResponse}