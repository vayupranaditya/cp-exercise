program bebek_untuk_teman;
var
	n,m:integer;
begin
	read(n,m);
	if (n>=1) AND (n<=1000) AND (m>=1) AND (m<=1000) then
	begin
		writeln('masing-masing ',n div m);
		writeln('bersisa ',n mod m);
	end;
end.