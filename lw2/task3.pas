PROGRAM PrintHelloWithName(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString, Param, Name: STRING;
BEGIN {PrintHelloWithName}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  Param := Copy(QueryString, 1, 5);
  IF Param = 'name='
  THEN
    BEGIN
      Name := Copy(QueryString, 6, 30);
      IF Pos('&', Name) <> 0
      THEN
        Name := Copy(Name, 1, Pos('&', Name) - 1);
      WRITELN('Hello dear, ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!')      
END. {PrintHelloWithName}
