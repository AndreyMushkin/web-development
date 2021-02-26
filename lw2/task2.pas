PROGRAM SarahRevereWeb(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {SarahRevereWeb}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  IF QueryString = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF QueryString = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('Sarah didn''t say.')
END. {SarahRevereWeb}